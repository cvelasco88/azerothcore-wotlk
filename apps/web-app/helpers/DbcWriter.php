<?php

namespace app\helpers;

use app\models\base\DbcActiveRecord;

class DbcWriter
{
    protected const HEADER_LENGTH_DBC = 20;
    protected const HEADER_LENGTH_DB2 = 48;
    protected const HEADER_MAGIC_DBC = 0x43424457;
    protected const HEADER_MAGIC_DB2 = 0x32424457;
    protected const HEADER_MAGIC_ADB_CACHE = 0x32484357;

    protected $store;
    protected $ownsStream;
    protected $format;

    /**
     * @param resource $storage
     */
    public function __construct($storage, $format = DbcFileFormat::Dbc, bool $ownsStorage = true)
    {
        if (!is_resource($storage) || get_resource_type($storage) !== 'stream') {
            throw new \InvalidArgumentException("Storage is not a valid stream resource.");
        }

        $metaData = stream_get_meta_data($storage);
        if (!$metaData['seekable'] || strpos($metaData['mode'], 'w') === false) {
            throw new \InvalidArgumentException("Storage stream must be seekable and writable.");
        }

        $this->store = $storage;
        $this->ownsStream = $ownsStorage;
        $this->format = $format;

        // Write the header values
        // Write the magic number depending on the format
        switch ($this->format) {
            case DbcFileFormat::Dbc:
                $magic = self::HEADER_MAGIC_DBC;
                break;
            case DbcFileFormat::Db2:
            case DbcFileFormat::AdbCache:
                $magic = self::HEADER_MAGIC_DB2;
                break;
            default:
                throw new \Exception("Invalid header format.");
        }
        fwrite($this->store, pack("V", $magic));

        // Write the count, record length, per record, and string block length
        fwrite($this->store, pack("V", $this->count));
        fwrite($this->store, pack("V", $this->recordLength));
        fwrite($this->store, pack("V", $this->perRecord));
        fwrite($this->store, pack("V", $this->stringBlockLength));

        if ($this->format != DbcFileFormat::Dbc) {
            // Write additional values for non-DBC format
            fwrite($this->store, pack("V", $this->tableHash));
            fwrite($this->store, pack("V", $this->build));
            fwrite($this->store, pack("V", $this->lastWrittenTimestamp));
            fwrite($this->store, pack("V", $this->minId));
            fwrite($this->store, pack("V", $this->maxId));
            fwrite($this->store, pack("V", $this->locale));
            // Skip the next 4 bytes
            fwrite($this->store, pack("V", 0));
        }

        // Calculate string block offset
        $this->stringBlockOffset = $this->perRecord * $this->count + $this->headerLength;
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
