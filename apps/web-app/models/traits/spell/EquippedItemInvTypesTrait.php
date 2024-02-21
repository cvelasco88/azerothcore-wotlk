<?php

namespace app\models\traits\spell;

trait EquippedItemInvTypesTrait
{
    const EQUIPPED_ITEM_INV_TYPE_NOT_EQUIPABLE = 0x0;
    const EQUIPPED_ITEM_INV_TYPE_HEAD = 0x1;
    const EQUIPPED_ITEM_INV_TYPE_NECK = 0x2;
    const EQUIPPED_ITEM_INV_TYPE_SHOULDER = 0x4;
    const EQUIPPED_ITEM_INV_TYPE_SHIRT = 0x8;
    const EQUIPPED_ITEM_INV_TYPE_CHEST = 0x10;
    const EQUIPPED_ITEM_INV_TYPE_WAIST = 0x20;
    const EQUIPPED_ITEM_INV_TYPE_LEGS = 0x40;
    const EQUIPPED_ITEM_INV_TYPE_FEET = 0x80;
    const EQUIPPED_ITEM_INV_TYPE_WRISTS = 0x100;
    const EQUIPPED_ITEM_INV_TYPE_HANDS = 0x200;
    const EQUIPPED_ITEM_INV_TYPE_FINGER = 0x400;
    const EQUIPPED_ITEM_INV_TYPE_TRINKET = 0x800;
    const EQUIPPED_ITEM_INV_TYPE_WEAPON = 0x1000;
    const EQUIPPED_ITEM_INV_TYPE_SHIELD = 0x2000;
    const EQUIPPED_ITEM_INV_TYPE_RANGED = 0x4000;
    const EQUIPPED_ITEM_INV_TYPE_BACK = 0x8000;
    const EQUIPPED_ITEM_INV_TYPE_TWO_HAND = 0x10000;
    const EQUIPPED_ITEM_INV_TYPE_BAG = 0x20000;
    const EQUIPPED_ITEM_INV_TYPE_TABARD = 0x40000;
    const EQUIPPED_ITEM_INV_TYPE_ROBE = 0x80000;
    const EQUIPPED_ITEM_INV_TYPE_MAIN_HAND = 0x100000;
    const EQUIPPED_ITEM_INV_TYPE_OFF_HAND = 0x200000;
    const EQUIPPED_ITEM_INV_TYPE_HOLDABLE = 0x400000;
    const EQUIPPED_ITEM_INV_TYPE_AMMO = 0x800000;
    const EQUIPPED_ITEM_INV_TYPE_THROWN = 0x1000000;
    const EQUIPPED_ITEM_INV_TYPE_RANGED_RIGHT = 0x2000000;
    const EQUIPPED_ITEM_INV_TYPE_QUIVER = 0x4000000;
    const EQUIPPED_ITEM_INV_TYPE_RELIC = 0x8000000;

    /**
     * Get the list of slot options with their values.
     *
     * @return array
     */
    public static function getEquippedItemInvTypeOptions()
    {
        return [
            self::EQUIPPED_ITEM_INV_TYPE_NOT_EQUIPABLE => 'Not Equipable',
            self::EQUIPPED_ITEM_INV_TYPE_HEAD => 'Head',
            self::EQUIPPED_ITEM_INV_TYPE_NECK => 'Neck',
            self::EQUIPPED_ITEM_INV_TYPE_SHOULDER => 'Shoulder',
            self::EQUIPPED_ITEM_INV_TYPE_SHIRT => 'Shirt',
            self::EQUIPPED_ITEM_INV_TYPE_CHEST => 'Chest',
            self::EQUIPPED_ITEM_INV_TYPE_WAIST => 'Waist',
            self::EQUIPPED_ITEM_INV_TYPE_LEGS => 'Legs',
            self::EQUIPPED_ITEM_INV_TYPE_FEET => 'Feet',
            self::EQUIPPED_ITEM_INV_TYPE_WRISTS => 'Wrists',
            self::EQUIPPED_ITEM_INV_TYPE_HANDS => 'Hands',
            self::EQUIPPED_ITEM_INV_TYPE_FINGER => 'Finger',
            self::EQUIPPED_ITEM_INV_TYPE_TRINKET => 'Trinket',
            self::EQUIPPED_ITEM_INV_TYPE_WEAPON => 'Weapon',
            self::EQUIPPED_ITEM_INV_TYPE_SHIELD => 'Shield',
            self::EQUIPPED_ITEM_INV_TYPE_RANGED => 'Ranged (Bows)',
            self::EQUIPPED_ITEM_INV_TYPE_BACK => 'Back',
            self::EQUIPPED_ITEM_INV_TYPE_TWO_HAND => 'Two-Hand',
            self::EQUIPPED_ITEM_INV_TYPE_BAG => 'Bag',
            self::EQUIPPED_ITEM_INV_TYPE_TABARD => 'Tabard',
            self::EQUIPPED_ITEM_INV_TYPE_ROBE => 'Robe',
            self::EQUIPPED_ITEM_INV_TYPE_MAIN_HAND => 'Main hand',
            self::EQUIPPED_ITEM_INV_TYPE_OFF_HAND => 'Off hand',
            self::EQUIPPED_ITEM_INV_TYPE_HOLDABLE => 'Holdable (Tome)',
            self::EQUIPPED_ITEM_INV_TYPE_AMMO => 'Ammo',
            self::EQUIPPED_ITEM_INV_TYPE_THROWN => 'Thrown',
            self::EQUIPPED_ITEM_INV_TYPE_RANGED_RIGHT => 'Ranged right (Wands, Guns)',
            self::EQUIPPED_ITEM_INV_TYPE_QUIVER => 'Quiver',
            self::EQUIPPED_ITEM_INV_TYPE_RELIC => 'Relic',
        ];
    }

    /**
     * Get the human-readable slot name for a specific slot.
     *
     * @param int $type
     * @return string|null
     */
    public static function getEquippedItemInvTypeName($type)
    {
        $options = self::getEquippedItemInvTypeOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
