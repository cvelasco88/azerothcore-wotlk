<?php

namespace app\helpers;

class BaseReader
{
    private $data;
    private $position;

    public function __construct($data)
    {
        $this->data = $data;
        $this->position = 0;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function readValue64($bits)
    {
        $value = 0;
        for ($i = 0; $i < $bits; $i++) {
            $value |= (($this->readBit() ? 1 : 0) << $i);
        }
        return $value;
    }

    private function readBit()
    {
        $bytePosition = (int)($this->position / 8);
        $bitPosition = $this->position % 8;

        $this->position++;

        return (($this->data[$bytePosition] >> (7 - $bitPosition)) & 1) == 1;
    }
}
