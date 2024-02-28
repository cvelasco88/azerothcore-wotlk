<?php

namespace app\models\traits\spell;

/**
 * a.k.a. SpellFamilyFlags
 */
trait SpellClassMaskTrait
{
    const SPELL_FAMILY_GENERIC = 0;
    const SPELL_FAMILY_UNK1 = 1;
    const SPELL_FAMILY_MAGE = 3;
    const SPELL_FAMILY_WARRIOR = 4;
    const SPELL_FAMILY_WARLOCK = 5;
    const SPELL_FAMILY_PRIEST = 6;
    const SPELL_FAMILY_DRUID = 7;
    const SPELL_FAMILY_ROGUE = 8;
    const SPELL_FAMILY_HUNTER = 9;
    const SPELL_FAMILY_PALADIN = 10;
    const SPELL_FAMILY_SHAMAN = 11;
    const SPELL_FAMILY_UNK2 = 12;
    const SPELL_FAMILY_POTION = 13;
    const SPELL_FAMILY_DEATHKNIGHT = 15;
    const SPELL_FAMILY_PET = 17;

    /**
     * Get the spell family names.
     *
     * @return array
     */
    public static function getSpellClassMaskOptions()
    {
        return [
            self::SPELL_FAMILY_GENERIC => 'Generic',
            self::SPELL_FAMILY_UNK1 => 'Unknown 1',
            self::SPELL_FAMILY_MAGE => 'Mage',
            self::SPELL_FAMILY_WARRIOR => 'Warrior',
            self::SPELL_FAMILY_WARLOCK => 'Warlock',
            self::SPELL_FAMILY_PRIEST => 'Priest',
            self::SPELL_FAMILY_DRUID => 'Druid',
            self::SPELL_FAMILY_ROGUE => 'Rogue',
            self::SPELL_FAMILY_HUNTER => 'Hunter',
            self::SPELL_FAMILY_PALADIN => 'Paladin',
            self::SPELL_FAMILY_SHAMAN => 'Shaman',
            self::SPELL_FAMILY_UNK2 => 'Unknown 2',
            self::SPELL_FAMILY_POTION => 'Potion',
            self::SPELL_FAMILY_DEATHKNIGHT => 'Death Knight',
            self::SPELL_FAMILY_PET => 'Pet',
        ];
    }

    /**
     * Get the spell family name for a given family ID.
     *
     * @param int $familyId
     * @return string|null
     */
    public static function getSpellClassMaskName($familyId)
    {
        $familyNames = self::getSpellClassMaskOptions();
        return $familyNames[$familyId] ?? null;
    }
}
