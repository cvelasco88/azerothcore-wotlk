<?php

namespace app\models\traits\spell;

trait SpellEffectsTrait
{
    const SPELL_EFFECT_NONE = 0;
    const SPELL_EFFECT_INSTAKILL = 1;
    const SPELL_EFFECT_SCHOOL_DAMAGE = 2;
    const SPELL_EFFECT_DUMMY = 3;
    const SPELL_EFFECT_PORTAL_TELEPORT = 4;
    const SPELL_EFFECT_TELEPORT_UNITS = 5;
    const SPELL_EFFECT_APPLY_AURA = 6;
    const SPELL_EFFECT_ENVIRONMENTAL_DAMAGE = 7;
    const SPELL_EFFECT_POWER_DRAIN = 8;
    const SPELL_EFFECT_HEALTH_LEECH = 9;
    const SPELL_EFFECT_HEAL = 10;
    const SPELL_EFFECT_BIND = 11;
    const SPELL_EFFECT_PORTAL = 12;
    const SPELL_EFFECT_RITUAL_BASE = 13;
    const SPELL_EFFECT_RITUAL_SPECIALIZE = 14;
    const SPELL_EFFECT_RITUAL_ACTIVATE_PORTAL = 15;
    const SPELL_EFFECT_QUEST_COMPLETE = 16;
    const SPELL_EFFECT_WEAPON_DAMAGE_NOSCHOOL = 17;
    const SPELL_EFFECT_RESURRECT = 18;
    const SPELL_EFFECT_ADD_EXTRA_ATTACKS = 19;
    const SPELL_EFFECT_DODGE = 20;
    const SPELL_EFFECT_EVADE = 21;
    const SPELL_EFFECT_PARRY = 22;
    const SPELL_EFFECT_BLOCK = 23;
    const SPELL_EFFECT_CREATE_ITEM = 24;
    const SPELL_EFFECT_WEAPON = 25;
    const SPELL_EFFECT_DEFENSE = 26;
    const SPELL_EFFECT_PERSISTENT_AREA_AURA = 27;
    const SPELL_EFFECT_SUMMON = 28;
    const SPELL_EFFECT_LEAP = 29;
    const SPELL_EFFECT_ENERGIZE = 30;
    const SPELL_EFFECT_WEAPON_PERCENT_DAMAGE = 31;
    const SPELL_EFFECT_TRIGGER_MISSILE = 32;
    const SPELL_EFFECT_OPEN_LOCK = 33;
    const SPELL_EFFECT_SUMMON_CHANGE_ITEM = 34;
    const SPELL_EFFECT_APPLY_AREA_AURA_PARTY = 35;
    const SPELL_EFFECT_LEARN_SPELL = 36;
    const SPELL_EFFECT_SPELL_DEFENSE = 37;
    const SPELL_EFFECT_DISPEL = 38;
    const SPELL_EFFECT_LANGUAGE = 39;
    const SPELL_EFFECT_DUAL_WIELD = 40;
    const SPELL_EFFECT_JUMP = 41;
    const SPELL_EFFECT_JUMP_DEST = 42;
    const SPELL_EFFECT_TELEPORT_UNITS_FACE_CASTER = 43;
    const SPELL_EFFECT_SKILL_STEP = 44;
    const SPELL_EFFECT_ADD_HONOR = 45;
    const SPELL_EFFECT_SPAWN = 46;
    const SPELL_EFFECT_TRADE_SKILL = 47;
    const SPELL_EFFECT_STEALTH = 48;
    const SPELL_EFFECT_DETECT = 49;
    const SPELL_EFFECT_TRANS_DOOR = 50;
    const SPELL_EFFECT_FORCE_CRITICAL_HIT = 51;
    const SPELL_EFFECT_GUARANTEE_HIT = 52;
    const SPELL_EFFECT_ENCHANT_ITEM = 53;
    const SPELL_EFFECT_ENCHANT_ITEM_TEMPORARY = 54;
    const SPELL_EFFECT_TAMECREATURE = 55;
    const SPELL_EFFECT_SUMMON_PET = 56;
    const SPELL_EFFECT_LEARN_PET_SPELL = 57;
    const SPELL_EFFECT_WEAPON_DAMAGE = 58;
    const SPELL_EFFECT_CREATE_RANDOM_ITEM = 59;
    const SPELL_EFFECT_PROFICIENCY = 60;
    const SPELL_EFFECT_SEND_EVENT = 61;
    const SPELL_EFFECT_POWER_BURN = 62;
    const SPELL_EFFECT_THREAT = 63;
    const SPELL_EFFECT_TRIGGER_SPELL = 64;
    const SPELL_EFFECT_APPLY_AREA_AURA_RAID = 65;
    const SPELL_EFFECT_CREATE_MANA_GEM = 66;
    const SPELL_EFFECT_HEAL_MAX_HEALTH = 67;
    const SPELL_EFFECT_INTERRUPT_CAST = 68;
    const SPELL_EFFECT_DISTRACT = 69;
    const SPELL_EFFECT_PULL = 70;
    const SPELL_EFFECT_PICKPOCKET = 71;
    const SPELL_EFFECT_ADD_FARSIGHT = 72;
    const SPELL_EFFECT_UNTRAIN_TALENTS = 73;
    const SPELL_EFFECT_APPLY_GLYPH = 74;
    const SPELL_EFFECT_HEAL_MECHANICAL = 75;
    const SPELL_EFFECT_SUMMON_OBJECT_WILD = 76;
    const SPELL_EFFECT_SCRIPT_EFFECT = 77;
    const SPELL_EFFECT_ATTACK = 78;
    const SPELL_EFFECT_SANCTUARY = 79;
    const SPELL_EFFECT_ADD_COMBO_POINTS = 80;
    const SPELL_EFFECT_CREATE_HOUSE = 81;
    const SPELL_EFFECT_BIND_SIGHT = 82;
    const SPELL_EFFECT_DUEL = 83;
    const SPELL_EFFECT_STUCK = 84;
    const SPELL_EFFECT_SUMMON_PLAYER = 85;
    const SPELL_EFFECT_ACTIVATE_OBJECT = 86;
    const SPELL_EFFECT_GAMEOBJECT_DAMAGE = 87;
    const SPELL_EFFECT_GAMEOBJECT_REPAIR = 88;
    const SPELL_EFFECT_GAMEOBJECT_SET_DESTRUCTION_STATE = 89;
    const SPELL_EFFECT_KILL_CREDIT = 90;
    const SPELL_EFFECT_THREAT_ALL = 91;
    const SPELL_EFFECT_ENCHANT_HELD_ITEM = 92;
    const SPELL_EFFECT_FORCE_DESELECT = 93;
    const SPELL_EFFECT_SELF_RESURRECT = 94;
    const SPELL_EFFECT_SKINNING = 95;
    const SPELL_EFFECT_CHARGE = 96;
    const SPELL_EFFECT_CAST_BUTTON = 97;
    const SPELL_EFFECT_KNOCK_BACK = 98;
    const SPELL_EFFECT_DISENCHANT = 99;
    const SPELL_EFFECT_INEBRIATE = 100;
    const SPELL_EFFECT_FEED_PET = 101;
    const SPELL_EFFECT_DISMISS_PET = 102;
    const SPELL_EFFECT_REPUTATION = 103;
    const SPELL_EFFECT_SUMMON_OBJECT_SLOT1 = 104;
    const SPELL_EFFECT_SUMMON_OBJECT_SLOT2 = 105;
    const SPELL_EFFECT_SUMMON_OBJECT_SLOT3 = 106;
    const SPELL_EFFECT_SUMMON_OBJECT_SLOT4 = 107;
    const SPELL_EFFECT_DISPEL_MECHANIC = 108;
    const SPELL_EFFECT_RESURRECT_PET = 109;
    const SPELL_EFFECT_DESTROY_ALL_TOTEMS = 110;
    const SPELL_EFFECT_DURABILITY_DAMAGE = 111;
    const SPELL_EFFECT_112 = 112;
    const SPELL_EFFECT_RESURRECT_NEW = 113;
    const SPELL_EFFECT_ATTACK_ME = 114;
    const SPELL_EFFECT_DURABILITY_DAMAGE_PCT = 115;
    const SPELL_EFFECT_SKIN_PLAYER_CORPSE = 116;
    const SPELL_EFFECT_SPIRIT_HEAL = 117;
    const SPELL_EFFECT_SKILL = 118;
    const SPELL_EFFECT_APPLY_AREA_AURA_PET = 119;
    const SPELL_EFFECT_TELEPORT_GRAVEYARD = 120;
    const SPELL_EFFECT_NORMALIZED_WEAPON_DMG = 121;
    const SPELL_EFFECT_122 = 122;
    const SPELL_EFFECT_SEND_TAXI = 123;
    const SPELL_EFFECT_PULL_TOWARDS = 124;
    const SPELL_EFFECT_MODIFY_THREAT_PERCENT = 125;
    const SPELL_EFFECT_STEAL_BENEFICIAL_BUFF = 126;
    const SPELL_EFFECT_PROSPECTING = 127;
    const SPELL_EFFECT_APPLY_AREA_AURA_FRIEND = 128;
    const SPELL_EFFECT_APPLY_AREA_AURA_ENEMY = 129;
    const SPELL_EFFECT_REDIRECT_THREAT = 130;
    const SPELL_EFFECT_PLAY_SOUND = 131;
    const SPELL_EFFECT_PLAY_MUSIC = 132;
    const SPELL_EFFECT_UNLEARN_SPECIALIZATION = 133;
    const SPELL_EFFECT_KILL_CREDIT2 = 134;
    const SPELL_EFFECT_CALL_PET = 135;
    const SPELL_EFFECT_HEAL_PCT = 136;
    const SPELL_EFFECT_ENERGIZE_PCT = 137;
    const SPELL_EFFECT_LEAP_BACK = 138;
    const SPELL_EFFECT_CLEAR_QUEST = 139;
    const SPELL_EFFECT_FORCE_CAST = 140;
    const SPELL_EFFECT_FORCE_CAST_WITH_VALUE = 141;
    const SPELL_EFFECT_TRIGGER_SPELL_WITH_VALUE = 142;
    const SPELL_EFFECT_APPLY_AREA_AURA_OWNER = 143;
    const SPELL_EFFECT_KNOCK_BACK_DEST = 144;
    const SPELL_EFFECT_PULL_TOWARDS_DEST = 145;
    const SPELL_EFFECT_ACTIVATE_RUNE = 146;
    const SPELL_EFFECT_QUEST_FAIL = 147;
    const SPELL_EFFECT_TRIGGER_MISSILE_SPELL_WITH_VALUE = 148;
    const SPELL_EFFECT_CHARGE_DEST = 149;
    const SPELL_EFFECT_QUEST_START = 150;
    const SPELL_EFFECT_TRIGGER_SPELL_2 = 151;
    const SPELL_EFFECT_SUMMON_RAF_FRIEND = 152;
    const SPELL_EFFECT_CREATE_TAMED_PET = 153;
    const SPELL_EFFECT_DISCOVER_TAXI = 154;
    const SPELL_EFFECT_TITAN_GRIP = 155;
    const SPELL_EFFECT_ENCHANT_ITEM_PRISMATIC = 156;
    const SPELL_EFFECT_CREATE_ITEM_2 = 157;
    const SPELL_EFFECT_MILLING = 158;
    const SPELL_EFFECT_ALLOW_RENAME_PET = 159;
    const SPELL_EFFECT_FORCE_CAST_2 = 160;
    const SPELL_EFFECT_TALENT_SPEC_COUNT = 161;
    const SPELL_EFFECT_TALENT_SPEC_SELECT = 162;
    const SPELL_EFFECT_163 = 163;
    const SPELL_EFFECT_REMOVE_AURA = 164;
    const TOTAL_SPELL_EFFECTS = 165;

    /**
     * Get the list of spell effects with their values.
     *
     * @return array
     */
    public static function getSpellEffectOptions()
    {
        return [
            self::SPELL_EFFECT_NONE => 'None',
            self::SPELL_EFFECT_INSTAKILL => 'Instakill',
            self::SPELL_EFFECT_SCHOOL_DAMAGE => 'School Damage',
            self::SPELL_EFFECT_DUMMY => 'Dummy',
            self::SPELL_EFFECT_PORTAL_TELEPORT => 'Portal Teleport',
            self::SPELL_EFFECT_TELEPORT_UNITS => 'Teleport Units',
            self::SPELL_EFFECT_APPLY_AURA => 'Apply Aura',
            self::SPELL_EFFECT_ENVIRONMENTAL_DAMAGE => 'Environmental Damage',
            self::SPELL_EFFECT_POWER_DRAIN => 'Power Drain',
            self::SPELL_EFFECT_HEALTH_LEECH => 'Health Leech',
            self::SPELL_EFFECT_HEAL => 'Heal',
            self::SPELL_EFFECT_BIND => 'Bind',
            self::SPELL_EFFECT_PORTAL => 'Portal',
            self::SPELL_EFFECT_RITUAL_BASE => 'Ritual Base',
            self::SPELL_EFFECT_RITUAL_SPECIALIZE => 'Ritual Specialize',
            self::SPELL_EFFECT_RITUAL_ACTIVATE_PORTAL => 'Ritual Activate Portal',
            self::SPELL_EFFECT_QUEST_COMPLETE => 'Quest Complete',
            self::SPELL_EFFECT_WEAPON_DAMAGE_NOSCHOOL => 'Weapon Damage No School',
            self::SPELL_EFFECT_RESURRECT => 'Resurrect',
            self::SPELL_EFFECT_ADD_EXTRA_ATTACKS => 'Add Extra Attacks',
            self::SPELL_EFFECT_DODGE => 'Dodge',
            self::SPELL_EFFECT_EVADE => 'Evade',
            self::SPELL_EFFECT_PARRY => 'Parry',
            self::SPELL_EFFECT_BLOCK => 'Block',
            self::SPELL_EFFECT_CREATE_ITEM => 'Create Item',
            self::SPELL_EFFECT_WEAPON => 'Weapon',
            self::SPELL_EFFECT_DEFENSE => 'Defense',
            self::SPELL_EFFECT_PERSISTENT_AREA_AURA => 'Persistent Area Aura',
            self::SPELL_EFFECT_SUMMON => 'Summon',
            self::SPELL_EFFECT_LEAP => 'Leap',
            self::SPELL_EFFECT_ENERGIZE => 'Energize',
            self::SPELL_EFFECT_WEAPON_PERCENT_DAMAGE => 'Weapon Percent Damage',
            self::SPELL_EFFECT_TRIGGER_MISSILE => 'Trigger Missile',
            self::SPELL_EFFECT_OPEN_LOCK => 'Open Lock',
            self::SPELL_EFFECT_SUMMON_CHANGE_ITEM => 'Summon Change Item',
            self::SPELL_EFFECT_APPLY_AREA_AURA_PARTY => 'Apply Area Aura Party',
            self::SPELL_EFFECT_LEARN_SPELL => 'Learn Spell',
            self::SPELL_EFFECT_SPELL_DEFENSE => 'Spell Defense',
            self::SPELL_EFFECT_DISPEL => 'Dispel',
            self::SPELL_EFFECT_LANGUAGE => 'Language',
            self::SPELL_EFFECT_DUAL_WIELD => 'Dual Wield',
            self::SPELL_EFFECT_JUMP => 'Jump',
            self::SPELL_EFFECT_JUMP_DEST => 'Jump Dest',
            self::SPELL_EFFECT_TELEPORT_UNITS_FACE_CASTER => 'Teleport Units Face Caster',
            self::SPELL_EFFECT_SKILL_STEP => 'Skill Step',
            self::SPELL_EFFECT_ADD_HONOR => 'Add Honor',
            self::SPELL_EFFECT_SPAWN => 'Spawn',
            self::SPELL_EFFECT_TRADE_SKILL => 'Trade Skill',
            self::SPELL_EFFECT_STEALTH => 'Stealth',
            self::SPELL_EFFECT_DETECT => 'Detect',
            self::SPELL_EFFECT_TRANS_DOOR => 'Trans Door',
            self::SPELL_EFFECT_FORCE_CRITICAL_HIT => 'Force Critical Hit',
            self::SPELL_EFFECT_GUARANTEE_HIT => 'Guarantee Hit',
            self::SPELL_EFFECT_ENCHANT_ITEM => 'Enchant Item',
            self::SPELL_EFFECT_ENCHANT_ITEM_TEMPORARY => 'Enchant Item Temporary',
            self::SPELL_EFFECT_TAMECREATURE => 'Tamecreature',
            self::SPELL_EFFECT_SUMMON_PET => 'Summon Pet',
            self::SPELL_EFFECT_LEARN_PET_SPELL => 'Learn Pet Spell',
            self::SPELL_EFFECT_WEAPON_DAMAGE => 'Weapon Damage',
            self::SPELL_EFFECT_CREATE_RANDOM_ITEM => 'Create Random Item',
            self::SPELL_EFFECT_PROFICIENCY => 'Proficiency',
            self::SPELL_EFFECT_SEND_EVENT => 'Send Event',
            self::SPELL_EFFECT_POWER_BURN => 'Power Burn',
            self::SPELL_EFFECT_THREAT => 'Threat',
            self::SPELL_EFFECT_TRIGGER_SPELL => 'Trigger Spell',
            self::SPELL_EFFECT_APPLY_AREA_AURA_RAID => 'Apply Area Aura Raid',
            self::SPELL_EFFECT_CREATE_MANA_GEM => 'Create Mana Gem',
            self::SPELL_EFFECT_HEAL_MAX_HEALTH => 'Heal Max Health',
            self::SPELL_EFFECT_INTERRUPT_CAST => 'Interrupt Cast',
            self::SPELL_EFFECT_DISTRACT => 'Distract',
            self::SPELL_EFFECT_PULL => 'Pull',
            self::SPELL_EFFECT_PICKPOCKET => 'Pickpocket',
            self::SPELL_EFFECT_ADD_FARSIGHT => 'Add Farsight',
            self::SPELL_EFFECT_UNTRAIN_TALENTS => 'Untrain Talents',
            self::SPELL_EFFECT_APPLY_GLYPH => 'Apply Glyph',
            self::SPELL_EFFECT_HEAL_MECHANICAL => 'Heal Mechanical',
            self::SPELL_EFFECT_SUMMON_OBJECT_WILD => 'Summon Object Wild',
            self::SPELL_EFFECT_SCRIPT_EFFECT => 'Script Effect',
            self::SPELL_EFFECT_ATTACK => 'Attack',
            self::SPELL_EFFECT_SANCTUARY => 'Sanctuary',
            self::SPELL_EFFECT_ADD_COMBO_POINTS => 'Add Combo Points',
            self::SPELL_EFFECT_CREATE_HOUSE => 'Create House',
            self::SPELL_EFFECT_BIND_SIGHT => 'Bind Sight',
            self::SPELL_EFFECT_DUEL => 'Duel',
            self::SPELL_EFFECT_STUCK => 'Stuck',
            self::SPELL_EFFECT_SUMMON_PLAYER => 'Summon Player',
            self::SPELL_EFFECT_ACTIVATE_OBJECT => 'Activate Object',
            self::SPELL_EFFECT_GAMEOBJECT_DAMAGE => 'Gameobject Damage',
            self::SPELL_EFFECT_GAMEOBJECT_REPAIR => 'Gameobject Repair',
            self::SPELL_EFFECT_GAMEOBJECT_SET_DESTRUCTION_STATE => 'Gameobject Set Destruction State',
            self::SPELL_EFFECT_KILL_CREDIT => 'Kill Credit',
            self::SPELL_EFFECT_THREAT_ALL => 'Threat All',
            self::SPELL_EFFECT_ENCHANT_HELD_ITEM => 'Enchant Held Item',
            self::SPELL_EFFECT_FORCE_DESELECT => 'Force Deselect',
            self::SPELL_EFFECT_SELF_RESURRECT => 'Self Resurrect',
            self::SPELL_EFFECT_SKINNING => 'Skinning',
            self::SPELL_EFFECT_CHARGE => 'Charge',
            self::SPELL_EFFECT_CAST_BUTTON => 'Cast Button',
            self::SPELL_EFFECT_KNOCK_BACK => 'Knock Back',
            self::SPELL_EFFECT_DISENCHANT => 'Disenchant',
            self::SPELL_EFFECT_INEBRIATE => 'Inebriate',
            self::SPELL_EFFECT_FEED_PET => 'Feed Pet',
            self::SPELL_EFFECT_DISMISS_PET => 'Dismiss Pet',
            self::SPELL_EFFECT_REPUTATION => 'Reputation',
            self::SPELL_EFFECT_SUMMON_OBJECT_SLOT1 => 'Summon Object Slot1',
            self::SPELL_EFFECT_SUMMON_OBJECT_SLOT2 => 'Summon Object Slot2',
            self::SPELL_EFFECT_SUMMON_OBJECT_SLOT3 => 'Summon Object Slot3',
            self::SPELL_EFFECT_SUMMON_OBJECT_SLOT4 => 'Summon Object Slot4',
            self::SPELL_EFFECT_DISPEL_MECHANIC => 'Dispel Mechanic',
            self::SPELL_EFFECT_RESURRECT_PET => 'Resurrect Pet',
            self::SPELL_EFFECT_DESTROY_ALL_TOTEMS => 'Destroy All Totems',
            self::SPELL_EFFECT_DURABILITY_DAMAGE => 'Durability Damage',
            self::SPELL_EFFECT_112 => 'Effect 112',
            self::SPELL_EFFECT_RESURRECT_NEW => 'Resurrect New',
            self::SPELL_EFFECT_ATTACK_ME => 'Attack Me',
            self::SPELL_EFFECT_DURABILITY_DAMAGE_PCT => 'Durability Damage Percentage',
            self::SPELL_EFFECT_SKIN_PLAYER_CORPSE => 'Skin Player Corpse',
            self::SPELL_EFFECT_SPIRIT_HEAL => 'Spirit Heal',
            self::SPELL_EFFECT_SKILL => 'Skill',
            self::SPELL_EFFECT_APPLY_AREA_AURA_PET => 'Apply Area Aura Pet',
            self::SPELL_EFFECT_TELEPORT_GRAVEYARD => 'Teleport Graveyard',
            self::SPELL_EFFECT_NORMALIZED_WEAPON_DMG => 'Normalized Weapon Damage',
            self::SPELL_EFFECT_122 => 'Effect 122',
            self::SPELL_EFFECT_SEND_TAXI => 'Send Taxi',
            self::SPELL_EFFECT_PULL_TOWARDS => 'Pull Towards',
            self::SPELL_EFFECT_MODIFY_THREAT_PERCENT => 'Modify Threat Percentage',
            self::SPELL_EFFECT_STEAL_BENEFICIAL_BUFF => 'Steal Beneficial Buff',
            self::SPELL_EFFECT_PROSPECTING => 'Prospecting',
            self::SPELL_EFFECT_APPLY_AREA_AURA_FRIEND => 'Apply Area Aura Friend',
            self::SPELL_EFFECT_APPLY_AREA_AURA_ENEMY => 'Apply Area Aura Enemy',
            self::SPELL_EFFECT_REDIRECT_THREAT => 'Redirect Threat',
            self::SPELL_EFFECT_PLAY_SOUND => 'Play Sound',
            self::SPELL_EFFECT_PLAY_MUSIC => 'Play Music',
            self::SPELL_EFFECT_UNLEARN_SPECIALIZATION => 'Unlearn Specialization',
            self::SPELL_EFFECT_KILL_CREDIT2 => 'Kill Credit 2',
            self::SPELL_EFFECT_CALL_PET => 'Call Pet',
            self::SPELL_EFFECT_HEAL_PCT => 'Heal Percentage',
            self::SPELL_EFFECT_ENERGIZE_PCT => 'Energize Percentage',
            self::SPELL_EFFECT_LEAP_BACK => 'Leap Back',
            self::SPELL_EFFECT_CLEAR_QUEST => 'Clear Quest',
            self::SPELL_EFFECT_FORCE_CAST => 'Force Cast',
            self::SPELL_EFFECT_FORCE_CAST_WITH_VALUE => 'Force Cast With Value',
            self::SPELL_EFFECT_TRIGGER_SPELL_WITH_VALUE => 'Trigger Spell With Value',
            self::SPELL_EFFECT_APPLY_AREA_AURA_OWNER => 'Apply Area Aura Owner',
            self::SPELL_EFFECT_KNOCK_BACK_DEST => 'Knock Back Destination',
            self::SPELL_EFFECT_PULL_TOWARDS_DEST => 'Pull Towards Destination',
            self::SPELL_EFFECT_ACTIVATE_RUNE => 'Activate Rune',
            self::SPELL_EFFECT_QUEST_FAIL => 'Quest Fail',
            self::SPELL_EFFECT_TRIGGER_MISSILE_SPELL_WITH_VALUE => 'Trigger Missile Spell With Value',
            self::SPELL_EFFECT_CHARGE_DEST => 'Charge Destination',
            self::SPELL_EFFECT_QUEST_START => 'Quest Start',
            self::SPELL_EFFECT_TRIGGER_SPELL_2 => 'Trigger Spell 2',
            self::SPELL_EFFECT_SUMMON_RAF_FRIEND => 'Summon RAF Friend',
            self::SPELL_EFFECT_CREATE_TAMED_PET => 'Create Tamed Pet',
            self::SPELL_EFFECT_DISCOVER_TAXI => 'Discover Taxi',
            self::SPELL_EFFECT_TITAN_GRIP => 'Titan Grip',
            self::SPELL_EFFECT_ENCHANT_ITEM_PRISMATIC => 'Enchant Item Prismatic',
            self::SPELL_EFFECT_CREATE_ITEM_2 => 'Create Item 2',
            self::SPELL_EFFECT_MILLING => 'Milling',
            self::SPELL_EFFECT_ALLOW_RENAME_PET => 'Allow Rename Pet',
            self::SPELL_EFFECT_FORCE_CAST_2 => 'Force Cast 2',
            self::SPELL_EFFECT_TALENT_SPEC_COUNT => 'Talent Spec Count',
            self::SPELL_EFFECT_TALENT_SPEC_SELECT => 'Talent Spec Select',
            self::SPELL_EFFECT_163 => 'Effect 163',
            self::SPELL_EFFECT_REMOVE_AURA => 'Remove Aura',
            self::TOTAL_SPELL_EFFECTS => 'Total Spell Effects',
        ];
    }

    /**
     * Get the human-readable spell effect name for a specific type.
     *
     * @param int $type
     * @return string|null
     */
    public static function getSpellEffectName($type)
    {
        $options = self::getSpellEffectOptions();
        return isset($options[$type]) ? $options[$type] : null;
    }
}
