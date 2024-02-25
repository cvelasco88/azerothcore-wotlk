<?php

namespace app\helpers\models;

use app\models\SpellDbc;

class SpellDbcView
{

    // PUBLIC STATIC METHODS

    public static function getDetailAttributes()
    {
        $attributeGroups = self::getAttributeGroups();
        $except = [];
        foreach ($attributeGroups as $groupName => $attributes) {
            $except = array_merge($except, $attributes);
        }
        $tmp = new SpellDbc();
        return array_keys($tmp->getAttributes(null, $except));
    }

    public static function getAttributeGroups()
    {
        $groups = [];
        $groups["AttributesExt"] = self::getAttributesExtAttributes();
        $groups["Recovery"] = self::getRecoveryAttributes();
        $groups["Aura"] = self::getAuraAttributes();
        $groups["Mana"] = self::getManaAttributes();
        $groups["Totem"] = self::getTotemAttributes();
        $groups["Reagent"] = self::getReagentAttributes();
        $groups["EquippedItem"] = self::getEquippedItemAttributes();
        $groups["Effect"] = self::getEffectAttributes();
        $groups["ImplicitTarget"] = self::getImplicitTargetAttributes();
        $groups["Translations"] = self::getTranslationAttributes();
        $groups["SpellClass"] = self::getSpellClassAttributes();
        $groups["Required"] = self::getRequiredAttributes();
        $groups["Interrupt"] = self::getInterruptAttributes();
        $groups["Other"] = self::getOtherAttributes();
        return $groups;
    }

    // PRIVATE STATIC METHODS

    private static function getAttributesExtAttributes()
    {
        return [
            'AttributesEx',
            'AttributesEx2',
            'AttributesEx3',
            'AttributesEx4',
            'AttributesEx5',
            'AttributesEx6',
            'AttributesEx7',
        ];
    }

    private static function getRecoveryAttributes()
    {
        return [
            'RecoveryTime',
            'CategoryRecoveryTime',
            'StartRecoveryCategory',
            'StartRecoveryTime',
        ];
    }

    private static function getAuraAttributes()
    {
        return [
            'CasterAuraState',
            'TargetAuraState',
            'ExcludeCasterAuraState',
            'ExcludeTargetAuraState',
            'CasterAuraSpell',
            'TargetAuraSpell',
            'ExcludeCasterAuraSpell',
            'ExcludeTargetAuraSpell',
            //
            //'AuraInterruptFlags',
            //
            'CumulativeAura',
            //
            'EffectAura_1',
            'EffectAura_2',
            'EffectAura_3',
            'EffectAuraPeriod_1',
            'EffectAuraPeriod_2',
            'EffectAuraPeriod_3',            
            //
            //'RequiredAuraVision',
        ];
    }

    private static function getManaAttributes()
    {
        return [
            'ManaCost',
            'ManaCostPerLevel',
            'ManaPerSecond',
            'ManaPerSecondPerLevel',
        ];
    }

    private static function getTotemAttributes()
    {
        return [
            'Totem_1',
            'Totem_2',
        ];
    }

    private static function getReagentAttributes()
    {
        return [
            'Reagent_1',
            'Reagent_2',
            'Reagent_3',
            'Reagent_4',
            'Reagent_5',
            'Reagent_6',
            'Reagent_7',
            'Reagent_8',
            //
            'ReagentCount_1',
            'ReagentCount_2',
            'ReagentCount_3',
            'ReagentCount_4',
            'ReagentCount_5',
            'ReagentCount_6',
            'ReagentCount_7',
            'ReagentCount_8',
        ];
    }

    private static function getEquippedItemAttributes()
    {
        return [
            'EquippedItemClass',
            'EquippedItemSubclass',
            'EquippedItemInvTypes',
        ];
    }
    private static function getEffectAttributes()
    {
        return [
            'Effect_1',
            'Effect_2',
            'Effect_3',
            'EffectDieSides_1',
            'EffectDieSides_2',
            'EffectDieSides_3',
            'EffectRealPointsPerLevel_1',
            'EffectRealPointsPerLevel_2',
            'EffectRealPointsPerLevel_3',
            'EffectBasePoints_1',
            'EffectBasePoints_2',
            'EffectBasePoints_3',
            'EffectMechanic_1',
            'EffectMechanic_2',
            'EffectMechanic_3',
            //
            'EffectRadiusIndex_1',
            'EffectRadiusIndex_2',
            'EffectRadiusIndex_3',
            // 'EffectAura_1',
            // 'EffectAura_2',
            // 'EffectAura_3',
            // 'EffectAuraPeriod_1',
            // 'EffectAuraPeriod_2',
            // 'EffectAuraPeriod_3',
            'EffectMultipleValue_1',
            'EffectMultipleValue_2',
            'EffectMultipleValue_3',
            'EffectChainTargets_1',
            'EffectChainTargets_2',
            'EffectChainTargets_3',
            'EffectItemType_1',
            'EffectItemType_2',
            'EffectItemType_3',
            'EffectMiscValue_1',
            'EffectMiscValue_2',
            'EffectMiscValue_3',
            'EffectMiscValueB_1',
            'EffectMiscValueB_2',
            'EffectMiscValueB_3',
            'EffectTriggerSpell_1',
            'EffectTriggerSpell_2',
            'EffectTriggerSpell_3',
            'EffectPointsPerCombo_1',
            'EffectPointsPerCombo_2',
            'EffectPointsPerCombo_3',
            'EffectSpellClassMaskA_1',
            'EffectSpellClassMaskA_2',
            'EffectSpellClassMaskA_3',
            'EffectSpellClassMaskB_1',
            'EffectSpellClassMaskB_2',
            'EffectSpellClassMaskB_3',
            'EffectSpellClassMaskC_1',
            'EffectSpellClassMaskC_2',
            'EffectSpellClassMaskC_3',
            //
            'EffectChainAmplitude_1',
            'EffectChainAmplitude_2',
            'EffectChainAmplitude_3',
            //
            'EffectBonusMultiplier_1', // 320_41
            'EffectBonusMultiplier_2',
            'EffectBonusMultiplier_3',

        ];
    }
    private static function getImplicitTargetAttributes()
    {
        return [
            'ImplicitTargetA_1',
            'ImplicitTargetA_2',
            'ImplicitTargetA_3',
            'ImplicitTargetB_1',
            'ImplicitTargetB_2',
            'ImplicitTargetB_3',
        ];
    }
    private static function getTranslationAttributes()
    {
        return [
            'Name_Lang_enUS',
            'Name_Lang_enGB',
            'Name_Lang_koKR',
            'Name_Lang_frFR',
            'Name_Lang_deDE',
            'Name_Lang_enCN',
            'Name_Lang_zhCN',
            'Name_Lang_enTW',
            'Name_Lang_zhTW',
            'Name_Lang_esES',
            'Name_Lang_esMX',
            'Name_Lang_ruRU',
            'Name_Lang_ptPT',
            'Name_Lang_ptBR',
            'Name_Lang_itIT',
            'Name_Lang_Unk',
            'Name_Lang_Mask',
            'NameSubtext_Lang_enUS',
            'NameSubtext_Lang_enGB',
            'NameSubtext_Lang_koKR',
            'NameSubtext_Lang_frFR',
            'NameSubtext_Lang_deDE',
            'NameSubtext_Lang_enCN',
            'NameSubtext_Lang_zhCN',
            'NameSubtext_Lang_enTW',
            'NameSubtext_Lang_zhTW',
            'NameSubtext_Lang_esES',
            'NameSubtext_Lang_esMX',
            'NameSubtext_Lang_ruRU',
            'NameSubtext_Lang_ptPT',
            'NameSubtext_Lang_ptBR',
            'NameSubtext_Lang_itIT',
            'NameSubtext_Lang_Unk',
            'NameSubtext_Lang_Mask',
            'Description_Lang_enUS',
            'Description_Lang_enGB',
            'Description_Lang_koKR',
            'Description_Lang_frFR',
            'Description_Lang_deDE',
            'Description_Lang_enCN',
            'Description_Lang_zhCN',
            'Description_Lang_enTW',
            'Description_Lang_zhTW',
            'Description_Lang_esES',
            'Description_Lang_esMX',
            'Description_Lang_ruRU',
            'Description_Lang_ptPT',
            'Description_Lang_ptBR',
            'Description_Lang_itIT',
            'Description_Lang_Unk',
            'Description_Lang_Mask',
            //
            'AuraDescription_Lang_enUS',
            'AuraDescription_Lang_enGB',
            'AuraDescription_Lang_koKR',
            'AuraDescription_Lang_frFR',
            'AuraDescription_Lang_deDE',
            'AuraDescription_Lang_enCN',
            'AuraDescription_Lang_zhCN',
            'AuraDescription_Lang_enTW',
            'AuraDescription_Lang_zhTW',
            'AuraDescription_Lang_esES',
            'AuraDescription_Lang_esMX',
            'AuraDescription_Lang_ruRU',
            'AuraDescription_Lang_ptPT',
            'AuraDescription_Lang_ptBR',
            'AuraDescription_Lang_itIT',
            'AuraDescription_Lang_Unk',
            'AuraDescription_Lang_Mask',
        ];
    }
    private static function getSpellClassAttributes()
    {
        return [
            'SpellClassSet',
            'SpellClassMask_1',
            'SpellClassMask_2',
            'SpellClassMask_3',
        ];
    }

    private static function getRequiredAttributes()
    {
        return [
            'RequiredAuraVision',
            'RequiredTotemCategoryID_1',
            'RequiredTotemCategoryID_2',
            'RequiredAreasID',
        ];
    }

    private static function getInterruptAttributes()
    {
        return [
            'InterruptFlags',
            'AuraInterruptFlags',
            'ChannelInterruptFlags',
        ];
    }

    private static function getOtherAttributes()
    {
        return [
            'ShapeshiftMask',
            'unk_320_2',
            'ShapeshiftExclude',
            'unk_320_3',
            'CastingTimeIndex',
            'ProcTypeMask',
            'ProcChance',
            'ProcCharges',
            'ModalNextSpell',
            'SpellVisualID_1',
            'SpellVisualID_2',
            'SpellIconID',
            'ActiveIconID',
            'ManaCostPct',
            'DefenseType',
            'PreventionType',
            'StanceBarOrder',
            'MinFactionID',
            'MinReputation',
            'SpellMissileID',
            'PowerDisplayID',
            'SpellDescriptionVariableID',
        ];
    }
}