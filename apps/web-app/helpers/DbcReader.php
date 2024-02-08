<?php

namespace app\helpers;
use Generator;
use Traversable;


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

    public function __construct(string $targetClass, $storage, $ownsStorage = true)
    {
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
        if ($this->store === null)
            throw new \Exception("DbcReader");

        $curPos = ftell($this->store);

        fseek($this->store, $this->stringBlockOffset + $stringTablePosition, SEEK_SET);
        $len = 0;
        while (($byte = fread($this->store, 1)) !== false && $byte !== chr(0)) {
            $len++;
        }

        fseek($this->store, $this->stringBlockOffset + $stringTablePosition, SEEK_SET);
        $temp = fread($this->store, $len);
        fseek($this->store, $curPos, SEEK_SET);
        return mb_convert_encoding($temp, "UTF-8", mb_detect_encoding($temp));
    }

    public function getInt32Value($record, $column)
    {
        fseek($this->store, $record * $this->perRecord + $this->headerLength + $column * 4, SEEK_SET);
        return unpack("V", fread($this->store, 4))[1];
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
        // Seek to the position of the record
        fseek($this->store, $this->perRecord * $index + $this->headerLength, SEEK_SET);

        // Create a new instance of ChatProfanityRecord
        $target = new $this->targetClass();

        // Populate the target using the ConvertSlow method
        self::ConvertSlow($this, $this->recordLength, $target, $index);

        return $target;
    }

    public function count(): int
    {
        return $this->count;
    }

    /**
     * @param DbcReader $reader
     */
    private static function ConvertSlow(DbcReader $reader, $fieldsPerRecord, $target, $record)
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

}