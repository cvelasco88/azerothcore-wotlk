<?php

namespace app\helpers;

use app\models\base\DbcActiveRecord;
use Traversable;

/**
 * DbcWriter is a utility class designed to facilitate the writing of DBC (Database Cache) files.
 * It allows for the creation and modification of DBC files, which are structured binary files used 
 * to cache database records efficiently. This class provides methods to write individual records, 
 * as well as set various types of values (UInt32, Int32, Single, and String) within the DBC file.
 * 
 * Note: DBC files typically consist of a header section followed by a data section, which includes 
 * records and a string block for storing variable-length strings. This class handles the writing of 
 * both sections and manages the string block dynamically as strings are added or updated.
 * 
 * Most methods in this class require a valid stream resource as input, which represents the 
 * file to be written. Additionally, it supports different DBC formats (Dbc, Db2, AdbCache) 
 * and can adjust the header structure accordingly.
 * 
 * Some key functionalities include:
 * - Writing individual records to the DBC file.
 * - Setting different types of values (UInt32, Int32, Single, and String).
 * - Managing the string block dynamically to handle variable-length strings.
 * - Handling different DBC formats and adjusting header structure accordingly.
 * - Closing the DBC file when done.
 * 
 * Example usage:
 * ```
 * $storage = fopen('example.dbc', 'wb');
 * $dbcWriter = new DbcWriter('App\Models\MyDbcRecord', $storage);
 * $dbcWriter->writeRecord($myRecord);
 * $dbcWriter->close();
 * ```
  */
class DbcWriter implements \IteratorAggregate, \Countable
{
    protected const HEADER_LENGTH_DBC = 20;
    protected const HEADER_LENGTH_DB2 = 48;
    protected const HEADER_MAGIC_DBC = 0x43424457;
    protected const HEADER_MAGIC_DB2 = 0x32424457;
    protected const HEADER_MAGIC_ADB_CACHE = 0x32484357;

    protected $store;
    protected $ownsStream;
    protected $format;
    protected $count;
    protected $recordLength;
    protected $perRecord;
    protected $stringBlockLength;
    protected $headerLength;
    protected $tableHash;
    protected $build;
    protected $lastWrittenTimestamp;
    protected $minId;
    protected $maxId;
    protected $locale;
    protected $stringBlockOffset;
    protected $targetClass;
    protected $_language;

    /**
     * Internal value. Keeps pointing to the last string "ending" pointer when
     * string is empty. When it's the first time as well it initialize the chr(0)
     * if needed
     */
    protected $stringBlockLengthBeforeZero;


    /**
     * @param resource $storage
     */
    public function __construct(string $targetClass, $storage, bool $ownsStorage = true, $format = DbcFileFormat::Dbc, array $config = [])
    {
        if (!is_subclass_of($targetClass, DbcActiveRecord::class)) {
            throw new \InvalidArgumentException("$targetClass must inherit from \app\models\base\DbcActiveRecord");
        }

        if (!is_resource($storage) || get_resource_type($storage) !== 'stream') {
            throw new \InvalidArgumentException("Storage is not a valid stream resource.");
        }

        $metaData = stream_get_meta_data($storage);
        if (!$metaData['seekable'] || strpos($metaData['mode'], 'w') === false) {
            throw new \InvalidArgumentException("Storage stream must be seekable and writable.");
        }

        $this->store = $storage;
        $this->targetClass = $targetClass;
        $this->ownsStream = $ownsStorage;
        $this->format = $format;

        // Write the header
        $this->writeHeader($config);
    }

    /**
     * Writes initial values for count, record length, per record, and string block length.
     * @param array $config
     */
    protected function writeHeader(array $config)
    {
        $magic = $this->initWriterHeader($config);

        // Write the first 4 bytes as an unsigned long
        $this->setUInt32Value($magic);

        $this->setUInt32Value($this->count);
        $this->setUInt32Value($this->recordLength);
        $this->setUInt32Value($this->perRecord);
        $this->setUInt32Value($this->stringBlockLength);

        if ($this->format != DbcFileFormat::Dbc) {
            // Write additional values for non-DBC format
            $this->setUInt32Value($this->tableHash);
            $this->setUInt32Value($this->build);
            $this->setUInt32Value($this->lastWrittenTimestamp);
            $this->setUInt32Value($this->minId);
            $this->setUInt32Value($this->maxId);
            $this->setUInt32Value($this->locale);
            // Skip the next 4 bytes
            $this->setUInt32Value(0);
        }        
    }

    /**
     * Writes the header to the DBC file.
     * @param array $config
     * @return int
     */
    protected function initWriterHeader(array $config)
    {
        // Write the magic number depending on the format
        switch ($this->format) {
            case DbcFileFormat::Dbc:
                $magic = self::HEADER_MAGIC_DBC;
                $this->headerLength = self::HEADER_LENGTH_DBC;
                break;
            case DbcFileFormat::Db2:
            case DbcFileFormat::AdbCache:
                $magic = self::HEADER_MAGIC_DB2;
                $this->headerLength = self::HEADER_LENGTH_DB2;
                break;
            default:
                throw new \Exception("Invalid header format.");
        }

        $target = new $this->targetClass();
        $definition = $target->getDefinition();
        // Set initial values for header fields
        $this->count = $this->targetClass::find()->count();
        $this->recordLength = count($definition);
        $this->perRecord = $this->recordLength * 4;
        $this->stringBlockLength = 0; // updated when written strings
        $this->stringBlockLengthBeforeZero = 0;

        if ($this->format != DbcFileFormat::Dbc) {
            $this->tableHash = $config['tableHash'];
            $this->build = $config['build'];
            $this->lastWrittenTimestamp = $config['lastWrittenTimestamp'];
            $this->minId = $config['minId'];
            $this->maxId = $config['maxId'];
            $this->locale = $config['locale'];

            if ($this->maxId != 0) {
                $this->idLookup = $this->headerLength;
                $numRows = $this->maxId - $this->minId + 1;
                $this->headerLength += $numRows * 6;
            }
        } else {
            $this->tableHash = 0;
            $this->build = -1;
            $this->lastWrittenTimestamp = 0;
            $this->minId = -1;
            $this->maxId = -1;
            $this->locale = 0;
        }

        // Calculate string block offset
        $this->stringBlockOffset = $this->perRecord * $this->count + $this->headerLength;

        return $magic;
    }

    public function getIterator(): Traversable
    {
        for ($i = 0; $i < $this->count; $i++) {
            yield $this->getAt($i);
        }
    }

    private function getAt($index)
    {
        return $this->targetClass::find()
            ->offset($index)
            ->limit(1)
            ->one();
    }

    public function count(): int
    {
        return $this->count;
    }

    /**
     * @return DbcActiveRecord[]
     */
    public function getRecords(): \Generator
    {
        // Define batch size
        $batchSize = 1000; // Adjust as needed            

        // Process records in batches
        for ($offset = 0; $offset < $this->count; $offset += $batchSize) {
            // Retrieve records for the current batch
            $query = $this->targetClass::find()
                ->offset($offset)
                ->limit($batchSize);

            $this->targetClass::exportQuery($this, $query);

            $records = $query->all();

            // Process records
            foreach ($records as $record) {
                yield $record;
            }
        }
    }

    /**
     * Writes a record to the DBC file.
     * 
     * @param DbcActiveRecord $record
     * @throws \Exception
     */
    public function writeRecord(DbcActiveRecord $record, array $definition = null)
    {
        if (is_null($definition)) {
            $definition = $record->getDefinition();
        }
        $definitionKeys = array_keys($definition);
        $values = $record->exportToDbc($this, $definition);

        for ($i = 0; $i < $this->recordLength; $i++) {
            $columnDefinition = $definition[$definitionKeys[$i]]; // Get the attribute by its position
            // Read value based on the type of the attribute
            self::writeAttributeValue($this, $values[$i], $columnDefinition);
        }
    }

    /**
     * Writes a UInt32 value to the DBC file.
     * 
     * @param int|null $value
     */
    public function setUInt32Value(?int $value)
    {
        fwrite($this->store, pack("V", $value ?? 0));
    }

    /**
     * Writes an Int32 value to the DBC file.
     * 
     * @param int|null $value
     */
    public function setInt32Value(?int $value)
    {
        fwrite($this->store, pack("l", $value ?? 0));
    }

    /**
     * Writes a Single value to the DBC file.
     * 
     * @param float|null $value
     */
    public function setSingleValue(?float $value)
    {
        fwrite($this->store, pack("f", $value ?? 0));
    }

    /**
     * Writes a String value to the DBC file.
     * 
     * @param string|null $value
     */
    public function setStringValue(?string $value)
    {
        if(is_null($value)) {
            // re-use last 0 char
            $this->setUInt32Value($this->stringBlockLengthBeforeZero);
            // Update the string at the given offset with the new value
            $this->setString($value);
        } 
        
        if(is_null($value) || $this->stringBlockLengthBeforeZero == 0) {
            $this->setUInt32Value($this->stringBlockLength);
            // Update the string at the given offset with the new value
            $this->setString($value);
            $this->updateStringBlockLength();
        }
    }

    public function __destruct()
    {
        $this->dispose();
    }

    public function dispose()
    {
        if ($this->ownsStream && $this->store !== null) {
            fclose($this->store);
            $this->store = null;
        }
    }

    /**
     * Closes the DBC file.
     */
    public function close()
    {
        $this->dispose();
    }

    public function setLanguage(string $language) {
        if(!DbcLanguage::isValidLanguage($language)) {
            throw new \InvalidArgumentException("Invalid language: $language");
        }
        $this->_language = $language;
    }

    public function getLanguage() {
        return $this->_language;
    }

    // PRIVATE METHODS

    /**
     * @param string|null $value
     */
    private function setString(?string $value)
    {
        $curPos = ftell($this->store);
        fseek($this->store, $this->stringBlockOffset + $this->stringBlockLength, SEEK_SET);

        if(!is_null($value)) {
            // Write the new string to the file
            fwrite($this->store, $value);
        }

        if(!is_null($value) || $this->stringBlockLengthBeforeZero == 0) {
            // Calculate the offset based on the current position
            $this->stringBlockLengthBeforeZero = ftell($this->store) - $this->stringBlockOffset;
            // Write the null character to set the limit of the string
            fwrite($this->store, chr(0));
            // Calculate the offset based on the current position
            $this->stringBlockLength = ftell($this->store) - $this->stringBlockOffset;
        }

        fseek($this->store, $curPos, SEEK_SET);
    }

    private function updateStringBlockLength()
    {
        $curPos = ftell($this->store);
        $stringBlockLengthHeaderColumn = 4;
        fseek($this->store, $stringBlockLengthHeaderColumn * 4, SEEK_SET);

        // overwrite last stringBlockLength
        $this->setUInt32Value($this->stringBlockLength);
        // restore cursor
        fseek($this->store, $curPos, SEEK_SET);
    }

    /**
     * Read attribute value based on the type of the attribute in the ActiveRecord model.
     *
     * @param int|string $value
     * @param array $columnDefinition // ['type' => $columnType, 'unsigned' => $isUnsigned,]
     */
    private static function writeAttributeValue(DbcWriter $dbcWriter, $value, array $columnDefinition)
    {
        $columnType = $columnDefinition['type'];
        $isUnsigned = $columnDefinition['unsigned'] ?? false;

        switch ($columnType) {
            case 'bigint':
            case 'integer':
                if ($isUnsigned) {
                    $dbcWriter->setUInt32Value($value);
                } else {
                    $dbcWriter->setInt32Value($value);
                }
                break;
            case 'float':
                $dbcWriter->setSingleValue($value);
                break;
            case 'string':
            case 'text':
                $dbcWriter->setStringValue($value);
                break;
            default:
                // Handle unsupported types or treat them as integers
                $dbcWriter->setInt32Value($value);
                break;
        }
    }
}
