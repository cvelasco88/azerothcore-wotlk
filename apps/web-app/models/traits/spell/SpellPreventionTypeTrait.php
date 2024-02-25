<?php

namespace app\models\traits\spell;

trait SpellPreventionTypeTrait
{
    const SPELL_PREVENTION_TYPE_NONE = 0;
    const SPELL_PREVENTION_TYPE_SILENCE = 1;
    const SPELL_PREVENTION_TYPE_PACIFY = 2;
    const SPELL_PREVENTION_TYPE_NO_ACTIONS = 4;

    /**
     * Get the list of prevention types with their values.
     *
     * @return array
     */
    public static function getSpellPreventionTypeOptions()
    {
        return [
            self::SPELL_PREVENTION_TYPE_NONE => 'None',
            self::SPELL_PREVENTION_TYPE_SILENCE => 'Silence',
            self::SPELL_PREVENTION_TYPE_PACIFY => 'Pacify',
            self::SPELL_PREVENTION_TYPE_NO_ACTIONS => 'No actions',
        ];
    }

    /**
     * Get the human-readable prevention type name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellPreventionTypeName($type)
    {
        $options = self::getSpellPreventionTypeOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
