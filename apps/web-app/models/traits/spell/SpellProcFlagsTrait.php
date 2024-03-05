<?php

namespace app\models\traits\spell;

trait SpellProcFlagsTrait
{
    const SPELL_PROC_FLAG_NONE = 0x00000000;
    const SPELL_PROC_FLAG_HEARTBEAT = 0x00000001;
    const SPELL_PROC_FLAG_KILL = 0x00000002;
    const SPELL_PROC_FLAG_DONE_MELEE_AUTO_ATTACK = 0x00000004;
    const SPELL_PROC_FLAG_TAKEN_MELEE_AUTO_ATTACK = 0x00000008;
    const SPELL_PROC_FLAG_DONE_SPELL_MELEE_DMG_CLASS = 0x00000010;
    const SPELL_PROC_FLAG_TAKEN_SPELL_MELEE_DMG_CLASS = 0x00000020;
    const SPELL_PROC_FLAG_DONE_RANGED_AUTO_ATTACK = 0x00000040;
    const SPELL_PROC_FLAG_TAKEN_RANGED_AUTO_ATTACK = 0x00000080;
    const SPELL_PROC_FLAG_DONE_SPELL_RANGED_DMG_CLASS = 0x00000100;
    const SPELL_PROC_FLAG_TAKEN_SPELL_RANGED_DMG_CLASS = 0x00000200;
    const SPELL_PROC_FLAG_DONE_SPELL_NONE_DMG_CLASS_POS = 0x00000400;
    const SPELL_PROC_FLAG_TAKEN_SPELL_NONE_DMG_CLASS_POS = 0x00000800;
    const SPELL_PROC_FLAG_DONE_SPELL_NONE_DMG_CLASS_NEG = 0x00001000;
    const SPELL_PROC_FLAG_TAKEN_SPELL_NONE_DMG_CLASS_NEG = 0x00002000;
    const SPELL_PROC_FLAG_DONE_SPELL_MAGIC_DMG_CLASS_POS = 0x00004000;
    const SPELL_PROC_FLAG_TAKEN_SPELL_MAGIC_DMG_CLASS_POS = 0x00008000;
    const SPELL_PROC_FLAG_DONE_SPELL_MAGIC_DMG_CLASS_NEG = 0x00010000;
    const SPELL_PROC_FLAG_TAKEN_SPELL_MAGIC_DMG_CLASS_NEG = 0x00020000;
    const SPELL_PROC_FLAG_DONE_PERIODIC = 0x00040000;
    const SPELL_PROC_FLAG_TAKEN_PERIODIC = 0x00080000;
    const SPELL_PROC_FLAG_TAKEN_DAMAGE = 0x00100000;
    const SPELL_PROC_FLAG_DONE_TRAP_ACTIVATION = 0x00200000;
    const SPELL_PROC_FLAG_DONE_MAINHAND_ATTACK = 0x00400000;
    const SPELL_PROC_FLAG_DONE_OFFHAND_ATTACK = 0x00800000;
    const SPELL_PROC_FLAG_DEATH = 0x01000000;

    /**
     * Get the list of target creature types with their names.
     *
     * @return array
     */
    public static function getSpellProcFlagOptions()
    {
        return [
            self::SPELL_PROC_FLAG_NONE => 'None',
            self::SPELL_PROC_FLAG_HEARTBEAT => 'Heartbeat',
            self::SPELL_PROC_FLAG_KILL => 'Kill',
            self::SPELL_PROC_FLAG_DONE_MELEE_AUTO_ATTACK => 'Done Melee Auto Attack',
            self::SPELL_PROC_FLAG_TAKEN_MELEE_AUTO_ATTACK => 'Taken Melee Auto Attack',
            self::SPELL_PROC_FLAG_DONE_SPELL_MELEE_DMG_CLASS => 'Done Melee Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_MELEE_DMG_CLASS => 'Taken Melee Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_RANGED_AUTO_ATTACK => 'Done Ranged Auto Attack',
            self::SPELL_PROC_FLAG_TAKEN_RANGED_AUTO_ATTACK => 'Taken Ranged Auto Attack',
            self::SPELL_PROC_FLAG_DONE_SPELL_RANGED_DMG_CLASS => 'Done Ranged Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_RANGED_DMG_CLASS => 'Taken Ranged Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_SPELL_NONE_DMG_CLASS_POS => 'Done Positive None Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_NONE_DMG_CLASS_POS => 'Taken Positive None Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_SPELL_NONE_DMG_CLASS_NEG => 'Done Negative None Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_NONE_DMG_CLASS_NEG => 'Taken Negative None Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_SPELL_MAGIC_DMG_CLASS_POS => 'Done Positive Magic Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_MAGIC_DMG_CLASS_POS => 'Taken Positive Magic Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_SPELL_MAGIC_DMG_CLASS_NEG => 'Done Negative Magic Damage Class Spell',
            self::SPELL_PROC_FLAG_TAKEN_SPELL_MAGIC_DMG_CLASS_NEG => 'Taken Negative Magic Damage Class Spell',
            self::SPELL_PROC_FLAG_DONE_PERIODIC => 'Done Periodic',
            self::SPELL_PROC_FLAG_TAKEN_PERIODIC => 'Taken Periodic',
            self::SPELL_PROC_FLAG_TAKEN_DAMAGE => 'Taken Damage',
            self::SPELL_PROC_FLAG_DONE_TRAP_ACTIVATION => 'Done Trap Activation',
            self::SPELL_PROC_FLAG_DONE_MAINHAND_ATTACK => 'Done Mainhand Attack',
            self::SPELL_PROC_FLAG_DONE_OFFHAND_ATTACK => 'Done Offhand Attack',
            self::SPELL_PROC_FLAG_DEATH => 'Death',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific target creature type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellProcFlagName($type)
    {
        $options = self::getSpellProcFlagOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
