<?php

namespace app\models\traits\spell;

trait SpellAttrsEx6Trait
{
    const SPELL_ATTR6_NONE = 0x00000000;
    const SPELL_ATTR6_NO_COOLDOWN_ON_TOOLTIP = 0x00000001;
    const SPELL_ATTR6_DO_NOT_RESET_COOLDOWN_IN_ARENA = 0x00000002;
    const SPELL_ATTR6_NOT_AN_ATTACK = 0x00000004;
    const SPELL_ATTR6_CAN_ASSIST_IMMUNE_PC = 0x00000008;
    const SPELL_ATTR6_IGNORE_FOR_MOD_TIME_RATE = 0x00000010;
    const SPELL_ATTR6_DO_NOT_CONSUME_RESOURCES = 0x00000020;
    const SPELL_ATTR6_FLOATING_COMBAT_TEXT_ON_CAST = 0x00000040;
    const SPELL_ATTR6_AURA_IS_WEAPON_PROC = 0x00000080;
    const SPELL_ATTR6_DO_NOT_CHAIN_TO_CROWD_CONTROLLED_TARGETS = 0x00000100;
    const SPELL_ATTR6_ALLOW_ON_CHARMED_TARGETS = 0x00000200;
    const SPELL_ATTR6_NO_AURA_LOG = 0x00000400;
    const SPELL_ATTR6_NOT_IN_RAID_INSTANCES = 0x00000800;
    const SPELL_ATTR6_ALLOW_WHILE_RIDING_VEHICLE = 0x00001000;
    const SPELL_ATTR6_IGNORE_PHASE_SHIFT = 0x00002000;
    const SPELL_ATTR6_AI_PRIMARY_RANGED_ATTACK = 0x00004000;
    const SPELL_ATTR6_NO_PUSHBACK = 0x00008000;
    const SPELL_ATTR6_NO_JUMP_PATHING = 0x00010000;
    const SPELL_ATTR6_ALLOW_EQUIP_WHILE_CASTING = 0x00020000;
    const SPELL_ATTR6_ORIGINATE_FROM_CONTROLLER = 0x00040000;
    const SPELL_ATTR6_DELAY_COMBAT_TIMER_DURING_CAST = 0x00080000;
    const SPELL_ATTR6_AURA_ICON_ONLY_FOR_CASTER_LIMIT_10 = 0x00100000;
    const SPELL_ATTR6_SHOW_MECHANIC_AS_COMBAT_TEXT = 0x00200000;
    const SPELL_ATTR6_ABSORB_CANNOT_BE_IGNORE = 0x00400000;
    const SPELL_ATTR6_TAPS_IMMEDIATELY = 0x00800000;
    const SPELL_ATTR6_CAN_TARGET_UNTARGETABLE = 0x01000000;
    const SPELL_ATTR6_DOESNT_RESET_SWING_TIMER_IF_INSTANT = 0x02000000;
    const SPELL_ATTR6_VEHICLE_IMMUNITY_CATEGORY = 0x04000000;
    const SPELL_ATTR6_IGNORE_HEALING_MODIFIERS = 0x08000000;
    const SPELL_ATTR6_DO_NOT_AUTO_SELECT_TARGET_WITH_INITIATES_COMBAT = 0x10000000;
    const SPELL_ATTR6_IGNORE_CASTER_DAMAGE_MODIFIERS = 0x20000000;
    const SPELL_ATTR6_DISABLE_TIED_EFFECT_POINTS = 0x40000000;
    const SPELL_ATTR6_NO_CATEGORY_COOLDOWN_MODS = 0x80000000;

    /**
     * Get the list of spell attributes with their names.
     *
     * @return array
     */
    public static function getSpellAttributesEx6Options()
    {
        return [
            self::SPELL_ATTR6_NONE => 'NONE',
            self::SPELL_ATTR6_NO_COOLDOWN_ON_TOOLTIP => 'NO_COOLDOWN_ON_TOOLTIP',
            self::SPELL_ATTR6_DO_NOT_RESET_COOLDOWN_IN_ARENA => 'DO_NOT_RESET_COOLDOWN_IN_ARENA',
            self::SPELL_ATTR6_NOT_AN_ATTACK => 'NOT_AN_ATTACK',
            self::SPELL_ATTR6_CAN_ASSIST_IMMUNE_PC => 'CAN_ASSIST_IMMUNE_PC',
            self::SPELL_ATTR6_IGNORE_FOR_MOD_TIME_RATE => 'IGNORE_FOR_MOD_TIME_RATE',
            self::SPELL_ATTR6_DO_NOT_CONSUME_RESOURCES => 'DO_NOT_CONSUME_RESOURCES',
            self::SPELL_ATTR6_FLOATING_COMBAT_TEXT_ON_CAST => 'FLOATING_COMBAT_TEXT_ON_CAST',
            self::SPELL_ATTR6_AURA_IS_WEAPON_PROC => 'AURA_IS_WEAPON_PROC',
            self::SPELL_ATTR6_DO_NOT_CHAIN_TO_CROWD_CONTROLLED_TARGETS => 'DO_NOT_CHAIN_TO_CROWD_CONTROLLED_TARGETS',
            self::SPELL_ATTR6_ALLOW_ON_CHARMED_TARGETS => 'ALLOW_ON_CHARMED_TARGETS',
            self::SPELL_ATTR6_NO_AURA_LOG => 'NO_AURA_LOG',
            self::SPELL_ATTR6_NOT_IN_RAID_INSTANCES => 'NOT_IN_RAID_INSTANCES',
            self::SPELL_ATTR6_ALLOW_WHILE_RIDING_VEHICLE => 'ALLOW_WHILE_RIDING_VEHICLE',
            self::SPELL_ATTR6_IGNORE_PHASE_SHIFT => 'IGNORE_PHASE_SHIFT',
            self::SPELL_ATTR6_AI_PRIMARY_RANGED_ATTACK => 'AI_PRIMARY_RANGED_ATTACK',
            self::SPELL_ATTR6_NO_PUSHBACK => 'NO_PUSHBACK',
            self::SPELL_ATTR6_NO_JUMP_PATHING => 'NO_JUMP_PATHING',
            self::SPELL_ATTR6_ALLOW_EQUIP_WHILE_CASTING => 'ALLOW_EQUIP_WHILE_CASTING',
            self::SPELL_ATTR6_ORIGINATE_FROM_CONTROLLER => 'ORIGINATE_FROM_CONTROLLER',
            self::SPELL_ATTR6_DELAY_COMBAT_TIMER_DURING_CAST => 'DELAY_COMBAT_TIMER_DURING_CAST',
            self::SPELL_ATTR6_AURA_ICON_ONLY_FOR_CASTER_LIMIT_10 => 'AURA_ICON_ONLY_FOR_CASTER_LIMIT_10',
            self::SPELL_ATTR6_SHOW_MECHANIC_AS_COMBAT_TEXT => 'SHOW_MECHANIC_AS_COMBAT_TEXT',
            self::SPELL_ATTR6_ABSORB_CANNOT_BE_IGNORE => 'ABSORB_CANNOT_BE_IGNORE',
            self::SPELL_ATTR6_TAPS_IMMEDIATELY => 'TAPS_IMMEDIATELY',
            self::SPELL_ATTR6_CAN_TARGET_UNTARGETABLE => 'CAN_TARGET_UNTARGETABLE',
            self::SPELL_ATTR6_DOESNT_RESET_SWING_TIMER_IF_INSTANT => 'DOESNT_RESET_SWING_TIMER_IF_INSTANT',
            self::SPELL_ATTR6_VEHICLE_IMMUNITY_CATEGORY => 'VEHICLE_IMMUNITY_CATEGORY',
            self::SPELL_ATTR6_IGNORE_HEALING_MODIFIERS => 'IGNORE_HEALING_MODIFIERS',
            self::SPELL_ATTR6_DO_NOT_AUTO_SELECT_TARGET_WITH_INITIATES_COMBAT => 'DO_NOT_AUTO_SELECT_TARGET_WITH_INITIATES_COMBAT',
            self::SPELL_ATTR6_IGNORE_CASTER_DAMAGE_MODIFIERS => 'IGNORE_CASTER_DAMAGE_MODIFIERS',
            self::SPELL_ATTR6_DISABLE_TIED_EFFECT_POINTS => 'DISABLE_TIED_EFFECT_POINTS',
            self::SPELL_ATTR6_NO_CATEGORY_COOLDOWN_MODS => 'NO_CATEGORY_COOLDOWN_MODS',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific spell attribute.
     *
     * @param int $attribute
     * @return string|null
     */
    public static function getSpellAttributesEx6Name($attribute)
    {
        $spellAttributes = self::getSpellAttributesEx6Options();
        return isset($spellAttributes[$attribute]) ? $spellAttributes[$attribute] : null;
    }
}
