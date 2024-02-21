<?php

namespace app\models\traits\spell;

trait MechanicTrait
{
    const MECHANIC_NONE = 0;
    const MECHANIC_CHARMED = 1;
    const MECHANIC_DISORIENTED = 2;
    const MECHANIC_DISARMED = 3;
    const MECHANIC_DISTRACTED = 4;
    const MECHANIC_FLEEING = 5;
    const MECHANIC_GRIPPED = 6;
    const MECHANIC_ROOTED = 7;
    const MECHANIC_SLOWED = 8;
    const MECHANIC_SILENCED = 9;
    const MECHANIC_ASLEEP = 10;
    const MECHANIC_SNARED = 11;
    const MECHANIC_STUNNED = 12;
    const MECHANIC_FROZEN = 13;
    const MECHANIC_INCAPACITATED = 14;
    const MECHANIC_BLEEDING = 15;
    const MECHANIC_HEALING = 16;
    const MECHANIC_POLYMORPHED = 17;
    const MECHANIC_BANISHED = 18;
    const MECHANIC_SHIELDED = 19;
    const MECHANIC_SHACKLED = 20;
    const MECHANIC_MOUNTED = 21;
    const MECHANIC_INFECTED = 22;
    const MECHANIC_TURNED = 23;
    const MECHANIC_HORRIFIED = 24;
    const MECHANIC_INVULNERABLE = 25;
    const MECHANIC_INTERRUPTED = 26;
    const MECHANIC_DAZED = 27;
    const MECHANIC_DISCOVERY = 28;
    const MECHANIC_SAPPED = 29;
    const MECHANIC_ENRAGED = 30;

    /**
     * Get the list of dispel types with their values.
     *
     * @return array
     */
    public static function getMechanicOptions()
    {
        return [
            self::MECHANIC_NONE => 'None',
            self::MECHANIC_CHARMED => 'Charmed',
            self::MECHANIC_DISORIENTED => 'Disoriented',
            self::MECHANIC_DISARMED => 'Disarmed',
            self::MECHANIC_DISTRACTED => 'Distracted',
            self::MECHANIC_FLEEING => 'Fleeing',
            self::MECHANIC_GRIPPED => 'Gripped',
            self::MECHANIC_ROOTED => 'Rooted',
            self::MECHANIC_SLOWED => 'Slowed',
            self::MECHANIC_SILENCED => 'Silenced',
            self::MECHANIC_ASLEEP => 'Asleep',
            self::MECHANIC_SNARED => 'Snared',
            self::MECHANIC_STUNNED => 'Stunned',
            self::MECHANIC_FROZEN => 'Frozen',
            self::MECHANIC_INCAPACITATED => 'Incapacitated',
            self::MECHANIC_BLEEDING => 'Bleeding',
            self::MECHANIC_HEALING => 'Healing',
            self::MECHANIC_POLYMORPHED => 'Polymorphed',
            self::MECHANIC_BANISHED => 'Banished',
            self::MECHANIC_SHIELDED => 'Shielded',
            self::MECHANIC_SHACKLED => 'Shackled',
            self::MECHANIC_MOUNTED => 'Mounted',
            self::MECHANIC_INFECTED => 'Infected',
            self::MECHANIC_TURNED => 'Turned',
            self::MECHANIC_HORRIFIED => 'Horrified',
            self::MECHANIC_INVULNERABLE => 'Invulnerable',
            self::MECHANIC_INTERRUPTED => 'Interrupted',
            self::MECHANIC_DAZED => 'Dazed',
            self::MECHANIC_DISCOVERY => 'Discovery',
            self::MECHANIC_SAPPED => 'Sapped',
            self::MECHANIC_ENRAGED => 'Enraged',
        ];
    }

    /**
     * Get the human-readable spell name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getMechanicName($type)
    {
        $mechanicTypes = self::getMechanicOptions();
        return isset($mechanicTypes[$type]) ? $mechanicTypes[$type] : null;
    }
}
