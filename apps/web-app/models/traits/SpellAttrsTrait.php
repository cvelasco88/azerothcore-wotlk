<?php

namespace app\models\traits;

trait SpellAttrsTrait
{
    const SPELL_ATTR0_PROC_FAILURE_BURNS_CHARGE = 0x00000001;
    const SPELL_ATTR0_USES_RANGED_SLOT = 0x00000002;
    const SPELL_ATTR0_ON_NEXT_SWING_NO_DAMAGE = 0x00000004;
    const SPELL_ATTR0_DO_NOT_LOG_IMMUNE_MISSES = 0x00000008;
    const SPELL_ATTR0_IS_ABILITY = 0x00000010;
    const SPELL_ATTR0_IS_TRADESKILL = 0x00000020;
    const SPELL_ATTR0_PASSIVE = 0x00000040;
    const SPELL_ATTR0_DO_NOT_DISPLAY_SPELLBOOK_AURA_ICON_COMBAT_LOG = 0x00000080;
    const SPELL_ATTR0_DO_NOT_LOG = 0x00000100;
    const SPELL_ATTR0_HELD_ITEM_ONLY = 0x00000200;
    const SPELL_ATTR0_ON_NEXT_SWING = 0x00000400;
    const SPELL_ATTR0_WEARER_CASTS_PROC_TRIGGER = 0x00000800;
    const SPELL_ATTR0_SERVER_ONLY = 0x00001000;
    const SPELL_ATTR0_ALLOW_ITEM_SPELL_IN_PVP = 0x00002000;
    const SPELL_ATTR0_INDOORS_ONLY = 0x00004000;
    const SPELL_ATTR0_OUTDOORS_ONLY = 0x00008000;
    const SPELL_ATTR0_NOT_SHAPESHIFTED = 0x00010000;
    const SPELL_ATTR0_ONLY_STEALTHED = 0x00020000;
    const SPELL_ATTR0_DO_NOT_SHEATH = 0x00040000;
    const SPELL_ATTR0_SCALES_WITH_CREATURE_LEVEL = 0x00080000;
    const SPELL_ATTR0_CANCELS_AUTO_ATTACK_COMBAT = 0x00100000;
    const SPELL_ATTR0_NO_ACTIVE_DEFENSE = 0x00200000;
    const SPELL_ATTR0_TRACK_TARGET_IN_CAST_PLAYER_ONLY = 0x00400000;
    const SPELL_ATTR0_ALLOW_CAST_WHILE_DEAD = 0x00800000;
    const SPELL_ATTR0_ALLOW_WHILE_MOUNTED = 0x01000000;
    const SPELL_ATTR0_COOLDOWN_ON_EVENT = 0x02000000;
    const SPELL_ATTR0_AURA_IS_DEBUFF = 0x04000000;
    const SPELL_ATTR0_ALLOW_WHILE_SITTING = 0x08000000;
    const SPELL_ATTR0_NOT_IN_COMBAT_ONLY_PEACEFUL = 0x10000000;
    const SPELL_ATTR0_NO_IMMUNITIES = 0x20000000;
    const SPELL_ATTR0_HEARTBEAT_RESIST = 0x40000000;
    const SPELL_ATTR0_NO_AURA_CANCEL = 0x80000000;

    /**
     * Get the list of spell attributes with their names.
     *
     * @return array
     */
    public static function getSpellAttributesOptions()
    {
        return [
            self::SPELL_ATTR0_PROC_FAILURE_BURNS_CHARGE => 'PROC_FAILURE_BURNS_CHARGE',
            self::SPELL_ATTR0_USES_RANGED_SLOT => 'USES_RANGED_SLOT',
            self::SPELL_ATTR0_ON_NEXT_SWING_NO_DAMAGE => 'ON_NEXT_SWING_NO_DAMAGE',
            self::SPELL_ATTR0_DO_NOT_LOG_IMMUNE_MISSES => 'DO_NOT_LOG_IMMUNE_MISSES',
            self::SPELL_ATTR0_IS_ABILITY => 'IS_ABILITY',
            self::SPELL_ATTR0_IS_TRADESKILL => 'IS_TRADESKILL',
            self::SPELL_ATTR0_PASSIVE => 'PASSIVE',
            self::SPELL_ATTR0_DO_NOT_DISPLAY_SPELLBOOK_AURA_ICON_COMBAT_LOG => 'DO_NOT_DISPLAY_SPELLBOOK_AURA_ICON_COMBAT_LOG',
            self::SPELL_ATTR0_DO_NOT_LOG => 'DO_NOT_LOG',
            self::SPELL_ATTR0_HELD_ITEM_ONLY => 'HELD_ITEM_ONLY',
            self::SPELL_ATTR0_ON_NEXT_SWING => 'ON_NEXT_SWING',
            self::SPELL_ATTR0_WEARER_CASTS_PROC_TRIGGER => 'WEARER_CASTS_PROC_TRIGGER',
            self::SPELL_ATTR0_SERVER_ONLY => 'SERVER_ONLY',
            self::SPELL_ATTR0_ALLOW_ITEM_SPELL_IN_PVP => 'ALLOW_ITEM_SPELL_IN_PVP',
            self::SPELL_ATTR0_INDOORS_ONLY => 'INDOORS_ONLY',
            self::SPELL_ATTR0_OUTDOORS_ONLY => 'OUTDOORS_ONLY',
            self::SPELL_ATTR0_NOT_SHAPESHIFTED => 'NOT_SHAPESHIFTED',
            self::SPELL_ATTR0_ONLY_STEALTHED => 'ONLY_STEALTHED',
            self::SPELL_ATTR0_DO_NOT_SHEATH => 'DO_NOT_SHEATH',
            self::SPELL_ATTR0_SCALES_WITH_CREATURE_LEVEL => 'SCALES_WITH_CREATURE_LEVEL',
            self::SPELL_ATTR0_CANCELS_AUTO_ATTACK_COMBAT => 'CANCELS_AUTO_ATTACK_COMBAT',
            self::SPELL_ATTR0_NO_ACTIVE_DEFENSE => 'NO_ACTIVE_DEFENSE',
            self::SPELL_ATTR0_TRACK_TARGET_IN_CAST_PLAYER_ONLY => 'TRACK_TARGET_IN_CAST_PLAYER_ONLY',
            self::SPELL_ATTR0_ALLOW_CAST_WHILE_DEAD => 'ALLOW_CAST_WHILE_DEAD',
            self::SPELL_ATTR0_ALLOW_WHILE_MOUNTED => 'ALLOW_WHILE_MOUNTED',
            self::SPELL_ATTR0_COOLDOWN_ON_EVENT => 'COOLDOWN_ON_EVENT',
            self::SPELL_ATTR0_AURA_IS_DEBUFF => 'AURA_IS_DEBUFF',
            self::SPELL_ATTR0_ALLOW_WHILE_SITTING => 'ALLOW_WHILE_SITTING',
            self::SPELL_ATTR0_NOT_IN_COMBAT_ONLY_PEACEFUL => 'NOT_IN_COMBAT_ONLY_PEACEFUL',
            self::SPELL_ATTR0_NO_IMMUNITIES => 'NO_IMMUNITIES',
            self::SPELL_ATTR0_HEARTBEAT_RESIST => 'HEARTBEAT_RESIST',
            self::SPELL_ATTR0_NO_AURA_CANCEL => 'NO_AURA_CANCEL',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific spell attribute.
     *
     * @param int $attribute
     * @return string|null
     */
    public static function getSpellAttributesName($attribute)
    {
        $spellAttributes = self::getSpellAttributesOptions();
        return isset($spellAttributes[$attribute]) ? $spellAttributes[$attribute] : null;
    }

    public static function getPresentSpellAttributes($value) {
        $presentFlags = [];
        // Iterate over each constant
        foreach (self::getSpellAttributesOptions() as $flag => $label) {
            // Check if the constant is present in the $value
            if ($value & $flag) {
                $presentFlags[] = $flag;
            }
        }
        return $presentFlags;
    }
}
