<?php

namespace app\models\traits;

trait PowerTypeTrait
{
    const POWER_TYPE_HP = -2;
    const POWER_TYPE_MANA = 0;
    const POWER_TYPE_RAGE = 1;
    const POWER_TYPE_FOCUS = 2;
    const POWER_TYPE_ENERGY = 3;
    const POWER_TYPE_PET_HAPPINESS = 4;
    const POWER_TYPE_RUNES = 5;
    const POWER_TYPE_RUNE_BLOOD = 0; // Rune Types
    const POWER_TYPE_RUNE_UNHOLY = 1;
    const POWER_TYPE_RUNE_FROST = 2;
    const POWER_TYPE_RUNE_DEATH = 3;
    const POWER_TYPE_RUNIC = 6;
    const POWER_TYPE_MAX_POWERS = 7;
    const POWER_TYPE_ALL_POWERS = 127;

    /**
     * Get the list of power types with their values.
     *
     * @return array
     */
    public static function getPowerTypeOptions()
    {
        return [
            self::POWER_TYPE_HP => 'HP',
            self::POWER_TYPE_MANA => 'Mana',
            self::POWER_TYPE_RAGE => 'Rage',
            self::POWER_TYPE_FOCUS => 'Focus',
            self::POWER_TYPE_ENERGY => 'Energy',
            self::POWER_TYPE_PET_HAPPINESS => 'Pet Happiness',
            self::POWER_TYPE_RUNES => 'Runes',
            self::POWER_TYPE_RUNE_BLOOD => 'Blood Rune',
            self::POWER_TYPE_RUNE_UNHOLY => 'Unholy Rune',
            self::POWER_TYPE_RUNE_FROST => 'Frost Rune',
            self::POWER_TYPE_RUNE_DEATH => 'Death Rune',
            self::POWER_TYPE_RUNIC => 'Runic',
            self::POWER_TYPE_MAX_POWERS => 'Max Powers',
            self::POWER_TYPE_ALL_POWERS => 'All Powers',
        ];
    }

    /**
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public static function getPowerTypeName(int $type = null)
    {
        $powerTypes = self::getPowerTypeOptions();
        return isset($powerTypes[$type]) ? $powerTypes[$type] : null;
    }
}
