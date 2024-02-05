<?php

namespace app\helpers;

class DbcRow // WDBCRow
{
    private $m_data;
    private $m_reader;
    private $m_recordIndex;

    public $Id;
    public $Data;

    public function __construct(DbcReader $reader, BitReader $data, $recordIndex)
    {
        $this->m_reader = $reader;
        $this->m_data = $data;
        $this->m_recordIndex = $recordIndex + 1;

        $this->Id = $this->m_recordIndex;
    }

    // ... (rest of the class remains unchanged)
}
