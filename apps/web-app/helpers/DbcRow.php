<?php

namespace app\helpers;

class DbcRow // WDBCRow
{
    private $m_data;
    private $m_reader;
    private $m_recordIndex;

    public $Id;
    public $Data;

    private static $simpleReaders = [
        'long'   => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'long');
        },
        'float'  => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'float');
        },
        'int'    => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'int');
        },
        'uint'   => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'uint');
        },
        'short'  => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'short');
        },
        'ushort' => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'ushort');
        },
        'sbyte'  => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'sbyte');
        },
        'byte'   => function ($data, $stringTable, $header) {
            return self::GetFieldValue($data, 'byte');
        },
        'string' => function ($data, $stringTable, $header) {
            return $stringTable[self::GetFieldValue($data, 'int')];
        },
    ];

    private static $arrayReaders = [
        'ulong[]'   => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'ulong', $cardinality);
        },
        'long[]'    => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'long', $cardinality);
        },
        'float[]'   => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'float', $cardinality);
        },
        'int[]'     => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'int', $cardinality);
        },
        'uint[]'    => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'uint', $cardinality);
        },
        'ushort[]'  => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'ushort', $cardinality);
        },
        'short[]'   => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'short', $cardinality);
        },
        'byte[]'    => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'byte', $cardinality);
        },
        'sbyte[]'   => function ($data, $stringTable, $cardinality) {
            return self::GetFieldValueArray($data, 'sbyte', $cardinality);
        },
        'string[]'  => function ($data, $stringTable, $cardinality) {
            return array_map(
                function ($i) use ($stringTable) {
                    return $stringTable[$i];
                },
                self::GetFieldValueArray($data, 'int', $cardinality)
            );
        },
    ];    

    public function __construct(DbcReader $reader, BitReader $data, int $recordIndex)
    {
        $this->m_reader = $reader;
        $this->m_data = $data;
        $this->m_recordIndex = $recordIndex + 1;

        $this->Id = $this->m_recordIndex;
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


    private function GetFieldValue($data, $type)
    {
        // Implement the GetFieldValue function as needed
        // You may need to adjust the implementation based on your requirements
        // For example, you might use fread and unpack to read binary data from the $data stream
        // and then convert it to the appropriate type based on the $type parameter.
    }

    public function clone()
    {
        return clone $this;
    }
}
