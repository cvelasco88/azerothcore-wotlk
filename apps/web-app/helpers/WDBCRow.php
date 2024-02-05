<?php

namespace app\helpers;

class WDBCRow
{
    private $m_data;
    private $m_reader;
    private $m_recordIndex;

    public $Id;
    public $Data;

    public function __construct(BaseReader $reader, BitReader $data, int $recordIndex)
    {
        $this->m_reader = $reader;
        $this->m_data = $data;
        $this->m_recordIndex = $recordIndex + 1;

        $this->Id = $this->m_recordIndex = $recordIndex + 1;
    }

    public function getFields(array $fields, $entry)
    {
        foreach ($fields as $info) {
            if ($info->IndexMapField) {
                $this->Id = $this->getFieldValue($this->m_data);
                $info->setter($entry, $this->Id);
                continue;
            }

            $value = null;

            if ($info->isArray) {
                if (array_key_exists($info->fieldType, $arrayReaders)) {
                    $value = $arrayReaders[$info->fieldType]($this->m_data, $this->m_reader->stringTable, $info->cardinality);
                } else {
                    throw new \Exception("Unhandled array type: " . get_class($entry));
                }
            } elseif ($info->isLocalisedString) {
                $this->m_data->position += 32 * $info->localeInfo->locale;
                $value = $simpleReaders['string']($this->m_data, $this->m_reader->stringTable, $this->m_reader);
                $this->m_data->position += 32 * ($info->localeInfo->localeCount - $info->localeInfo->locale);
            } else {
                if (array_key_exists($info->fieldType, $simpleReaders)) {
                    $value = $simpleReaders[$info->fieldType]($this->m_data, $this->m_reader->stringTable, $this->m_reader);
                } else {
                    throw new \Exception("Unhandled field type: " . get_class($entry));
                }
            }

            $info->setter($entry, $value);
        }
    }

    private function getFieldValue(BitReader $r)
    {
        return $r->readValue64(unpack('C*', pack('J', Unsafe::sizeOf($r->position) * 8)))->getValue();
    }

    private function getFieldValueArray(BitReader $r, int $cardinality)
    {
        $array = [];
        for ($i = 0; $i < $cardinality; $i++) {
            $array[] = $r->readValue64(unpack('C*', pack('J', Unsafe::sizeOf($r->position) * 8)))->getValue();
        }

        return $array;
    }

    public function clone()
    {
        return clone $this;
    }
}
