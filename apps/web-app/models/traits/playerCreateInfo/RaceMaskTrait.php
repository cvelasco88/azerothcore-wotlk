<?php

namespace app\models\traits\playerCreateInfo;

trait RaceMaskTrait
{
    const RACE_MASK_ANY = 0x00000000;
    const RACE_MASK_HUMAN = 0x00000001; // race
    const RACE_MASK_ORC = 0x00000002; // race
    const RACE_MASK_DWARF = 0x00000004; // race
    const RACE_MASK_NIGHT_ELF = 0x00000008; // race
    const RACE_MASK_UNDEAD = 0x00000010; // race
    const RACE_MASK_TAUREN = 0x00000020; // race
    // const RACE_MASK_GUNS = 0x00000025; // race
    const RACE_MASK_GNOME = 0x00000040; // race
    const RACE_MASK_TROLL = 0x00000080; // race
    const RACE_MASK_BLOOD_ELF = 0x00000100; // race
    // const RACE_MASK_LANG_ORCISH = 0x00000190; // Language: Orcish
    // const RACE_MASK_DAGGERS = 0x00000190; // Daggers
    const RACE_MASK_DRANEI = 0x00000400; // race
    // const RACE_MASK_MACES = 1061; // Two-Handed Maces
    // const RACE_MASK_LANG_COMMON = 1101; // Language: Common
    
    /**
     * Get the list of WoW races with their values.
     *
     * @return array
     */
    public static function getRaceMaskOptions()
    {
        return [
            self::RACE_MASK_ANY => 'Any',
            self::RACE_MASK_HUMAN => 'Human',
            self::RACE_MASK_ORC => 'Orc',
            self::RACE_MASK_DWARF => 'Dwarf',
            self::RACE_MASK_NIGHT_ELF => 'Night Elf',
            self::RACE_MASK_UNDEAD => 'Undead',
            self::RACE_MASK_TAUREN => 'Tauren',
            self::RACE_MASK_GNOME => 'Gnome',
            self::RACE_MASK_TROLL => 'Troll',
            self::RACE_MASK_BLOOD_ELF => 'Blood Elf',
            // self::RACE_MASK_LANG_ORCISH => 'Language: Orcish',
            // self::RACE_MASK_DAGGERS => 'Daggers',
            self::RACE_MASK_DRANEI => 'Draenei',
            // self::RACE_MASK_MACES => 'Two-Handed Maces',
            // self::RACE_MASK_LANG_COMMON => 'Language: Common',
        ];
    }


    /**
     * Get the human-readable dispel type name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getRaceMaskName($type)
    {
        $raceMasks = self::getRaceMaskOptions();
        return isset($raceMasks[$type]) ? $raceMasks[$type] : null;
    }
}
