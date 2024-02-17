<?php

namespace app\helpers;

use app\models\base\DbcActiveRecord;
use Traversable;

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

        // Calculate string block offset
        $this->stringBlockOffset = $this->perRecord * $this->count + $this->headerLength;
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
        $this->stringBlockLength = 784; // Because is that on the reader it is

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
            $records = $this->targetClass::find()
                ->offset($offset)
                ->limit($batchSize)
                ->all();

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
    public function writeRecord(DbcActiveRecord $record)
    {
        $definition = $record->getDefinition();
        $definitionKeys = array_keys($definition);
        $values = $record->exportDbc();
        $fields = count($definition);

        for ($i = 0; $i < $fields; $i++) {
            $columnDefinition = $definition[$definitionKeys[$i]]; // Get the attribute by its position
            // Read value based on the type of the attribute
            self::writeAttributeValue($this, $values[$i], $columnDefinition);
        }
    }

    /**
     * Writes a UInt32 value to the DBC file.
     * 
     * @param int $value
     */
    public function setUInt32Value(int $value)
    {
        fwrite($this->store, pack("V", $value));
    }

    /**
     * Writes an Int32 value to the DBC file.
     * 
     * @param int $value
     */
    public function setInt32Value(int $value)
    {
        fwrite($this->store, pack("l", $value));
    }

    /**
     * Writes a Single value to the DBC file.
     * 
     * @param float $value
     */
    public function setSingleValue(float $value)
    {
        fwrite($this->store, pack("f", $value));
    }

    /**
     * Writes a String value to the DBC file.
     * 
     * @param string $value
     */
    public function setStringValue(string $value)
    {
        // Write string length (4 bytes, unsigned long)
        fwrite($this->store, pack("V", strlen($value)));
        // Write string content
        fwrite($this->store, $value);
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
