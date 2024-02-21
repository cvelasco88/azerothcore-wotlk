<?php

namespace app\models\traits\spell;

/**
 * Mask. Shapeshifts/Stances in which is spell castable.
 */
trait ShapeshiftMaskTrait
{
    // Flag constants
    const SHAPESHIFT_MASK_NONE = 0x00000; // 0 - None
    const SHAPESHIFT_MASK_STANCE = 0x00001; // 1 - Simulates not being shapeshifted to allow mounts/items/interactions i.e. warrior ShapeshiftMask CGUnit_C::IsShapeShifted.
    const SHAPESHIFT_MASK_NOT_TOGGLEABLE = 0x00002; // 2 - Prevents cancellation Spell_C_CancelActiveSpell.
    const SHAPESHIFT_MASK_PERSIST_ON_DEATH = 0x00004; // 3 - Self descriptive.
    const SHAPESHIFT_MASK_CAN_INTERACT_NPC = 0x00008; // 4 - Allows interaction CGPlayer_C::HandleInteraction, CGGameObject_C_TypeBase::Use.
    const SHAPESHIFT_MASK_DONT_USE_WEAPON = 0x00010; // 5 - Self descriptive.
    const SHAPESHIFT_MASK_AGILITY_ATTACK_BONUS = 0x00020; // 6 - Enables agility AP bonuses e.g. cat form CGPlayer_C::GetAttackPowerContributionFromStat; Deprecated if higher than 6.2.4.
    const SHAPESHIFT_MASK_CAN_USE_EQUIPPED_ITEMS = 0x00040; // 7 - Can equip items CGItem_C::Use
    const SHAPESHIFT_MASK_CAN_USE_ITEMS = 0x00080; // 8 - Can use items CGItem_C::Use.
    const SHAPESHIFT_MASK_DONT_AUTO_UNSHIFT = 0x00100; // 9 - Allows client to auto-unshift CGUnit_C::CanAutoUnshift.
    const SHAPESHIFT_MASK_CONSIDERED_DEAD = 0x00200; // 10 - Prevents LFG teleportation Script_LFGTeleport.
    const SHAPESHIFT_MASK_CAN_ONLY_CAST_SHAPESHIFT_SPELLS = 0x00400; // 11 - Prevents the use of non-shapeshift form spells CGUnit_C::CheckShapeshiftRules.
    const SHAPESHIFT_MASK_SHAPESHIFT_MASK_CANCELS_AT_FLIGHTMASTER = 0x00800; // 12 - If m_flags & 1 != 0, cancels shapeshift when interacting with flight masters CGUnit_C::IsCancelShapeshiftAtFlightMaster.
    const SHAPESHIFT_MASK_NO_EMOTE_SOUNDS = 0x01000; // 13 - Prevents emote sounds CGUnit_C::PlayTextEmoteSound.
    const SHAPESHIFT_MASK_NO_TRIGGER_TELEPORT = 0x02000; // 14 - Enables Alliance and Horde to participate in the activity as a group together.
    const SHAPESHIFT_MASK_CANNOT_CHANGE_EQUIPPED_ITEMS = 0x04000; // 15 - Prevents emote sounds CGUnit_C::PlayTextEmoteSound.
    const SHAPESHIFT_MASK_RESUMMON_PETS_ON_UNSHIFT = 0x08000; // 16 - Deprecated.
    const SHAPESHIFT_MASK_CANNOT_USE_GAME_OBJECTS = 0x10000; // 17 - Prevents emote sounds CGUnit_C::PlayTextEmoteSound.

    
    public static function getSpellShapeshiftMaskOptions()
    {
        return [
            self::SHAPESHIFT_MASK_NONE => 'None',
            self::SHAPESHIFT_MASK_STANCE => 'ShapeshiftMask', // Simulates not being shapeshifted to allow mounts/items/interactions i.e. warrior ShapeshiftMask CGUnit_C::IsShapeShifted.
            self::SHAPESHIFT_MASK_NOT_TOGGLEABLE => 'NotToggleable', // Prevents cancellation Spell_C_CancelActiveSpell.
            self::SHAPESHIFT_MASK_PERSIST_ON_DEATH => 'PersistOnDeath', // Self descriptive.
            self::SHAPESHIFT_MASK_CAN_INTERACT_NPC => 'CanInteractNPC', // Allows interaction CGPlayer_C::HandleInteraction, CGGameObject_C_TypeBase::Use.
            self::SHAPESHIFT_MASK_DONT_USE_WEAPON => 'DontUseWeapon', // Self descriptive.
            self::SHAPESHIFT_MASK_AGILITY_ATTACK_BONUS => 'AgilityAttackBonus', // Enables agility AP bonuses e.g. cat form CGPlayer_C::GetAttackPowerContributionFromStat; Deprecated if higher than 6.2.4.
            self::SHAPESHIFT_MASK_CAN_USE_EQUIPPED_ITEMS => 'CanUseEquippedItems', // Can equip items CGItem_C::Use.
            self::SHAPESHIFT_MASK_CAN_USE_ITEMS => 'CanUseItems', // Can use items CGItem_C::Use.
            self::SHAPESHIFT_MASK_DONT_AUTO_UNSHIFT => 'DontAutoUnshift', // Allows client to auto-unshift CGUnit_C::CanAutoUnshift.
            self::SHAPESHIFT_MASK_CONSIDERED_DEAD => 'ConsideredDead', // Prevents LFG teleportation Script_LFGTeleport.
            self::SHAPESHIFT_MASK_CAN_ONLY_CAST_SHAPESHIFT_SPELLS => 'CanOnlyCastShapeshiftSpells', // Prevents the use of non-shapeshift form spells CGUnit_C::CheckShapeshiftRules.
            self::SHAPESHIFT_MASK_SHAPESHIFT_MASK_CANCELS_AT_FLIGHTMASTER => 'ShapeshiftMaskCancelsAtFlightmaster', // If m_flags & 1 != 0, cancels shapeshift when interacting with flight masters CGUnit_C::IsCancelShapeshiftAtFlightMaster.
            self::SHAPESHIFT_MASK_NO_EMOTE_SOUNDS => 'NoEmoteSounds', // Prevents emote sounds CGUnit_C::PlayTextEmoteSound.
            self::SHAPESHIFT_MASK_NO_TRIGGER_TELEPORT => 'NoTriggerTeleport', // Enables Alliance and Horde to participate in the activity as a group together.
            self::SHAPESHIFT_MASK_CANNOT_CHANGE_EQUIPPED_ITEMS => 'CannotChangeEquippedItems', // Prevents emote sounds CGUnit_C::PlayTextEmoteSound.
            self::SHAPESHIFT_MASK_RESUMMON_PETS_ON_UNSHIFT => 'ResummonPetsOnUnshift', // Deprecated.
            self::SHAPESHIFT_MASK_CANNOT_USE_GAME_OBJECTS => 'CannotUseGameObjects', // Prevents emote sounds CGUnit_C::PlayTextEmoteSound.
        ];
    }

    /**
     * Get the human-readable spell flag name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellShapeshiftMaskName($type)
    {
        $spellFlagOptions = self::getSpellShapeshiftMaskOptions();
        return isset($spellFlagOptions[$type]) ? $spellFlagOptions[$type] : null;
    }

}
