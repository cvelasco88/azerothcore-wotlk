<?php

namespace app\models\traits\spell;

trait SpellCategoryTrait
{
    const SPELL_CATEGORY_NONE = 0x00; // Decimal: 0
    const SPELL_CATEGORY_COOLDOWN_MODIFIES_ITEM = 0x01; // Decimal: 1
    const SPELL_CATEGORY_COOLDOWN_IS_GLOBAL = 0x02; // Decimal: 2
    const SPELL_CATEGORY_COOLDOWN_EVENT_ON_LEAVE_COMBAT = 0x04; // Decimal: 4
    const SPELL_CATEGORY_COOLDOWN_IN_DAYS = 0x08; // Decimal: 8
    const SPELL_CATEGORY_RESET_CHARGES_UPON_ENDING_ENCOUNTER = 0x10; // Decimal: 16
    const SPELL_CATEGORY_COOLDOWN_IN_DAYS_SECOND = 0x20; // Decimal: 32
    const SPELL_CATEGORY_RESET_COOLDOWN_UPON_ENDING_ENCOUNTER = 0x40; // Decimal: 64


    /**
     * Get the list of spell attributes with their names.
     *
     * @return array
     */
    public static function getSpellCategoryOptions()
    {
        return [
            self::SPELL_CATEGORY_NONE => 'None',
            self::SPELL_CATEGORY_COOLDOWN_MODIFIES_ITEM => 'Cooldown modifies item',
            self::SPELL_CATEGORY_COOLDOWN_IS_GLOBAL => 'Cooldown is global',
            self::SPELL_CATEGORY_COOLDOWN_EVENT_ON_LEAVE_COMBAT => 'Cooldown event on leave combat',
            self::SPELL_CATEGORY_COOLDOWN_IN_DAYS => 'Cooldown in days',
            self::SPELL_CATEGORY_RESET_CHARGES_UPON_ENDING_ENCOUNTER => 'Reset charges upon ending encounter',
            self::SPELL_CATEGORY_COOLDOWN_IN_DAYS_SECOND => 'Cooldown in days',
            self::SPELL_CATEGORY_RESET_COOLDOWN_UPON_ENDING_ENCOUNTER => 'Reset cooldown upon ending encounter',
        ];
    }

    /**
     * Get the name for a specific spell attribute.
     *
     * @param int $attribute
     * @return string|null
     */
    public static function getSpellCategoryName($attribute)
    {
        $spellAttributes = self::getSpellCategoryOptions();
        return isset($spellAttributes[$attribute]) ? $spellAttributes[$attribute] : null;
    }

}
