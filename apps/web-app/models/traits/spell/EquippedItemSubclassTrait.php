<?php

namespace app\models\traits\spell;

trait EquippedItemSubclassTrait
{
    // NO CLASS
    const EQUIPED_ITEM_SUBCLASS_UNK_NONE = 0x00000000;

    // BAGS
    const EQUIPED_ITEM_SUBCLASS_BAGS_NONE = 0x00000000;
    const EQUIPED_ITEM_SUBCLASS_BAGS_BAG = 0x00000001;
    const EQUIPED_ITEM_SUBCLASS_BAGS_SOULBAG = 0x00000002;
    const EQUIPED_ITEM_SUBCLASS_BAGS_HERBBAG = 0x00000004;
    const EQUIPED_ITEM_SUBCLASS_BAGS_ENCHANTING_BAG = 0x00000008;
    const EQUIPED_ITEM_SUBCLASS_BAGS_ENGINEERING_BAG = 0x00000010;
    const EQUIPED_ITEM_SUBCLASS_BAGS_GEMBAG = 0x00000020;
    const EQUIPED_ITEM_SUBCLASS_BAGS_MINING_BAG = 0x00000040;
    const EQUIPED_ITEM_SUBCLASS_BAGS_LEATHERWORKING_BAG = 0x00000080;
    const EQUIPED_ITEM_SUBCLASS_BAGS_INSCRIPTION_BAG = 0x00000100;

    // WEAPONS
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_NONE = 0x00000000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_1H_AXE = 0x00000001;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_2H_AXE = 0x00000002;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_BOW = 0x00000004;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_GUNS = 0x00000008;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_MACE_1H = 0x00000010;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_MACE_2H = 0x00000020;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_POLEARM = 0x00000040;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_SWORD_1H = 0x00000080;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_SWORD_2H = 0x00000100;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_OBSOLETE = 0x00000200;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_STAFF = 0x00000400;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_1H_EXOTIC = 0x00000800;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_2H_EXOTIC = 0x00001000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_FIST = 0x00002000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_MISC = 0x00004000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_DAGGERS = 0x00008000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_THROWN = 0x00010000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_SPEAR = 0x00020000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_CROSSBOW = 0x00040000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_WAND = 0x00080000;
    const EQUIPED_ITEM_SUBCLASS_WEAPONS_FISHING_POLE = 0x00100000;

    // GEMS
    const EQUIPED_ITEM_SUBCLASS_GEM_NONE = 0x00000000;
    const EQUIPED_ITEM_SUBCLASS_GEM_RED = 0x00000001;
    const EQUIPED_ITEM_SUBCLASS_GEM_BLUE = 0x00000002;
    const EQUIPED_ITEM_SUBCLASS_GEM_YELLOW = 0x00000004;
    const EQUIPED_ITEM_SUBCLASS_GEM_PURPLE = 0x00000008;
    const EQUIPED_ITEM_SUBCLASS_GEM_GREEN = 0x00000010;
    const EQUIPED_ITEM_SUBCLASS_GEM_ORANGE = 0x00000020;
    const EQUIPED_ITEM_SUBCLASS_GEM_META = 0x00000040;
    const EQUIPED_ITEM_SUBCLASS_GEM_SIMPLE = 0x00000080;
    const EQUIPED_ITEM_SUBCLASS_GEM_PRISMATIC = 0x00000100;

    // ARMOR MISC
    const EQUIPED_ITEM_SUBCLASS_ARMOR_NONE = 0x00000000;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_MISC = 0x00000001;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_CLOTH = 0x00000002;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_LEATHER = 0x00000004;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_MAIL = 0x00000008;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_PLATE = 0x00000010;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_BUCKLER_UNUSED = 0x00000020;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_SHIELD = 0x00000040;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_LIBRAM = 0x00000080;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_IDOL = 0x00000100;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_TOTEM = 0x00000200;
    const EQUIPED_ITEM_SUBCLASS_ARMOR_SIGIL = 0x00000400;

    /**
     * Get the list of equipped item class options with their values.
     * @param EquippedItemClassTrait $model
     * @param int $equippedItemClass
     * @return array
     */
    public static function getEquippedItemSubclassOptions($model, int $equippedItemClass): array
    {
        $items = [
            $model::EQUIPED_ITEM_CLASS_BAGS => [
                // BAGS
                self::EQUIPED_ITEM_SUBCLASS_BAGS_NONE => 'None',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_BAG => 'Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_SOULBAG => 'Soulbag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_HERBBAG => 'Herbbag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_ENCHANTING_BAG => 'Enchanting Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_ENGINEERING_BAG => 'Engineering Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_GEMBAG => 'Gem Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_MINING_BAG => 'Mining Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_LEATHERWORKING_BAG => 'Leatherworking Bag',
                self::EQUIPED_ITEM_SUBCLASS_BAGS_INSCRIPTION_BAG => 'Inscription Bag',
            ],
            $model::EQUIPED_ITEM_CLASS_WEAPONS => [
                // WEAPONS
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_NONE => 'None',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_1H_AXE => '1h Axe',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_2H_AXE => '2h Axe',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_BOW => 'Bow',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_GUNS => 'Guns',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_MACE_1H => '1h Mace',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_MACE_2H => '2h Mace',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_POLEARM => 'Polearm',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_SWORD_1H => '1h Sword',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_SWORD_2H => '2h Sword',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_OBSOLETE => 'Obsolete',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_STAFF => 'Staff',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_1H_EXOTIC => '1h Exotic',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_2H_EXOTIC => '2h Exotic',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_FIST => 'Fist',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_MISC => 'Misc',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_DAGGERS => 'Daggers',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_THROWN => 'Thrown',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_SPEAR => 'Spear',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_CROSSBOW => 'Crossbow',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_WAND => 'Wand',
                self::EQUIPED_ITEM_SUBCLASS_WEAPONS_FISHING_POLE => 'Fishing Pole',                
            ],
            $model::EQUIPED_ITEM_CLASS_GEMS => [
                // GEMS
                self::EQUIPED_ITEM_SUBCLASS_GEM_NONE => 'None',
                self::EQUIPED_ITEM_SUBCLASS_GEM_RED => 'Red',
                self::EQUIPED_ITEM_SUBCLASS_GEM_BLUE => 'Blue',
                self::EQUIPED_ITEM_SUBCLASS_GEM_YELLOW => 'Yellow',
                self::EQUIPED_ITEM_SUBCLASS_GEM_PURPLE => 'Purple',
                self::EQUIPED_ITEM_SUBCLASS_GEM_GREEN => 'Green',
                self::EQUIPED_ITEM_SUBCLASS_GEM_ORANGE => 'Orange',
                self::EQUIPED_ITEM_SUBCLASS_GEM_META => 'Meta',
                self::EQUIPED_ITEM_SUBCLASS_GEM_SIMPLE => 'Simple',
                self::EQUIPED_ITEM_SUBCLASS_GEM_PRISMATIC => 'Prismatic',
            ],
            $model::EQUIPED_ITEM_CLASS_ARMOR => [
                // ARMOR MISC
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_NONE => 'None',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_MISC => 'Misc',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_CLOTH => 'Cloth',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_LEATHER => 'Leather',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_MAIL => 'Mail',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_PLATE => 'Plate',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_BUCKLER_UNUSED => 'Buckler (Unused)',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_SHIELD => 'Shield',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_LIBRAM => 'Libram',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_IDOL => 'Idol',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_TOTEM => 'Totem',
                self::EQUIPED_ITEM_SUBCLASS_ARMOR_SIGIL => 'Sigil',
            ]
        ];

        if(array_key_exists($equippedItemClass, $items)) {
            return $items[$equippedItemClass];
        }
        return [
            self::EQUIPED_ITEM_SUBCLASS_UNK_NONE => 'None',
        ];
    }

    /**
     * Get the human-readable equipped item class name for a specific type.
     * @param EquippedItemClassTrait $model
     * @param int $equippedItemClass
     * @param int $type
     * @return string|null
     */
    public static function getEquippedItemSubclassName($model, int $equippedItemClass, $type)
    {
        $equippedItemSubclassOptions = self::getEquippedItemSubclassOptions($model, $equippedItemClass);
        return isset($equippedItemSubclassOptions[$type]) ? $equippedItemSubclassOptions[$type] : null;
    }
}
