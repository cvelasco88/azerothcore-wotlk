<?php

namespace app\models\traits\spell;

trait EquippedItemClassTrait
{
    const EQUIPED_ITEM_CLASS_NONE = 0x0000;
    const EQUIPED_ITEM_CLASS_BAGS = 0x0001;
    const EQUIPED_ITEM_CLASS_WEAPONS = 0x0002;
    const EQUIPED_ITEM_CLASS_GEMS = 0x0004;
    const EQUIPED_ITEM_CLASS_ARMOR = 0x0008; // Armor/Misc

    /**
     * Get the list of dispel types with their values.
     *
     * @return array
     */
    public static function getEquippedItemClassOptions()
    {
        return [
            self::EQUIPED_ITEM_CLASS_NONE => 'None',
            self::EQUIPED_ITEM_CLASS_BAGS => 'Bags',
            self::EQUIPED_ITEM_CLASS_WEAPONS => 'Weapons',
            self::EQUIPED_ITEM_CLASS_GEMS => 'Gems',
            self::EQUIPED_ITEM_CLASS_ARMOR => 'Armor/Misc',
        ];
    }

    /**
     * Get the human-readable spell name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getEquippedItemClassName($type)
    {
        $equippedItemClassTypes = self::getEquippedItemClassOptions();
        return isset($equippedItemClassTypes[$type]) ? $equippedItemClassTypes[$type] : null;
    }
}
