<?php

namespace app\models\traits\spell;

trait SpellClassSetTrait
{
    const SPELL_CLASS_SET_ANY = 0;
    const SPELL_CLASS_SET_FESTIVAL = 1;    
    const SPELL_CLASS_SET_UNK1 = 2;
    const SPELL_CLASS_SET_MAGE = 3;
    const SPELL_CLASS_SET_WARRIOR = 4;
    const SPELL_CLASS_SET_WARLOCK = 5;
    const SPELL_CLASS_SET_PRIEST = 6;
    const SPELL_CLASS_SET_DRUID = 7;
    const SPELL_CLASS_SET_ROGUE = 8;
    const SPELL_CLASS_SET_HUNTER = 9;
    const SPELL_CLASS_SET_PALADIN = 10;
    const SPELL_CLASS_SET_SHAMAN = 11;
    const SPELL_CLASS_SET_UNK2 = 12;
    const SPELL_CLASS_SET_UNK3 = 13;
    const SPELL_CLASS_SET_UNK4 = 14;
    const SPELL_CLASS_SET_DEATH_KNIGHT = 15;

    /**
     * Get the list of spell attributes with their names.
     *
     * @return array
     */
    public static function getSpellClassSetOptions()
    {
        return [
            self::SPELL_CLASS_SET_ANY => 'Any',
            self::SPELL_CLASS_SET_FESTIVAL => 'Festival/Winter Reveler',
            self::SPELL_CLASS_SET_UNK1 => 'Unknown 1',
            self::SPELL_CLASS_SET_MAGE => 'Mage',
            self::SPELL_CLASS_SET_WARRIOR => 'Warrior',
            self::SPELL_CLASS_SET_WARLOCK => 'Warlock',
            self::SPELL_CLASS_SET_PRIEST => 'Priest',
            self::SPELL_CLASS_SET_DRUID => 'Druid',
            self::SPELL_CLASS_SET_ROGUE => 'Rogue',
            self::SPELL_CLASS_SET_HUNTER => 'Hunter',
            self::SPELL_CLASS_SET_PALADIN => 'Paladin',
            self::SPELL_CLASS_SET_SHAMAN => 'Shaman',
            self::SPELL_CLASS_SET_UNK2 => 'Unknown 2',
            self::SPELL_CLASS_SET_UNK3 => 'Unknown 3',
            self::SPELL_CLASS_SET_UNK4 => 'Unknown 4',
            self::SPELL_CLASS_SET_DEATH_KNIGHT => 'Death Knight',
        ];
    }

    /**
     * Get the name for a specific spell attribute.
     *
     * @param int $attribute
     * @return string|null
     */
    public static function getSpellClassSetName($attribute)
    {
        $spellAttributes = self::getSpellClassSetOptions();
        return isset($spellAttributes[$attribute]) ? $spellAttributes[$attribute] : null;
    }
}
