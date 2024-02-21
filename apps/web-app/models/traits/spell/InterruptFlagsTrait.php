<?php

namespace app\models\traits\spell;

/**
 */
trait InterruptFlagsTrait
{
    const INTERRUPT_FLAG_NONE = 0x00;
    const INTERRUPT_FLAG_ON_MOVEMENT = 0x01;
    const INTERRUPT_FLAG_PUSHBACK = 0x02;
    const INTERRUPT_FLAG_ON_INTERRUPT_CAST = 0x04;
    const INTERRUPT_FLAG_ON_INTERRUPT_SCHOOL = 0x08;
    const INTERRUPT_FLAG_ON_DAMAGE_TAKEN = 0x10;
    const INTERRUPT_FLAG_ON_INTERRUPT_ALL = 0x20;

    /**
     *
     * @return array
     */
    public static function getSpellInterruptFlagOptions()
    {
        return [
            self::INTERRUPT_FLAG_NONE => 'None',
            self::INTERRUPT_FLAG_ON_MOVEMENT => 'On Movement',
            self::INTERRUPT_FLAG_PUSHBACK => 'Pushback',
            self::INTERRUPT_FLAG_ON_INTERRUPT_CAST => 'On Interrupt Cast',
            self::INTERRUPT_FLAG_ON_INTERRUPT_SCHOOL => 'On Interrupt School',
            self::INTERRUPT_FLAG_ON_DAMAGE_TAKEN => 'On Damage Taken',
            self::INTERRUPT_FLAG_ON_INTERRUPT_ALL => 'On Interrupt All',
        ];
    }

    /**
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellInterruptFlagName($type)
    {
        $spellInterruptFlagOptions = self::getSpellInterruptFlagOptions();
        return isset($spellInterruptFlagOptions[$type]) ? $spellInterruptFlagOptions[$type] : null;
    }
}
