<?php

namespace app\models\traits\playerCreateInfo;

trait ClassMaskTrait
{
    const CLASS_MASK_ANY = 0x00000000;
    const CLASS_MASK_WARRIOR = 0x00000001; // class
    const CLASS_MASK_PALADIN = 0x00000002; // class
    // const CLASS_MASK_TWO_HANDED_MACES = 0x00000003;
    const CLASS_MASK_HUNTER = 0x00000004; // class
    const CLASS_MASK_ROGUE = 0x00000008; // class
    // const CLASS_MASK_THROWN = 0x00000009;
    const CLASS_MASK_PRIEST = 0x00000010; // class
    const CLASS_MASK_DEATH_KNIGHT = 0x00000020; // class
    // const CLASS_MASK_TWO_HANDED_SWORDS = 0x00000023;
    // const CLASS_MASK_AXES = 0x00000025; // Axes & Two-Handed Axes
    // const CLASS_MASK_SWORDS = 0x00000027;
    // const CLASS_MASK_DUAL_WIELD = 0x00000028;
    const CLASS_MASK_SHAMAN = 0x00000040; // class
    // const CLASS_MASK_SHIELD = 0x00000043;
    const CLASS_MASK_MAGE = 0x00000080; // class
    const CLASS_MASK_WARLOCK = 0x00000100; // class
    // const CLASS_MASK_WANDS = 0x00000190;
    const CLASS_MASK_DRUID = 0x00000400; // class
    // const CLASS_MASK_MACES = 0x00000453;
    // const CLASS_MASK_LEATHER = 0x0000046F;
    // const CLASS_MASK_DAGGERS = 0x0000050D;
    // const CLASS_MASK_STAVES = 0x000005D0;
    
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
            // self::CLASS_MASK_TWO_HANDED_MACES => 'Two-Handed Maces',
            self::CLASS_MASK_HUNTER => 'Hunter',
            self::CLASS_MASK_ROGUE => 'Rogue',
            // self::CLASS_MASK_THROWN => 'Thrown',
            self::CLASS_MASK_PRIEST => 'Priest',
            self::CLASS_MASK_DEATH_KNIGHT => 'Death Knight',
            // self::CLASS_MASK_TWO_HANDED_SWORDS => 'Two-Handed Swords',
            // self::CLASS_MASK_AXES => 'Axes', // Axes & Two-Handed Axes
            // self::CLASS_MASK_SWORDS => 'Swords',
            // self::CLASS_MASK_DUAL_WIELD => 'Dual Wield',
            self::CLASS_MASK_SHAMAN => 'Shaman',
            // self::CLASS_MASK_SHIELD => 'Shield',
            self::CLASS_MASK_MAGE => 'Mage',
            self::CLASS_MASK_WARLOCK => 'Warlock',
            // self::CLASS_MASK_WANDS => 'Wands',
            self::CLASS_MASK_DRUID => 'Druid',
            // self::CLASS_MASK_MACES => 'Maces',
            // self::CLASS_MASK_LEATHER => 'Leather',
            // self::CLASS_MASK_DAGGERS => 'Daggers',
            // self::CLASS_MASK_STAVES => 'Staves',
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
