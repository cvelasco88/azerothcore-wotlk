<?php

namespace app\models\traits\spell;

/**
 * a.k.a. DmgClass
 */
trait SpellDefenseTypeTrait
{
    const SPELL_DEFENSE_TYPE_NONE = 0;
    const SPELL_DEFENSE_TYPE_MAGIC = 1;
    const SPELL_DEFENSE_TYPE_MELEE = 2;
    const SPELL_DEFENSE_TYPE_RANGED = 3;

    /**
     * Get the list of defense types with their values.
     *
     * @return array
     */
    public static function getSpellDefenseTypeOptions()
    {
        return [
            self::SPELL_DEFENSE_TYPE_NONE => 'None',
            self::SPELL_DEFENSE_TYPE_MAGIC => 'Magic',
            self::SPELL_DEFENSE_TYPE_MELEE => 'Melee',
            self::SPELL_DEFENSE_TYPE_RANGED => 'Ranged',
        ];
    }

    /**
     * Get the human-readable defense type name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellDefenseTypeName($type)
    {
        $options = self::getSpellDefenseTypeOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
