<?php

namespace app\models\traits\common;

trait ClassMaskTrait
{
    const CLASS_MASK_ANY = 0x00000000;
    const CLASS_MASK_WARRIOR = 0x00000001;
    const CLASS_MASK_PALADIN = 0x00000002;
    const CLASS_MASK_HUNTER = 0x00000004;
    const CLASS_MASK_ROGUE = 0x00000008;
    const CLASS_MASK_PRIEST = 0x00000010;
    const CLASS_MASK_DEATH_KNIGHT = 0x00000020;
    const CLASS_MASK_SHAMAN = 0x00000040;
    const CLASS_MASK_MAGE = 0x00000080;
    const CLASS_MASK_WARLOCK = 0x00000100;
    const CLASS_MASK_DRUID = 0x00000400;
    
    /**
     * Get the list of WoW classes with their values.
     *
     * @return array
     */
    public static function getClassMaskOptions()
    {
        return [
            self::CLASS_MASK_ANY => 'Any',
            self::CLASS_MASK_WARRIOR => 'Warrior',
            self::CLASS_MASK_PALADIN => 'Paladin',
            self::CLASS_MASK_HUNTER => 'Hunter',
            self::CLASS_MASK_ROGUE => 'Rogue',
            self::CLASS_MASK_PRIEST => 'Priest',
            self::CLASS_MASK_DEATH_KNIGHT => 'Death Knight',
            self::CLASS_MASK_SHAMAN => 'Shaman',
            self::CLASS_MASK_MAGE => 'Mage',
            self::CLASS_MASK_WARLOCK => 'Warlock',
            self::CLASS_MASK_DRUID => 'Druid',
        ];
    }

    /**
     * Get the human-readable dispel type name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getClassMaskName($type)
    {
        $classMasks = self::getClassMaskOptions();
        return isset($classMasks[$type]) ? $classMasks[$type] : null;
    }
}
