<?php

namespace app\models\traits\spell;

trait DispelTypeTrait
{
    const DISPEL_TYPE_NONE = 0; // CANT BE DISPELLED	
    const DISPEL_TYPE_MAGIC = 1; // DISPELLED BY EFFECTS THAT DISPEL MAGIC
    const DISPEL_TYPE_CURSE = 2; // DISPELLED BY EFFECTS THAT DISPEL CURSES
    const DISPEL_TYPE_DISEASE = 3; // DISPELLED BY EFFECTS THAT DISPEL DISEASES
    const DISPEL_TYPE_POISON = 4; // DISPELLED BY EFFECTS THAT DISPEL POISONS
    const DISPEL_TYPE_STEALTH = 5; // DISPEL STEALTH EFFECTS?
    const DISPEL_TYPE_INVISIBILITY = 6; // DISPELS INVISIBILITY?
    const DISPEL_TYPE_MAGIC_OR_DISEASE_OR_CURSE_OR_POISON = 7; // DISPELLED BY ANY OF THE 4 DISPEL METHODS
    const DISPEL_TYPE_SPELL_FROM_NPC_ONLY = 8; //  ???
    const DISPEL_TYPE_ENRAGE = 9; // DISPELLED BY EFFECTS THAT DISPEL ENRAGE
    const DISPEL_TYPE_ZULGURUB_TRINKETS = 10; // ???
    const DISPEL_TYPE_OLD_UNUSED = 11; // ???

    /**
     * Get the list of dispel types with their values.
     *
     * @return array
     */
    public static function getDispelTypeOptions()
    {
        return [
            self::DISPEL_TYPE_NONE => 'Can\'t be Dispelled',
            self::DISPEL_TYPE_MAGIC => 'Dispel Magic',
            self::DISPEL_TYPE_CURSE => 'Dispel Curse',
            self::DISPEL_TYPE_DISEASE => 'Dispel Disease',
            self::DISPEL_TYPE_POISON => 'Dispel Poison',
            self::DISPEL_TYPE_STEALTH => 'Dispel Stealth Effects',
            self::DISPEL_TYPE_INVISIBILITY => 'Dispel Invisibility',
            self::DISPEL_TYPE_MAGIC_OR_DISEASE_OR_CURSE_OR_POISON => 'Dispel Magic/Disease/Curse/Poison',
            self::DISPEL_TYPE_SPELL_FROM_NPC_ONLY => 'Spell from NPC Only',
            self::DISPEL_TYPE_ENRAGE => 'Dispel Enrage',
            self::DISPEL_TYPE_ZULGURUB_TRINKETS => 'Zul\'Gurub Trinkets',
            self::DISPEL_TYPE_OLD_UNUSED => 'Old Unused',
        ];
    }

    /**
     * Get the human-readable dispel type name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getDispelTypeName($type)
    {
        $dispelTypes = self::getDispelTypeOptions();
        return isset($dispelTypes[$type]) ? $dispelTypes[$type] : null;
    }
}
