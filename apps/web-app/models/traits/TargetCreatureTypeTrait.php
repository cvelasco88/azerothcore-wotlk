<?php

namespace app\models\traits;

trait TargetCreatureTypeTrait
{
    const TYPE_NONE          = 0x0000;
    const TYPE_BEAST         = 0x0001;
    const TYPE_DRAGONKIN     = 0x0002;
    const TYPE_DEMON         = 0x0004;
    const TYPE_ELEMENTAL     = 0x0008;
    const TYPE_GIANT         = 0x0010;
    const TYPE_UNDEAD        = 0x0020;
    const TYPE_HUMANOID      = 0x0040;
    const TYPE_CRITTER       = 0x0080;
    const TYPE_MECHANICAL    = 0x0100;
    const TYPE_NOTSPECIFIED  = 0x0200;
    const TYPE_TOTEM         = 0x0400;
    const TYPE_NONCOMBATPET  = 0x0800;
    const TYPE_GASCLOUD      = 0x1000;
    const TYPE_WILDPET       = 0x2000;
    const TYPE_ABERRATION    = 0x4000;


    /**
     * Get the list of creature types with their names.
     *
     * @return array
     */
    public static function getTargetCreatureTypes()
    {
        return [
            self::TYPE_NONE => 'None',
            self::TYPE_BEAST => 'Beast',
            self::TYPE_DRAGONKIN => 'Dragonkin',
            self::TYPE_DEMON => 'Demon',
            self::TYPE_ELEMENTAL => 'Elemental',
            self::TYPE_GIANT => 'Giant',
            self::TYPE_UNDEAD => 'Undead',
            self::TYPE_HUMANOID => 'Humanoid',
            self::TYPE_CRITTER => 'Critter',
            self::TYPE_MECHANICAL => 'Mechanical',
            self::TYPE_NOTSPECIFIED => 'Not Specified',
            self::TYPE_TOTEM => 'Totem',
            self::TYPE_NONCOMBATPET => 'Non-Combat Pet',
            self::TYPE_GASCLOUD => 'Gas Cloud',
            self::TYPE_WILDPET => 'Wild Pet',
            self::TYPE_ABERRATION => 'Aberration',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific creature type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getTargetCreatureTypeName($type)
    {
        $targetCreatureTypes = self::getTargetCreatureTypes();
        return isset($targetCreatureTypes[$type]) ? $targetCreatureTypes[$type] : null;
    }
}
