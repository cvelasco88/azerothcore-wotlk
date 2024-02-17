<?php

namespace app\helpers;

use app\models\base\DbcActiveRecord;
use Generator;
use Traversable;
use yii\base\InvalidArgumentException;
use yii\db\ActiveRecord;

/**
 * Adaptation from https://github.com/robpaveza/dbcexplorer/tree/master/src/DbcReader
 * It contains modifications from the source
 */
class DbcReader implements \IteratorAggregate, \Countable
{
    protected const HEADER_LENGTH_DBC = 20;
    protected const HEADER_LENGTH_DB2 = 48;
    protected const HEADER_MAGIC_DBC = 0x43424457;
    protected const HEADER_MAGIC_DB2 = 0x32424457;
    protected const HEADER_MAGIC_ADB_CACHE = 0x32484357;

    protected $targetClass;
    protected $format;
    protected $count;
    protected $recordLength;
    protected $perRecord;
    protected $stringBlockLength;
    protected $stringBlockOffset;
    protected $ownsStream;
    protected $store;
    protected $reader;
    protected $headerLength;
    protected $idLookup;
    protected $tableHash;
    protected $build;
    protected $lastWrittenTimestamp;
    protected $minId;
    protected $maxId;
    protected $locale;

    private string $language = DbcLanguage::EN_US;

    /**
     * @param string $targetClass
     * @param mixed $storage
     * @param bool $ownsStorage
     */
    public function __construct(string $targetClass, $storage, bool $ownsStorage = true)
    {
        if (!is_subclass_of($targetClass, ActiveRecord::class)) {
            throw new \InvalidArgumentException("$targetClass must inherit from \yii\db\ActiveRecord");
        }
        $this->targetClass = $targetClass;

        if (!is_resource($storage) || get_resource_type($storage) !== 'stream')
            throw new \InvalidArgumentException("storage is not a valid stream resource.");

        $metaData = stream_get_meta_data($storage);
        if (!$metaData['seekable'] || !$metaData['mode'][0] === 'r')
            throw new \InvalidArgumentException("storage stream must be seekable and readable.");


        $this->store = $storage;
        $this->ownsStream = $ownsStorage;

        fseek($this->store, 0, SEEK_SET);
        $magic = unpack("V", fread($this->store, 4))[1]; // Read the first 4 bytes as an unsigned long

        if ($magic == self::HEADER_MAGIC_DBC) {
            $this->format = DbcFileFormat::Dbc;
            $this->headerLength = self::HEADER_LENGTH_DBC;
        } elseif ($magic == self::HEADER_MAGIC_DB2) {
            $this->format = DbcFileFormat::Db2;
            $this->headerLength = self::HEADER_LENGTH_DB2;
        } elseif ($magic == self::HEADER_MAGIC_ADB_CACHE) {
            $this->format = DbcFileFormat::AdbCache;
            $this->headerLength = self::HEADER_LENGTH_DB2;
        } else {
            throw new \Exception("Invalid header.");
        }

        $this->count = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
        $this->recordLength = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
        $this->perRecord = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
        $this->stringBlockLength = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes

        if ($this->format != DbcFileFormat::Dbc) {
            $this->tableHash = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            $this->build = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            $this->lastWrittenTimestamp = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            $this->minId = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            $this->maxId = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            $this->locale = unpack("V", fread($this->store, 4))[1]; // Read the next 4 bytes
            fread($this->store, 4); // Skip the next 4 bytes

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

        $this->stringBlockOffset = $this->perRecord * $this->count + $this->headerLength;
    }

    /**
     * @param string $language (from DbcLanguage)
     */
    public function setLanguage($language) {
        $reflection = new \ReflectionClass(DbcLanguage::class);
        $classConstants = $reflection->getConstants();
        
        if (in_array($language, $classConstants, true)) {
            $this->language = $language;        
        } else {
            throw new InvalidArgumentException("Language '$language' not found");
        }
    }

    public function getStringBlockLength()
    {
        return $this->stringBlockLength;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getColumnCount()
    {
        return $this->recordLength;
    }

    public function getFileFormat()
    {
        return $this->format;
    }

    public function getDataPosition()
    {
        return $this->headerLength;
    }

    public function getString($stringTablePosition)
    {
        if ($this->store === null) {
            throw new \Exception("DbcReader");
        }

        $curPos = ftell($this->store);
        fseek($this->store, $this->stringBlockOffset + $stringTablePosition, SEEK_SET);

        $string = '';
        while (($char = fgetc($this->store)) !== chr(0)) {
            $string .= $char;
        }

        fseek($this->store, $curPos, SEEK_SET);

        if (strlen($string) > 0) {
            // Convert encoding if necessary
            $string = mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string));
        }

        return $string;
    }

    public function getUInt32Value($record, $column)
    {
        fseek($this->store, $record * $this->perRecord + $this->headerLength + $column * 4, SEEK_SET);
        return unpack("V", fread($this->store, 4))[1];
    }

    public function getInt32Value($record, $column)
    {
        fseek($this->store, $record * $this->perRecord + $this->headerLength + $column * 4, SEEK_SET);
        return unpack("l", fread($this->store, 4))[1];
    }

    public function getSingleValue($record, $column)
    {
        fseek($this->store, $record * $this->perRecord + $this->headerLength + $column * 4, SEEK_SET);
        return unpack("f", fread($this->store, 4))[1];
    }

    public function getStringValue($record, $column)
    {
        fseek($this->store, $record * $this->perRecord + $this->headerLength + $column * 4, SEEK_SET);
        $offset = unpack("V", fread($this->store, 4))[1];
        return $this->getString($offset);
    }

    public function getRecords(): Generator
    {
        $curPos = $this->headerLength;
        for ($i = 0; $i < $this->count; $i++) {
            yield new DbcRecord($curPos, $i, $this);
            $curPos += $this->recordLength * 4;
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

        $this->count = $this->recordLength = $this->perRecord = $this->stringBlockLength = $this->stringBlockOffset = 0;
    }

    public function getIterator(): Traversable
    {
        for ($i = 0; $i < $this->count; $i++) {
            yield $this->getAt($i);
        }
    }

    private function getAt($index)
    {
        $curPos = $this->headerLength + ($index * ($this->recordLength * 4));
        $record = new DbcRecord($curPos, $index, $this);

        // Seek to the position of the record
        // fseek($this->store, $this->perRecord * $index + $this->headerLength, SEEK_SET);

        return $record;
    }

    public function count(): int
    {
        return $this->count;
    }

    /**
     * pre: stream open
     * @param DbcRecord $record
     * @return \yii\db\ActiveRecord
     */
    public function getRecordInfo(DbcRecord $record)
    {
        // Create a new instance of $targetClass (\yii\db\ActiveRecord)
        $target = new $this->targetClass();

        // Populate the target using the ConvertSlow method
        self::ConvertSlow($this, $record, $target);
        // self::ConvertSlowOld($this, $this->recordLength, $target, $index);
        return $target;
    }

    /**
     * @param DbcReader $reader
     * @param DbcRecord $record
     * @param object $target
     */
    private static function ConvertSlow(DbcReader $reader, DbcRecord $record, DbcActiveRecord $target)
    {
        $values = [];
        $definition = $target->getDefinition($reader->language); // Fix language usage
        $definitionKeys = array_keys($definition);

        for ($i = 0; $i < $reader->recordLength; $i++) {
            $columnDefinition = $definition[$definitionKeys[$i]]; // Get the attribute by its position
            // Read value based on the type of the attribute
            $values[$i] = self::readAttributeValue($record, $i, $columnDefinition);
        }

        $target->importFromDbc($values, $definition);
    }

    /**
     * @param DbcReader $reader
     * @param int $fieldsPerRecord
     * @param object $target // generic case
     * @param int $record // Record index (row)
     */
    private static function ConvertSlowOld(DbcReader $reader, $fieldsPerRecord, $target, int $record)
    {
        $values = [];
        for ($i = 0; $i < $fieldsPerRecord; $i++) {
            // Read integer value from the reader
            $values[$i] = $reader->getInt32Value($record, $i);
        }

        $reflectionClass = new \ReflectionClass(get_class($target));
        // Get all properties of the target class
        $properties = $reflectionClass->getProperties();

        foreach ($properties as $position => $property) {
            // Get the property name
            $propertyName = $property->getName();
            // Set the value to the property of the target object
            $target->$propertyName = $values[$position];
        }
    }

    /**
     * Read attribute value based on the type of the attribute in the ActiveRecord model.
     *
     * @param DbcRecord $record
     * @param int $column
     * @param array $columnDefinition // ['type' => $columnType, 'unsigned' => $isUnsigned,]
     * @return mixed
     */
    private static function readAttributeValue(DbcRecord $record, int $column, array $columnDefinition)
    {
        switch ($columnDefinition['type']) {
            case 'bigint':
            case 'integer':
                if($columnDefinition['unsigned']) {
                    $value = $record->getUInt32Value($column);
                } else {
                    $value = $record->getInt32Value($column);
                }
                break;
            case 'float':
                $value = $record->getSingleValue($column);
                break;
            case 'string':
            case 'text':
                $value = $record->getStringValue($column);
                break;
            default:
                $value = $record->getInt32Value($column);
                break;
        }
        return $value;
    }

}