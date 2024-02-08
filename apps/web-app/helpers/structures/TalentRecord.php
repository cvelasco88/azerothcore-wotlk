<?php

namespace app\helpers\structures;

/**
 * https://wowdev.wiki/DB/Talent
 */
class TalentRecord {
    public int $_ID;
    public int $m_specID;
    public int $m_tierID;
    public int $m_columnIndex;
    public int $rank; // int[9]
    public int $prerequisites_talent; // int[3]
    public int $prerequisites_rank; // int[3]
    public int $m_flags;
    public int $required_spell_id;
}
