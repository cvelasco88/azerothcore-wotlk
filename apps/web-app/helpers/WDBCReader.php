<?php

namespace app\helpers;


class WDBCReader extends BaseReader
{
    const HEADER_SIZE = 20;
    const WDBC_FMT_SIG = 0x43424457; // WDBC

    public function __construct(string $dbcFile)
    {
        parent::__construct();
        $this->init(new \yii\web\UploadedFile($dbcFile, null));
    }

    public function init($stream)
    {
        $reader = new \yii\helpers\UnsetArrayValue($stream);
        if (count($reader->baseStream->size) < self::HEADER_SIZE) {
            throw new \yii\base\InvalidDataException("WDBC file is corrupted!");
        }

        $magic = $reader->readUInt32();

        if ($magic != self::WDBC_FMT_SIG) {
            throw new \yii\base\InvalidDataException("WDBC file is corrupted!");
        }

        $this->recordsCount = $reader->readInt32();
        $this->fieldsCount = $reader->readInt32();
        $this->recordSize = $reader->readInt32();
        $this->stringTableSize = $reader->readInt32();

        if ($this->recordsCount == 0) {
            return;
        }

        $this->recordsData = $reader->readBytes($this->recordsCount * $this->recordSize);
        array_resize($this->recordsData, count($this->recordsData) + 8); // pad with extra zeros so we don't crash when reading

        for ($i = 0; $i < $this->recordsCount; $i++) {
            $bitReader = new BitReader($this->recordsData);
            $bitReader->position = $i * $this->recordSize * 8;
            $rec = new WDBCRow($this, $bitReader, $i);
            $this->_records[$i] = $rec;
        }

        $this->stringsTable = [];
        for ($i = 0; $i < $this->stringTableSize;) {
            $oldPos = $reader->baseStream->position;
            $this->stringsTable[$i] = $reader->readCString();
            $i += ($reader->baseStream->position - $oldPos);
        }
    }
}
