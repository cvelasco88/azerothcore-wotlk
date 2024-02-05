<?php

namespace app\helpers;


class DbcReader
{
    const HEADER_SIZE = 20;
    const WDBC_FMT_SIG = 0x43424457; // WDBC

    public $recordsCount;
    public $fieldsCount;
    public $recordSize;
    public $stringTableSize;

    public $recordsData;
    private $stringsTable;
    private $_records;


    public function __construct(string $dbcFile)
    {
        $stream = fopen($dbcFile, 'rb');

        if ($stream === false) {
            throw new \Exception('Failed to open WDBC file.');
        }  
        
        $fileInfo = fstat($stream);
        if ($fileInfo['size'] < self::HEADER_SIZE) {
            throw new \Exception('Failed to read WDBC file header.');
        }

        $magic = $this->readUInt32($stream);

        if ($magic != self::WDBC_FMT_SIG) {
            throw new \Exception("WDBC file is corrupted!");
        }

        $this->recordsCount = $this->readUInt32($stream);
        $this->fieldsCount = $this->readUInt32($stream);
        $this->recordSize = $this->readUInt32($stream);
        $this->stringTableSize = $this->readUInt32($stream);

        if ($this->recordsCount == 0) {
            return;
        }

        $this->recordsData = fread($stream, $this->recordsCount * $this->recordSize);
        $this->recordsData = array_pad(unpack('C*', $this->recordsData), count($this->recordsData) + 8, 0); // pad with extra zeros so we don't crash when reading

        for ($i = 0; $i < $this->recordsCount; $i++) {
            $bitReader = new BitReader($this->recordsData);
            $bitReader->setPosition($i * $this->recordSize * 8);
            $rec = new DbcRow($this, $bitReader, $i);
            $this->_records[$i] = $rec;
        }

        $this->stringsTable = [];
        for ($i = 0; $i < $this->stringTableSize;) {
            $oldPos = ftell($stream);
            $this->stringsTable[$i] = $this->readCString($stream);
            $i += (int)(ftell($stream) - $oldPos);
        }
    }

    private function readUInt32($stream) {
        $magicBytes = fread($stream, 4); // Read 4 bytes
        $magicArray = unpack('V', $magicBytes); // 'V' represents an unsigned long (32-bit)
        return $magicArray[1];
    }

    private function readInt32($stream) {
        $recordsCountBytes = fread($stream, 4); // Read 4 bytes
        $recordsCountArray = unpack('l', $recordsCountBytes); // 'l' represents a signed long (32-bit)
        return $recordsCountArray[1];
    }

    private function readCString($stream) {
        $value = '';
        while (($char = fgetc($stream)) !== false && $char !== "\0") {
            $value .= $char;
        }
        return $value;
    }
}
