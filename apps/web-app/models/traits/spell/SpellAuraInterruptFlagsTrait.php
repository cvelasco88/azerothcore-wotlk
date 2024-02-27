<?php

namespace app\models\traits\spell;

trait SpellAuraInterruptFlagsTrait
{
    const SPELL_AURA_INTERRUPT_NONE = 0x0000000;
    const SPELL_AURA_INTERRUPT_HITBYSPELL = 0x0000001;
    const SPELL_AURA_INTERRUPT_TAKE_DAMAGE = 0x0000002;
    const SPELL_AURA_INTERRUPT_CAST = 0x0000004;
    const SPELL_AURA_INTERRUPT_MOVE = 0x0000008;
    const SPELL_AURA_INTERRUPT_TURNING = 0x0000010;
    const SPELL_AURA_INTERRUPT_JUMP = 0x0000020;
    const SPELL_AURA_INTERRUPT_NOT_MOUNTED = 0x0000040;
    const SPELL_AURA_INTERRUPT_NOT_ABOVEWATER = 0x0000080;
    const SPELL_AURA_INTERRUPT_NOT_UNDERWATER = 0x0000100;
    const SPELL_AURA_INTERRUPT_NOT_SHEATHED = 0x0000200;
    const SPELL_AURA_INTERRUPT_TALK = 0x0000400;
    const SPELL_AURA_INTERRUPT_USE = 0x0000800;
    const SPELL_AURA_INTERRUPT_MEELEE_ATTACK = 0x0001000;
    const SPELL_AURA_INTERRUPT_SPELL_ATTACK = 0x0002000;
    const SPELL_AURA_INTERRUPT_UNK14 = 0x0004000;
    const SPELL_AURA_INTERRUPT_TRANSFORM = 0x0008000;
    const SPELL_AURA_INTERRUPT_UNK16 = 0x0010000;
    const SPELL_AURA_INTERRUPT_MOUNT = 0x0020000;
    const SPELL_AURA_INTERRUPT_NOT_SEATED = 0x0040000;
    const SPELL_AURA_INTERRUPT_CHANGE_MAP = 0x0080000;
    const SPELL_AURA_INTERRUPT_IMMUNE_OR_LOST_SELECTION = 0x0100000;
    const SPELL_AURA_INTERRUPT_UNK21 = 0x0200000;
    const SPELL_AURA_INTERRUPT_TELEPORTED = 0x0400000;
    const SPELL_AURA_INTERRUPT_ENTER_PVP_COMBAT = 0x0800000;
    const SPELL_AURA_INTERRUPT_DIRECT_DAMAGE = 0x1000000;
    const SPELL_AURA_INTERRUPT_LANDING = 0x2000000;


    /**
     * Get the list of aura interrupt flag with their values.
     *
     * @return array
     */
    public static function getSpellAuraInterruptFlagOptions()
    {
        return [
            self::SPELL_AURA_INTERRUPT_NONE => 'None',
            self::SPELL_AURA_INTERRUPT_HITBYSPELL => 'Hit by Spell',
            self::SPELL_AURA_INTERRUPT_TAKE_DAMAGE => 'Take Damage',
            self::SPELL_AURA_INTERRUPT_CAST => 'Cast',
            self::SPELL_AURA_INTERRUPT_MOVE => 'Move',
            self::SPELL_AURA_INTERRUPT_TURNING => 'Turning',
            self::SPELL_AURA_INTERRUPT_JUMP => 'Jump',
            self::SPELL_AURA_INTERRUPT_NOT_MOUNTED => 'Not Mounted',
            self::SPELL_AURA_INTERRUPT_NOT_ABOVEWATER => 'Not Above Water',
            self::SPELL_AURA_INTERRUPT_NOT_UNDERWATER => 'Not Under Water',
            self::SPELL_AURA_INTERRUPT_NOT_SHEATHED => 'Not Sheathed',
            self::SPELL_AURA_INTERRUPT_TALK => 'Talk',
            self::SPELL_AURA_INTERRUPT_USE => 'Use',
            self::SPELL_AURA_INTERRUPT_MEELEE_ATTACK => 'Melee Attack',
            self::SPELL_AURA_INTERRUPT_SPELL_ATTACK => 'Spell Attack',
            self::SPELL_AURA_INTERRUPT_UNK14 => 'Unknown 14',
            self::SPELL_AURA_INTERRUPT_TRANSFORM => 'Transform',
            self::SPELL_AURA_INTERRUPT_UNK16 => 'Unknown 16',
            self::SPELL_AURA_INTERRUPT_MOUNT => 'Mount',
            self::SPELL_AURA_INTERRUPT_NOT_SEATED => 'Not Seated',
            self::SPELL_AURA_INTERRUPT_CHANGE_MAP => 'Change Map',
            self::SPELL_AURA_INTERRUPT_IMMUNE_OR_LOST_SELECTION => 'Immune or Lost Selection',
            self::SPELL_AURA_INTERRUPT_UNK21 => 'Unknown 21',
            self::SPELL_AURA_INTERRUPT_TELEPORTED => 'Teleported',
            self::SPELL_AURA_INTERRUPT_ENTER_PVP_COMBAT => 'Enter PvP Combat',
            self::SPELL_AURA_INTERRUPT_DIRECT_DAMAGE => 'Direct Damage',
            self::SPELL_AURA_INTERRUPT_LANDING => 'Landing',
        ];
    }

    /**
     * Get the human-readable aura interrupt flag name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellAuraInterruptFlagName($type)
    {
        $options = self::getSpellPreventionTypeOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
