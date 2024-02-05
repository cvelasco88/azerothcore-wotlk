<?php

namespace app\helpers;

class BitReader
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

/**
 * 
 * class BitReader
{
    private $data;
    private $position;

    public function __construct($data)
    {
        $this->data = unpack('C*', $data);
        $this->position = 0;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function readValue64($bitSize)
    {
        $result = 0;
        $shift = 0;

        while ($bitSize > 0) {
            $byte = $this->data[$this->position >> 3] ?? 0;
            $remainingBits = 8 - ($this->position % 8);
            $bitsToRead = min($remainingBits, $bitSize);

            $value = ($byte >> ($remainingBits - $bitsToRead)) & ((1 << $bitsToRead) - 1);
            $result |= $value << $shift;

            $shift += $bitsToRead;
            $this->position += $bitsToRead;
            $bitSize -= $bitsToRead;
        }

        return $result;
    }
}

 */