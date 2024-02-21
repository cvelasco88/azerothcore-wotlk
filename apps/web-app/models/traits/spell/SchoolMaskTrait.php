<?php

namespace app\models\traits\spell;

trait SchoolMaskTrait
{
    const SCHOOL_MASK_NONE = 0x00;
    const SCHOOL_MASK_PHYSICAL = 0x01;
    const SCHOOL_MASK_HOLY = 0x02;
    const SCHOOL_MASK_FIRE = 0x04;
    const SCHOOL_MASK_NATURE = 0x08;
    const SCHOOL_MASK_FROST = 0x10;
    const SCHOOL_MASK_SHADOW = 0x20;
    const SCHOOL_MASK_ARCANE = 0x40;

    /**
     * Get the list of school mask options with their values.
     *
     * @return array
     */
    public static function getSchoolMaskOptions()
    {
        return [
            self::SCHOOL_MASK_NONE => 'None',
            self::SCHOOL_MASK_PHYSICAL => 'Physical',
            self::SCHOOL_MASK_HOLY => 'Holy',
            self::SCHOOL_MASK_FIRE => 'Fire',
            self::SCHOOL_MASK_NATURE => 'Nature',
            self::SCHOOL_MASK_FROST => 'Frost',
            self::SCHOOL_MASK_SHADOW => 'Shadow',
            self::SCHOOL_MASK_ARCANE => 'Arcane',
        ];
    }

    /**
     * Get the human-readable school mask name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSchoolMaskName($type)
    {
        $schoolMaskOptions = self::getSchoolMaskOptions();
        return isset($schoolMaskOptions[$type]) ? $schoolMaskOptions[$type] : null;
    }
}
