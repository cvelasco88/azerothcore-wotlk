<?php

namespace app\helpers;

use yii\helpers\BaseFileHelper;

class DbcReader
{
    private const HeaderSize = 20;
    private const WDBCFmtSig = 0x43424457; // WDBC

    public $recordsCount;
    public $fieldsCount;
    public $recordSize;
    public $stringTableSize;
    public $tableHash;
    public $layoutHash;
    public $minIndex;
    public $maxIndex;
    public $idFieldIndex;
    public $flags;

    // ... (other public properties and methods as needed)

    private $meta;
    private $indexData;
    private $columnMeta;
    private $palletData;
    private $commonData;
    private $stringsTable;
    private $copyData;
    private $recordsData;
    private $_records;
    private $sparseEntries;
    private $foreignKeyData;

    public function __construct($dbcFile)
    {
        $stream = fopen($dbcFile, 'rb');

        if ($stream === false) {
            throw new \Exception('Failed to open WDBC file.');
        }

        $headerData = fread($stream, self::HeaderSize);
        if ($headerData === false) {
            throw new \Exception('Failed to read WDBC file header.');
        }

        $unpackData = unpack('V', substr($headerData, 0, 4));
        $magic = $unpackData[1];

        if ($magic != self::WDBCFmtSig) {
            throw new \Exception('Invalid WDBC file format.');
        }

        $this->recordsCount = unpack('V', fread($stream, 4))[1];
        $this->fieldsCount = unpack('V', fread($stream, 4))[1];
        $this->recordSize = unpack('V', fread($stream, 4))[1];
        $this->stringTableSize = unpack('V', fread($stream, 4))[1];

        if ($this->recordsCount == 0 || $this->recordSize == 0) {
            fclose($stream);
            return;
        }

        $this->recordsData = fread($stream, $this->recordsCount * $this->recordSize);
        $this->recordsData .= str_repeat("\x00", 8); // pad with extra zeros

        for ($i = 0; $i < $this->recordsCount; $i++) {
            $bitReader = new BitReader($this->recordsData);
            $bitReader->setPosition($i * $this->recordSize * 8);
            $rec = new DbcRow($this, $bitReader, $i);
            $this->_records[$i] = $rec;
        }

        $this->stringsTable = [];
        for ($i = 0; $i < $this->stringTableSize;) {
            $oldPos = ftell($stream);
            $this->stringsTable[$i] = fread($stream, 32); // Assuming strings are 32 bytes long, adjust as needed
            // $i += strlen($this->stringsTable[$i]);
            $i += ftell($stream) - $oldPos;
        }

        fclose($stream);
    }

    public function getRecords()
    {
        return $this->_records;
    }

    public function printRecord($record)
    {
        printf("Record %u: %u, %s\n", $record['id'], $record['name']);
    }
}