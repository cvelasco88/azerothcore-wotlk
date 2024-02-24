<?php

namespace app\models\traits\spell;

trait SpellAttrsEx5Trait
{
    const SPELL_ATTR5_NONE = 0x00000000;
    const SPELL_ATTR5_ALLOW_ACTIONS_DURING_CHANNEL = 0x00000001;
    const SPELL_ATTR5_NO_REAGENT_COST_WITH_AURA = 0x00000002;
    const SPELL_ATTR5_REMOVE_ENTERING_ARENA = 0x00000004;
    const SPELL_ATTR5_ALLOW_WHILE_STUNNED = 0x00000008;
    const SPELL_ATTR5_TRIGGERS_CHANNELING = 0x00000010;
    const SPELL_ATTR5_LIMIT_N = 0x00000020;
    const SPELL_ATTR5_IGNORE_AREA_EFFECT_PVP_CHECK = 0x00000040;
    const SPELL_ATTR5_NOT_ON_PLAYER = 0x00000080;
    const SPELL_ATTR5_NOT_ON_PLAYER_CONTROLLED_NPC = 0x00000100;
    const SPELL_ATTR5_EXTRA_INITIAL_PERIOD = 0x00000200;
    const SPELL_ATTR5_DO_NOT_DISPLAY_DURATION = 0x00000400;
    const SPELL_ATTR5_IMPLIED_TARGETING = 0x00000800;
    const SPELL_ATTR5_MELEE_CHAIN_TARGETING = 0x00001000;
    const SPELL_ATTR5_SPELL_HASTE_AFFECTS_PERIODIC = 0x00002000;
    const SPELL_ATTR5_NOT_AVAILABLE_WHILE_CHARMED = 0x00004000;
    const SPELL_ATTR5_TREAT_AS_AREA_EFFECT = 0x00008000;
    const SPELL_ATTR5_AURA_AFFECTS_NOT_JUST_REQ_EQUIPPED_ITEM = 0x00010000;
    const SPELL_ATTR5_ALLOW_WHILE_FLEEING = 0x00020000;
    const SPELL_ATTR5_ALLOW_WHILE_CONFUSED = 0x00040000;
    const SPELL_ATTR5_AI_DOESNT_FACE_TARGET = 0x00080000;
    const SPELL_ATTR5_DO_NOT_ATTEMPT_A_PET_RESUMMON_WHEN_DISMOUNTING = 0x00100000;
    const SPELL_ATTR5_IGNORE_TARGET_REQUIREMENTS = 0x00200000;
    const SPELL_ATTR5_NOT_ON_TRIVIAL = 0x00400000;
    const SPELL_ATTR5_NO_PARTIAL_RESISTS = 0x00800000;
    const SPELL_ATTR5_IGNORE_CASTER_REQUIREMENTS = 0x01000000;
    const SPELL_ATTR5_ALWAYS_LINE_OF_SIGHT = 0x02000000;
    const SPELL_ATTR5_ALWAYS_AOE_LINE_OF_SIGHT = 0x04000000;
    const SPELL_ATTR5_NO_CASTER_AURA_ICON = 0x08000000;
    const SPELL_ATTR5_NO_TARGET_AURA_ICON = 0x10000000;
    const SPELL_ATTR5_AURA_UNIQUE_PER_CASTER = 0x20000000;
    const SPELL_ATTR5_ALWAYS_SHOW_GROUND_TEXTURE = 0x40000000;
    const SPELL_ATTR5_ADD_MELEE_HIT_RATING = 0x80000000;

    /**
     * Get the list of spell attributes with their names.
     *
     * @return array
     */
    public static function getSpellAttributesEx5Options()
    {
        return [
            self::SPELL_ATTR5_NONE => 'NONE',
            self::SPELL_ATTR5_ALLOW_ACTIONS_DURING_CHANNEL => 'ALLOW_ACTIONS_DURING_CHANNEL',
            self::SPELL_ATTR5_NO_REAGENT_COST_WITH_AURA => 'NO_REAGENT_COST_WITH_AURA',
            self::SPELL_ATTR5_REMOVE_ENTERING_ARENA => 'REMOVE_ENTERING_ARENA',
            self::SPELL_ATTR5_ALLOW_WHILE_STUNNED => 'ALLOW_WHILE_STUNNED',
            self::SPELL_ATTR5_TRIGGERS_CHANNELING => 'TRIGGERS_CHANNELING',
            self::SPELL_ATTR5_LIMIT_N => 'LIMIT_N',
            self::SPELL_ATTR5_IGNORE_AREA_EFFECT_PVP_CHECK => 'IGNORE_AREA_EFFECT_PVP_CHECK',
            self::SPELL_ATTR5_NOT_ON_PLAYER => 'NOT_ON_PLAYER',
            self::SPELL_ATTR5_NOT_ON_PLAYER_CONTROLLED_NPC => 'NOT_ON_PLAYER_CONTROLLED_NPC',
            self::SPELL_ATTR5_EXTRA_INITIAL_PERIOD => 'EXTRA_INITIAL_PERIOD',
            self::SPELL_ATTR5_DO_NOT_DISPLAY_DURATION => 'DO_NOT_DISPLAY_DURATION',
            self::SPELL_ATTR5_IMPLIED_TARGETING => 'IMPLIED_TARGETING',
            self::SPELL_ATTR5_MELEE_CHAIN_TARGETING => 'MELEE_CHAIN_TARGETING',
            self::SPELL_ATTR5_SPELL_HASTE_AFFECTS_PERIODIC => 'SPELL_HASTE_AFFECTS_PERIODIC',
            self::SPELL_ATTR5_NOT_AVAILABLE_WHILE_CHARMED => 'NOT_AVAILABLE_WHILE_CHARMED',
            self::SPELL_ATTR5_TREAT_AS_AREA_EFFECT => 'TREAT_AS_AREA_EFFECT',
            self::SPELL_ATTR5_AURA_AFFECTS_NOT_JUST_REQ_EQUIPPED_ITEM => 'AURA_AFFECTS_NOT_JUST_REQ_EQUIPPED_ITEM',
            self::SPELL_ATTR5_ALLOW_WHILE_FLEEING => 'ALLOW_WHILE_FLEEING',
            self::SPELL_ATTR5_ALLOW_WHILE_CONFUSED => 'ALLOW_WHILE_CONFUSED',
            self::SPELL_ATTR5_AI_DOESNT_FACE_TARGET => 'AI_DOESNT_FACE_TARGET',
            self::SPELL_ATTR5_DO_NOT_ATTEMPT_A_PET_RESUMMON_WHEN_DISMOUNTING => 'DO_NOT_ATTEMPT_A_PET_RESUMMON_WHEN_DISMOUNTING',
            self::SPELL_ATTR5_IGNORE_TARGET_REQUIREMENTS => 'IGNORE_TARGET_REQUIREMENTS',
            self::SPELL_ATTR5_NOT_ON_TRIVIAL => 'NOT_ON_TRIVIAL',
            self::SPELL_ATTR5_NO_PARTIAL_RESISTS => 'NO_PARTIAL_RESISTS',
            self::SPELL_ATTR5_IGNORE_CASTER_REQUIREMENTS => 'IGNORE_CASTER_REQUIREMENTS',
            self::SPELL_ATTR5_ALWAYS_LINE_OF_SIGHT => 'ALWAYS_LINE_OF_SIGHT',
            self::SPELL_ATTR5_ALWAYS_AOE_LINE_OF_SIGHT => 'ALWAYS_AOE_LINE_OF_SIGHT',
            self::SPELL_ATTR5_NO_CASTER_AURA_ICON => 'NO_CASTER_AURA_ICON',
            self::SPELL_ATTR5_NO_TARGET_AURA_ICON => 'NO_TARGET_AURA_ICON',
            self::SPELL_ATTR5_AURA_UNIQUE_PER_CASTER => 'AURA_UNIQUE_PER_CASTER',
            self::SPELL_ATTR5_ALWAYS_SHOW_GROUND_TEXTURE => 'ALWAYS_SHOW_GROUND_TEXTURE',
            self::SPELL_ATTR5_ADD_MELEE_HIT_RATING => 'ADD_MELEE_HIT_RATING',
            // Add more options as needed
        ];
    }

    /**
     * Get the name for a specific spell attribute.
     *
     * @param int $attribute
     * @return string|null
     */
    public static function getSpellAttributesEx5Name($attribute)
    {
        $spellAttributes = self::getSpellAttributesEx5Options();
        return isset($spellAttributes[$attribute]) ? $spellAttributes[$attribute] : null;
    }
}
