<?php

namespace app\models\traits\spell;

trait TargetFlagTrait
{
    const TARGET_FLAG_NONE            = 0x00000000; // Player or target ? Might also be none-individual target
    const TARGET_FLAG_UNUSED_1        = 0x00000001; // not used (Not used in 3.3.5a on it's own)
    const TARGET_FLAG_UNIT            = 0x00000002; // pguid (Not used in 3.3.5a on it's own)
    const TARGET_FLAG_UNIT_RAID       = 0x00000004; // not sent, used to validate target (if raid member) (Not used in 3.3.5a on it's own)
    const TARGET_FLAG_UNIT_PARTY      = 0x00000008; // not sent, used to validate target (if party member) (Not used in 3.3.5a on it's own)
    const TARGET_FLAG_ITEM            = 0x00000010; // pguid
    const TARGET_FLAG_SOURCE_LOCATION = 0x00000020; // pguid, 3 float
    const TARGET_FLAG_DEST_LOCATION   = 0x00000040; // pguid, 3 float
    const TARGET_FLAG_UNIT_ENEMY      = 0x00000080; // not sent, used to validate target (if enemy)
    const TARGET_FLAG_UNIT_ALLY       = 0x00000100; // not sent, used to validate target (if ally) - Used by teaching spells
    const TARGET_FLAG_CORPSE_ENEMY    = 0x00000200; // pguid
    const TARGET_FLAG_UNIT_DEAD       = 0x00000400; // not sent, used to validate target (if dead creature)
    const TARGET_FLAG_GAMEOBJECT      = 0x00000800; // pguid, used with TARGET_GAMEOBJECT_TARGET
    const TARGET_FLAG_TRADE_ITEM      = 0x00001000; // pguid
    const TARGET_FLAG_STRING          = 0x00002000; // string
    const TARGET_FLAG_GAMEOBJECT_ITEM = 0x00004000; // not sent, used with TARGET_GAMEOBJECT_ITEM_TARGET
    const TARGET_FLAG_CORPSE_ALLY     = 0x00008000; // pguid
    const TARGET_FLAG_UNIT_MINIPET    = 0x00010000; // pguid, used to validate target (if non-combat pet)
    const TARGET_FLAG_GLYPH_SLOT      = 0x00020000; // used in glyph spells
    const TARGET_FLAG_DEST_TARGET     = 0x00040000; // sometimes appears with DEST_TARGET spells (may appear or not for a given spell)
    const TARGET_FLAG_UNUSED20        = 0x00080000; // uint32 counter, loop { vec3 - screen position (?), guid }, not used so far
    const TARGET_FLAG_UNIT_PASSENGER  = 0x00100000; // guessed, used to validate target (if vehicle passenger)

    
    public static function getTargetFlagOptions()
    {
        return [
            self::TARGET_FLAG_NONE => 'None',
            self::TARGET_FLAG_UNUSED_1 => 'Unused 1',
            self::TARGET_FLAG_UNIT => 'Unit',
            self::TARGET_FLAG_UNIT_RAID => 'Unit Raid',
            self::TARGET_FLAG_UNIT_PARTY => 'Unit Party',
            self::TARGET_FLAG_ITEM => 'Item',
            self::TARGET_FLAG_SOURCE_LOCATION => 'Source Location',
            self::TARGET_FLAG_DEST_LOCATION => 'Dest Location',
            self::TARGET_FLAG_UNIT_ENEMY => 'Unit Enemy',
            self::TARGET_FLAG_UNIT_ALLY => 'Unit Ally',
            self::TARGET_FLAG_CORPSE_ENEMY => 'Corpse Enemy',
            self::TARGET_FLAG_UNIT_DEAD => 'Unit Dead',
            self::TARGET_FLAG_GAMEOBJECT => 'Gameobject',
            self::TARGET_FLAG_TRADE_ITEM => 'Trade Item',
            self::TARGET_FLAG_STRING => 'String',
            self::TARGET_FLAG_GAMEOBJECT_ITEM => 'Gameobject Item',
            self::TARGET_FLAG_CORPSE_ALLY => 'Corpse Ally',
            self::TARGET_FLAG_UNIT_MINIPET => 'Unit Minipet',
            self::TARGET_FLAG_GLYPH_SLOT => 'Glyph Slot',
            self::TARGET_FLAG_DEST_TARGET => 'Dest Target',
            self::TARGET_FLAG_UNUSED20 => 'Unused 20',
            self::TARGET_FLAG_UNIT_PASSENGER => 'Unit Passenger',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific target flag type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getTargetFlagOptionName($type)
    {
        $targetFlagOptions = self::getTargetFlagOptions();
        return isset($targetFlagOptions[$type]) ? $targetFlagOptions[$type] : null;
    }
}
