<?php

namespace app\models;

use app\helpers\DbcView;
use app\helpers\DbcWriter;
use app\models\base\DbcActiveRecord;
use app\models\traits\common\LangTrait;
use app\models\traits\spell\DispelTypeTrait;
use app\models\traits\spell\EquippedItemClassTrait;
use app\models\traits\spell\EquippedItemInvTypesTrait;
use app\models\traits\spell\EquippedItemSubclassTrait;
use app\models\traits\spell\InterruptFlagsTrait;
use app\models\traits\spell\PowerTypeTrait;
use app\models\traits\spell\SchoolMaskTrait;
use app\models\traits\spell\ShapeshiftMaskTrait;
use app\models\traits\spell\SpellAttrsTrait;
use app\models\traits\spell\SpellAttrsEx1Trait;
use app\models\traits\spell\SpellAttrsEx2Trait;
use app\models\traits\spell\SpellAttrsEx3Trait;
use app\models\traits\spell\SpellAttrsEx4Trait;
use app\models\traits\spell\SpellAttrsEx5Trait;
use app\models\traits\spell\SpellAttrsEx6Trait;
use app\models\traits\spell\SpellAttrsEx7Trait;
use app\models\traits\spell\MechanicTrait;
use app\models\traits\spell\SpellAuraInterruptFlagsTrait;
use app\models\traits\spell\SpellCategoryTrait;
use app\models\traits\spell\SpellClassMaskTrait;
use app\models\traits\spell\SpellClassSetTrait;
use app\models\traits\spell\SpellDefenseTypeTrait;
use app\models\traits\spell\SpellEffectImplicitTargetTrait;
use app\models\traits\spell\SpellEffectsTrait;
use app\models\traits\spell\SpellPreventionTypeTrait;
use app\models\traits\spell\SpellProcFlagsTrait;
use app\models\traits\spell\TargetFlagTrait;
use app\models\traits\spell\TargetCreatureTypeTrait;
use Yii;

/**
 * This is the model class for table "spell_dbc".
 * @see https://wowdev.wiki/DB/Spell
 *
 * @property int $ID
 * @property int $Category
 * @property int $DispelType
 * @property int $Mechanic
 * @property int $Attributes
 * @property int $AttributesEx
 * @property int $AttributesEx2
 * @property int $AttributesEx3
 * @property int $AttributesEx4
 * @property int $AttributesEx5
 * @property int $AttributesEx6
 * @property int $AttributesEx7
 * @property int $ShapeshiftMask
 * @property int $unk_320_2
 * @property int $ShapeshiftExclude
 * @property int $unk_320_3
 * @property int $Targets
 * @property int $TargetCreatureType
 * @property int $RequiresSpellFocus
 * @property int $FacingCasterFlags
 * @property int $CasterAuraState
 * @property int $TargetAuraState
 * @property int $ExcludeCasterAuraState
 * @property int $ExcludeTargetAuraState
 * @property int $CasterAuraSpell
 * @property int $TargetAuraSpell
 * @property int $ExcludeCasterAuraSpell
 * @property int $ExcludeTargetAuraSpell
 * @property int $CastingTimeIndex
 * @property int $RecoveryTime
 * @property int $CategoryRecoveryTime
 * @property int $InterruptFlags
 * @property int $AuraInterruptFlags
 * @property int $ChannelInterruptFlags
 * @property int $ProcTypeMask
 * @property int $ProcChance
 * @property int $ProcCharges
 * @property int $MaxLevel
 * @property int $BaseLevel
 * @property int $SpellLevel
 * @property int $DurationIndex
 * @property int $PowerType
 * @property int $ManaCost
 * @property int $ManaCostPerLevel
 * @property int $ManaPerSecond
 * @property int $ManaPerSecondPerLevel
 * @property int $RangeIndex
 * @property float $Speed
 * @property int $ModalNextSpell
 * @property int $CumulativeAura
 * @property int $Totem_1
 * @property int $Totem_2
 * @property int $Reagent_1
 * @property int $Reagent_2
 * @property int $Reagent_3
 * @property int $Reagent_4
 * @property int $Reagent_5
 * @property int $Reagent_6
 * @property int $Reagent_7
 * @property int $Reagent_8
 * @property int $ReagentCount_1
 * @property int $ReagentCount_2
 * @property int $ReagentCount_3
 * @property int $ReagentCount_4
 * @property int $ReagentCount_5
 * @property int $ReagentCount_6
 * @property int $ReagentCount_7
 * @property int $ReagentCount_8
 * @property int $EquippedItemClass
 * @property int $EquippedItemSubclass
 * @property int $EquippedItemInvTypes
 * @property int $Effect_1
 * @property int $Effect_2
 * @property int $Effect_3
 * @property int $EffectDieSides_1
 * @property int $EffectDieSides_2
 * @property int $EffectDieSides_3
 * @property float $EffectRealPointsPerLevel_1
 * @property float $EffectRealPointsPerLevel_2
 * @property float $EffectRealPointsPerLevel_3
 * @property int $EffectBasePoints_1
 * @property int $EffectBasePoints_2
 * @property int $EffectBasePoints_3
 * @property int $EffectMechanic_1
 * @property int $EffectMechanic_2
 * @property int $EffectMechanic_3
 * @property int $ImplicitTargetA_1
 * @property int $ImplicitTargetA_2
 * @property int $ImplicitTargetA_3
 * @property int $ImplicitTargetB_1
 * @property int $ImplicitTargetB_2
 * @property int $ImplicitTargetB_3
 * @property int $EffectRadiusIndex_1
 * @property int $EffectRadiusIndex_2
 * @property int $EffectRadiusIndex_3
 * @property int $EffectAura_1
 * @property int $EffectAura_2
 * @property int $EffectAura_3
 * @property int $EffectAuraPeriod_1
 * @property int $EffectAuraPeriod_2
 * @property int $EffectAuraPeriod_3
 * @property float $EffectMultipleValue_1
 * @property float $EffectMultipleValue_2
 * @property float $EffectMultipleValue_3
 * @property int $EffectChainTargets_1
 * @property int $EffectChainTargets_2
 * @property int $EffectChainTargets_3
 * @property int $EffectItemType_1
 * @property int $EffectItemType_2
 * @property int $EffectItemType_3
 * @property int $EffectMiscValue_1
 * @property int $EffectMiscValue_2
 * @property int $EffectMiscValue_3
 * @property int $EffectMiscValueB_1
 * @property int $EffectMiscValueB_2
 * @property int $EffectMiscValueB_3
 * @property int $EffectTriggerSpell_1
 * @property int $EffectTriggerSpell_2
 * @property int $EffectTriggerSpell_3
 * @property float $EffectPointsPerCombo_1
 * @property float $EffectPointsPerCombo_2
 * @property float $EffectPointsPerCombo_3
 * @property int $EffectSpellClassMaskA_1
 * @property int $EffectSpellClassMaskA_2
 * @property int $EffectSpellClassMaskA_3
 * @property int $EffectSpellClassMaskB_1
 * @property int $EffectSpellClassMaskB_2
 * @property int $EffectSpellClassMaskB_3
 * @property int $EffectSpellClassMaskC_1
 * @property int $EffectSpellClassMaskC_2
 * @property int $EffectSpellClassMaskC_3
 * @property int $SpellVisualID_1
 * @property int $SpellVisualID_2
 * @property int $SpellIconID
 * @property int $ActiveIconID
 * @property int $SpellPriority
 * @property string|null $Name_Lang_enUS
 * @property string|null $Name_Lang_enGB
 * @property string|null $Name_Lang_koKR
 * @property string|null $Name_Lang_frFR
 * @property string|null $Name_Lang_deDE
 * @property string|null $Name_Lang_enCN
 * @property string|null $Name_Lang_zhCN
 * @property string|null $Name_Lang_enTW
 * @property string|null $Name_Lang_zhTW
 * @property string|null $Name_Lang_esES
 * @property string|null $Name_Lang_esMX
 * @property string|null $Name_Lang_ruRU
 * @property string|null $Name_Lang_ptPT
 * @property string|null $Name_Lang_ptBR
 * @property string|null $Name_Lang_itIT
 * @property string|null $Name_Lang_Unk
 * @property int $Name_Lang_Mask
 * @property string|null $NameSubtext_Lang_enUS
 * @property string|null $NameSubtext_Lang_enGB
 * @property string|null $NameSubtext_Lang_koKR
 * @property string|null $NameSubtext_Lang_frFR
 * @property string|null $NameSubtext_Lang_deDE
 * @property string|null $NameSubtext_Lang_enCN
 * @property string|null $NameSubtext_Lang_zhCN
 * @property string|null $NameSubtext_Lang_enTW
 * @property string|null $NameSubtext_Lang_zhTW
 * @property string|null $NameSubtext_Lang_esES
 * @property string|null $NameSubtext_Lang_esMX
 * @property string|null $NameSubtext_Lang_ruRU
 * @property string|null $NameSubtext_Lang_ptPT
 * @property string|null $NameSubtext_Lang_ptBR
 * @property string|null $NameSubtext_Lang_itIT
 * @property string|null $NameSubtext_Lang_Unk
 * @property int $NameSubtext_Lang_Mask
 * @property string|null $Description_Lang_enUS
 * @property string|null $Description_Lang_enGB
 * @property string|null $Description_Lang_koKR
 * @property string|null $Description_Lang_frFR
 * @property string|null $Description_Lang_deDE
 * @property string|null $Description_Lang_enCN
 * @property string|null $Description_Lang_zhCN
 * @property string|null $Description_Lang_enTW
 * @property string|null $Description_Lang_zhTW
 * @property string|null $Description_Lang_esES
 * @property string|null $Description_Lang_esMX
 * @property string|null $Description_Lang_ruRU
 * @property string|null $Description_Lang_ptPT
 * @property string|null $Description_Lang_ptBR
 * @property string|null $Description_Lang_itIT
 * @property string|null $Description_Lang_Unk
 * @property int $Description_Lang_Mask
 * @property string|null $AuraDescription_Lang_enUS
 * @property string|null $AuraDescription_Lang_enGB
 * @property string|null $AuraDescription_Lang_koKR
 * @property string|null $AuraDescription_Lang_frFR
 * @property string|null $AuraDescription_Lang_deDE
 * @property string|null $AuraDescription_Lang_enCN
 * @property string|null $AuraDescription_Lang_zhCN
 * @property string|null $AuraDescription_Lang_enTW
 * @property string|null $AuraDescription_Lang_zhTW
 * @property string|null $AuraDescription_Lang_esES
 * @property string|null $AuraDescription_Lang_esMX
 * @property string|null $AuraDescription_Lang_ruRU
 * @property string|null $AuraDescription_Lang_ptPT
 * @property string|null $AuraDescription_Lang_ptBR
 * @property string|null $AuraDescription_Lang_itIT
 * @property string|null $AuraDescription_Lang_Unk
 * @property int $AuraDescription_Lang_Mask
 * @property int $ManaCostPct
 * @property int $StartRecoveryCategory
 * @property int $StartRecoveryTime
 * @property int $MaxTargetLevel
 * @property int $SpellClassSet
 * @property int $SpellClassMask_1
 * @property int $SpellClassMask_2
 * @property int $SpellClassMask_3
 * @property int $MaxTargets
 * @property int $DefenseType
 * @property int $PreventionType
 * @property int $StanceBarOrder
 * @property float $EffectChainAmplitude_1
 * @property float $EffectChainAmplitude_2
 * @property float $EffectChainAmplitude_3
 * @property int $MinFactionID
 * @property int $MinReputation
 * @property int $RequiredAuraVision
 * @property int $RequiredTotemCategoryID_1
 * @property int $RequiredTotemCategoryID_2
 * @property int $RequiredAreasID
 * @property int $SchoolMask
 * @property int $RuneCostID
 * @property int $SpellMissileID
 * @property int $PowerDisplayID
 * @property float $EffectBonusMultiplier_1
 * @property float $EffectBonusMultiplier_2
 * @property float $EffectBonusMultiplier_3
 * @property int $SpellDescriptionVariableID
 * @property int $SpellDifficultyID
 */
class SpellDbc extends DbcActiveRecord
{
    use PowerTypeTrait, DispelTypeTrait, TargetFlagTrait, TargetCreatureTypeTrait,
        SpellAttrsTrait, SpellAttrsEx1Trait, SpellAttrsEx2Trait, SpellAttrsEx3Trait, SpellAttrsEx4Trait,
        SpellAttrsEx5Trait, SpellAttrsEx6Trait, SpellAttrsEx7Trait, MechanicTrait, ShapeshiftMaskTrait, InterruptFlagsTrait,
        SchoolMaskTrait, LangTrait, EquippedItemClassTrait, EquippedItemSubclassTrait, EquippedItemInvTypesTrait, SpellClassSetTrait,
        SpellCategoryTrait, SpellDefenseTypeTrait, SpellPreventionTypeTrait, SpellEffectsTrait, SpellAuraInterruptFlagsTrait, SpellEffectImplicitTargetTrait,
        SpellProcFlagsTrait, SpellClassMaskTrait;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spell_dbc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // Apply filters
            [
                ['Name_Lang_enUS', 'Name_Lang_enGB', 'Name_Lang_koKR', 'Name_Lang_frFR', 'Name_Lang_deDE', 'Name_Lang_enCN', 'Name_Lang_zhCN', 'Name_Lang_enTW', 'Name_Lang_zhTW', 'Name_Lang_esES', 'Name_Lang_esMX', 'Name_Lang_ruRU', 'Name_Lang_ptPT', 'Name_Lang_ptBR', 'Name_Lang_itIT', 'Name_Lang_Unk', 'NameSubtext_Lang_enUS', 'NameSubtext_Lang_enGB', 'NameSubtext_Lang_koKR', 'NameSubtext_Lang_frFR', 'NameSubtext_Lang_deDE', 'NameSubtext_Lang_enCN', 'NameSubtext_Lang_zhCN', 'NameSubtext_Lang_enTW', 'NameSubtext_Lang_zhTW', 'NameSubtext_Lang_esES', 'NameSubtext_Lang_esMX', 'NameSubtext_Lang_ruRU', 'NameSubtext_Lang_ptPT', 'NameSubtext_Lang_ptBR', 'NameSubtext_Lang_itIT', 'NameSubtext_Lang_Unk'],
                'filter',
                'filter' => function ($value) {
                    return $value !== null ? mb_substr(trim($value), 0, 100, 'UTF-8') : null;
                }
            ],
            [
                ['AuraDescription_Lang_enUS', 'AuraDescription_Lang_enGB', 'AuraDescription_Lang_koKR', 'AuraDescription_Lang_frFR', 'AuraDescription_Lang_deDE', 'AuraDescription_Lang_enCN', 'AuraDescription_Lang_zhCN', 'AuraDescription_Lang_enTW', 'AuraDescription_Lang_zhTW', 'AuraDescription_Lang_esES', 'AuraDescription_Lang_esMX', 'AuraDescription_Lang_ruRU', 'AuraDescription_Lang_ptPT', 'AuraDescription_Lang_ptBR', 'AuraDescription_Lang_itIT'],
                'filter',
                'filter' => function ($value) {
                    return $value !== null ? mb_substr(trim($value), 0, 500, 'UTF-8') : null;
                }
            ],
            [['ID'], 'required'],
            [['ID', 'Category', 'DispelType', 'Mechanic', 'Attributes', 'AttributesEx', 'AttributesEx2', 'AttributesEx3', 'AttributesEx4', 'AttributesEx5', 'AttributesEx6', 'AttributesEx7', 'ShapeshiftMask', 'unk_320_2', 'ShapeshiftExclude', 'unk_320_3', 'Targets', 'TargetCreatureType', 'RequiresSpellFocus', 'FacingCasterFlags', 'CasterAuraState', 'TargetAuraState', 'ExcludeCasterAuraState', 'ExcludeTargetAuraState', 'CasterAuraSpell', 'TargetAuraSpell', 'ExcludeCasterAuraSpell', 'ExcludeTargetAuraSpell', 'CastingTimeIndex', 'RecoveryTime', 'CategoryRecoveryTime', 'InterruptFlags', 'AuraInterruptFlags', 'ChannelInterruptFlags', 'ProcTypeMask', 'ProcChance', 'ProcCharges', 'MaxLevel', 'BaseLevel', 'SpellLevel', 'DurationIndex', 'PowerType', 'ManaCost', 'ManaCostPerLevel', 'ManaPerSecond', 'ManaPerSecondPerLevel', 'RangeIndex', 'ModalNextSpell', 'CumulativeAura', 'Totem_1', 'Totem_2', 'Reagent_1', 'Reagent_2', 'Reagent_3', 'Reagent_4', 'Reagent_5', 'Reagent_6', 'Reagent_7', 'Reagent_8', 'ReagentCount_1', 'ReagentCount_2', 'ReagentCount_3', 'ReagentCount_4', 'ReagentCount_5', 'ReagentCount_6', 'ReagentCount_7', 'ReagentCount_8', 'EquippedItemClass', 'EquippedItemSubclass', 'EquippedItemInvTypes', 'Effect_1', 'Effect_2', 'Effect_3', 'EffectDieSides_1', 'EffectDieSides_2', 'EffectDieSides_3', 'EffectBasePoints_1', 'EffectBasePoints_2', 'EffectBasePoints_3', 'EffectMechanic_1', 'EffectMechanic_2', 'EffectMechanic_3', 'ImplicitTargetA_1', 'ImplicitTargetA_2', 'ImplicitTargetA_3', 'ImplicitTargetB_1', 'ImplicitTargetB_2', 'ImplicitTargetB_3', 'EffectRadiusIndex_1', 'EffectRadiusIndex_2', 'EffectRadiusIndex_3', 'EffectAura_1', 'EffectAura_2', 'EffectAura_3', 'EffectAuraPeriod_1', 'EffectAuraPeriod_2', 'EffectAuraPeriod_3', 'EffectChainTargets_1', 'EffectChainTargets_2', 'EffectChainTargets_3', 'EffectItemType_1', 'EffectItemType_2', 'EffectItemType_3', 'EffectMiscValue_1', 'EffectMiscValue_2', 'EffectMiscValue_3', 'EffectMiscValueB_1', 'EffectMiscValueB_2', 'EffectMiscValueB_3', 'EffectTriggerSpell_1', 'EffectTriggerSpell_2', 'EffectTriggerSpell_3', 'EffectSpellClassMaskA_1', 'EffectSpellClassMaskA_2', 'EffectSpellClassMaskA_3', 'EffectSpellClassMaskB_1', 'EffectSpellClassMaskB_2', 'EffectSpellClassMaskB_3', 'EffectSpellClassMaskC_1', 'EffectSpellClassMaskC_2', 'EffectSpellClassMaskC_3', 'SpellVisualID_1', 'SpellVisualID_2', 'SpellIconID', 'ActiveIconID', 'SpellPriority', 'Name_Lang_Mask', 'NameSubtext_Lang_Mask', 'Description_Lang_Mask', 'AuraDescription_Lang_Mask', 'ManaCostPct', 'StartRecoveryCategory', 'StartRecoveryTime', 'MaxTargetLevel', 'SpellClassSet', 'SpellClassMask_1', 'SpellClassMask_2', 'SpellClassMask_3', 'MaxTargets', 'DefenseType', 'PreventionType', 'StanceBarOrder', 'MinFactionID', 'MinReputation', 'RequiredAuraVision', 'RequiredTotemCategoryID_1', 'RequiredTotemCategoryID_2', 'RequiredAreasID', 'SchoolMask', 'RuneCostID', 'SpellMissileID', 'PowerDisplayID', 'SpellDescriptionVariableID', 'SpellDifficultyID'], 'integer'],
            [['Speed', 'EffectRealPointsPerLevel_1', 'EffectRealPointsPerLevel_2', 'EffectRealPointsPerLevel_3', 'EffectMultipleValue_1', 'EffectMultipleValue_2', 'EffectMultipleValue_3', 'EffectPointsPerCombo_1', 'EffectPointsPerCombo_2', 'EffectPointsPerCombo_3', 'EffectChainAmplitude_1', 'EffectChainAmplitude_2', 'EffectChainAmplitude_3', 'EffectBonusMultiplier_1', 'EffectBonusMultiplier_2', 'EffectBonusMultiplier_3'], 'number'],
            [['Description_Lang_enUS', 'Description_Lang_enGB', 'Description_Lang_koKR', 'Description_Lang_frFR', 'Description_Lang_deDE', 'Description_Lang_enCN', 'Description_Lang_zhCN', 'Description_Lang_enTW', 'Description_Lang_zhTW', 'Description_Lang_esES', 'Description_Lang_esMX', 'Description_Lang_ruRU', 'Description_Lang_ptPT', 'Description_Lang_ptBR', 'Description_Lang_itIT', 'Description_Lang_Unk'], 'string'],
            [['Name_Lang_enUS', 'Name_Lang_enGB', 'Name_Lang_koKR', 'Name_Lang_frFR', 'Name_Lang_deDE', 'Name_Lang_enCN', 'Name_Lang_zhCN', 'Name_Lang_enTW', 'Name_Lang_zhTW', 'Name_Lang_esES', 'Name_Lang_esMX', 'Name_Lang_ruRU', 'Name_Lang_ptPT', 'Name_Lang_ptBR', 'Name_Lang_itIT', 'Name_Lang_Unk', 'NameSubtext_Lang_enUS', 'NameSubtext_Lang_enGB', 'NameSubtext_Lang_koKR', 'NameSubtext_Lang_frFR', 'NameSubtext_Lang_deDE', 'NameSubtext_Lang_enCN', 'NameSubtext_Lang_zhCN', 'NameSubtext_Lang_enTW', 'NameSubtext_Lang_zhTW', 'NameSubtext_Lang_esES', 'NameSubtext_Lang_esMX', 'NameSubtext_Lang_ruRU', 'NameSubtext_Lang_ptPT', 'NameSubtext_Lang_ptBR', 'NameSubtext_Lang_itIT', 'NameSubtext_Lang_Unk', 'AuraDescription_Lang_Unk'], 'string', 'max' => 100],
            [['AuraDescription_Lang_enUS', 'AuraDescription_Lang_enGB', 'AuraDescription_Lang_koKR', 'AuraDescription_Lang_frFR', 'AuraDescription_Lang_deDE', 'AuraDescription_Lang_enCN', 'AuraDescription_Lang_zhCN', 'AuraDescription_Lang_enTW', 'AuraDescription_Lang_zhTW', 'AuraDescription_Lang_esES', 'AuraDescription_Lang_esMX', 'AuraDescription_Lang_ruRU', 'AuraDescription_Lang_ptPT', 'AuraDescription_Lang_ptBR', 'AuraDescription_Lang_itIT'], 'string', 'max' => 550],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Category' => 'Category',
            'DispelType' => 'Dispel Type',
            'Mechanic' => 'Mechanic',
            'Attributes' => 'Attributes',
            'AttributesEx' => 'Attributes Ex',
            'AttributesEx2' => 'Attributes Ex2',
            'AttributesEx3' => 'Attributes Ex3',
            'AttributesEx4' => 'Attributes Ex4',
            'AttributesEx5' => 'Attributes Ex5',
            'AttributesEx6' => 'Attributes Ex6',
            'AttributesEx7' => 'Attributes Ex7',
            'ShapeshiftMask' => 'Shapeshift Mask', // aka Stances
            'unk_320_2' => 'Unk 320 2',
            'ShapeshiftExclude' => 'Shapeshift Exclude', // aka StancesNot
            'unk_320_3' => 'Unk 320 3',
            'Targets' => 'Targets',
            'TargetCreatureType' => 'Target Creature Type',
            'RequiresSpellFocus' => 'Requires Spell Focus',
            'FacingCasterFlags' => 'Facing Caster Flags',
            'CasterAuraState' => 'Caster Aura State',
            'TargetAuraState' => 'Target Aura State',
            'ExcludeCasterAuraState' => 'Exclude Caster Aura State', // (When exclude, the title on the Editor is "xxxNot")
            'ExcludeTargetAuraState' => 'Exclude Target Aura State',
            'CasterAuraSpell' => 'Caster Aura Spell',
            'TargetAuraSpell' => 'Target Aura Spell',
            'ExcludeCasterAuraSpell' => 'Exclude Caster Aura Spell',
            'ExcludeTargetAuraSpell' => 'Exclude Target Aura Spell',
            'CastingTimeIndex' => 'Casting Time Index',
            'RecoveryTime' => 'Recovery Time',
            'CategoryRecoveryTime' => 'Category Recovery Time',
            'InterruptFlags' => 'Interrupt Flags',
            'AuraInterruptFlags' => 'Aura Interrupt Flags',
            'ChannelInterruptFlags' => 'Channel Interrupt Flags',
            'ProcTypeMask' => 'Proc Type Mask', // ProcFlags
            'ProcChance' => 'Proc Chance',
            'ProcCharges' => 'Proc Charges',
            'MaxLevel' => 'Max Level',
            'BaseLevel' => 'Base Level',
            'SpellLevel' => 'Spell Level',
            'DurationIndex' => 'Duration Index',
            'PowerType' => 'Power Type',
            'ManaCost' => 'Mana Cost',
            'ManaCostPerLevel' => 'Mana Cost Per Level',
            'ManaPerSecond' => 'Mana Per Second',
            'ManaPerSecondPerLevel' => 'Mana Per Second Per Level',
            'RangeIndex' => 'Range Index',
            'Speed' => 'Speed',
            'ModalNextSpell' => 'Modal Next Spell',
            'CumulativeAura' => 'Cumulative Aura', // StackAmount
            'Totem_1' => 'Totem 1',
            'Totem_2' => 'Totem 2',
            'Reagent_1' => 'Reagent 1',
            'Reagent_2' => 'Reagent 2',
            'Reagent_3' => 'Reagent 3',
            'Reagent_4' => 'Reagent 4',
            'Reagent_5' => 'Reagent 5',
            'Reagent_6' => 'Reagent 6',
            'Reagent_7' => 'Reagent 7',
            'Reagent_8' => 'Reagent 8',
            'ReagentCount_1' => 'Reagent Count 1',
            'ReagentCount_2' => 'Reagent Count 2',
            'ReagentCount_3' => 'Reagent Count 3',
            'ReagentCount_4' => 'Reagent Count 4',
            'ReagentCount_5' => 'Reagent Count 5',
            'ReagentCount_6' => 'Reagent Count 6',
            'ReagentCount_7' => 'Reagent Count 7',
            'ReagentCount_8' => 'Reagent Count 8',
            'EquippedItemClass' => 'Equipped Item Class',
            'EquippedItemSubclass' => 'Equipped Item Subclass',
            'EquippedItemInvTypes' => 'Equipped Item Inv Types',
            'Effect_1' => 'Effect 1',
            'Effect_2' => 'Effect 2',
            'Effect_3' => 'Effect 3',
            'EffectDieSides_1' => 'Effect Die Sides 1',
            'EffectDieSides_2' => 'Effect Die Sides 2',
            'EffectDieSides_3' => 'Effect Die Sides 3',
            'EffectRealPointsPerLevel_1' => 'Effect Real Points Per Level 1',
            'EffectRealPointsPerLevel_2' => 'Effect Real Points Per Level 2',
            'EffectRealPointsPerLevel_3' => 'Effect Real Points Per Level 3',
            'EffectBasePoints_1' => 'Effect Base Points 1',
            'EffectBasePoints_2' => 'Effect Base Points 2',
            'EffectBasePoints_3' => 'Effect Base Points 3',
            'EffectMechanic_1' => 'Effect Mechanic 1',
            'EffectMechanic_2' => 'Effect Mechanic 2',
            'EffectMechanic_3' => 'Effect Mechanic 3',
            'ImplicitTargetA_1' => 'Implicit Target A 1',
            'ImplicitTargetA_2' => 'Implicit Target A 2',
            'ImplicitTargetA_3' => 'Implicit Target A 3',
            'ImplicitTargetB_1' => 'Implicit Target B 1',
            'ImplicitTargetB_2' => 'Implicit Target B 2',
            'ImplicitTargetB_3' => 'Implicit Target B 3',
            'EffectRadiusIndex_1' => 'Effect Radius Index 1',
            'EffectRadiusIndex_2' => 'Effect Radius Index 2',
            'EffectRadiusIndex_3' => 'Effect Radius Index 3',
            'EffectAura_1' => 'Effect Aura 1', // EffectApplyAuraName
            'EffectAura_2' => 'Effect Aura 2',
            'EffectAura_3' => 'Effect Aura 3',
            'EffectAuraPeriod_1' => 'Effect Aura Period 1', // EffectAmplitude
            'EffectAuraPeriod_2' => 'Effect Aura Period 2',
            'EffectAuraPeriod_3' => 'Effect Aura Period 3',
            'EffectMultipleValue_1' => 'Effect Multiple Value 1',
            'EffectMultipleValue_2' => 'Effect Multiple Value 2',
            'EffectMultipleValue_3' => 'Effect Multiple Value 3',
            'EffectChainTargets_1' => 'Effect Chain Targets 1',
            'EffectChainTargets_2' => 'Effect Chain Targets 2',
            'EffectChainTargets_3' => 'Effect Chain Targets 3',
            'EffectItemType_1' => 'Effect Item Type 1',
            'EffectItemType_2' => 'Effect Item Type 2',
            'EffectItemType_3' => 'Effect Item Type 3',
            'EffectMiscValue_1' => 'Effect Misc Value 1',
            'EffectMiscValue_2' => 'Effect Misc Value 2',
            'EffectMiscValue_3' => 'Effect Misc Value 3',
            'EffectMiscValueB_1' => 'Effect Misc Value B 1',
            'EffectMiscValueB_2' => 'Effect Misc Value B 2',
            'EffectMiscValueB_3' => 'Effect Misc Value B 3',
            'EffectTriggerSpell_1' => 'Effect Trigger Spell 1',
            'EffectTriggerSpell_2' => 'Effect Trigger Spell 2',
            'EffectTriggerSpell_3' => 'Effect Trigger Spell 3',
            'EffectPointsPerCombo_1' => 'Effect Points Per Combo 1',
            'EffectPointsPerCombo_2' => 'Effect Points Per Combo 2',
            'EffectPointsPerCombo_3' => 'Effect Points Per Combo 3',
            'EffectSpellClassMaskA_1' => 'Effect Spell Class Mask A 1',
            'EffectSpellClassMaskA_2' => 'Effect Spell Class Mask A 2',
            'EffectSpellClassMaskA_3' => 'Effect Spell Class Mask A 3',
            'EffectSpellClassMaskB_1' => 'Effect Spell Class Mask B 1',
            'EffectSpellClassMaskB_2' => 'Effect Spell Class Mask B 2',
            'EffectSpellClassMaskB_3' => 'Effect Spell Class Mask B 3',
            'EffectSpellClassMaskC_1' => 'Effect Spell Class Mask C 1',
            'EffectSpellClassMaskC_2' => 'Effect Spell Class Mask C 2',
            'EffectSpellClassMaskC_3' => 'Effect Spell Class Mask C 3',
            'SpellVisualID_1' => 'Spell Visual Id 1',
            'SpellVisualID_2' => 'Spell Visual Id 2',
            'SpellIconID' => 'Spell Icon ID',
            'ActiveIconID' => 'Active Icon ID',
            'SpellPriority' => 'Spell Priority',
            'Name_Lang_enUS' => 'Name Lang En Us', // SpellName
            'Name_Lang_enGB' => 'Name Lang En Gb',
            'Name_Lang_koKR' => 'Name Lang Ko Kr',
            'Name_Lang_frFR' => 'Name Lang Fr Fr',
            'Name_Lang_deDE' => 'Name Lang De De',
            'Name_Lang_enCN' => 'Name Lang En Cn',
            'Name_Lang_zhCN' => 'Name Lang Zh Cn',
            'Name_Lang_enTW' => 'Name Lang En Tw',
            'Name_Lang_zhTW' => 'Name Lang Zh Tw',
            'Name_Lang_esES' => 'Name Lang Es Es',
            'Name_Lang_esMX' => 'Name Lang Es Mx',
            'Name_Lang_ruRU' => 'Name Lang Ru Ru',
            'Name_Lang_ptPT' => 'Name Lang Pt Pt',
            'Name_Lang_ptBR' => 'Name Lang Pt Br',
            'Name_Lang_itIT' => 'Name Lang It It',
            'Name_Lang_Unk' => 'Name Lang Unk',
            'Name_Lang_Mask' => 'Name Lang Mask', // SpellNameFlag
            'NameSubtext_Lang_enUS' => 'Name Subtext Lang En Us', // Rank
            'NameSubtext_Lang_enGB' => 'Name Subtext Lang En Gb',
            'NameSubtext_Lang_koKR' => 'Name Subtext Lang Ko Kr',
            'NameSubtext_Lang_frFR' => 'Name Subtext Lang Fr Fr',
            'NameSubtext_Lang_deDE' => 'Name Subtext Lang De De',
            'NameSubtext_Lang_enCN' => 'Name Subtext Lang En Cn',
            'NameSubtext_Lang_zhCN' => 'Name Subtext Lang Zh Cn',
            'NameSubtext_Lang_enTW' => 'Name Subtext Lang En Tw',
            'NameSubtext_Lang_zhTW' => 'Name Subtext Lang Zh Tw',
            'NameSubtext_Lang_esES' => 'Name Subtext Lang Es Es',
            'NameSubtext_Lang_esMX' => 'Name Subtext Lang Es Mx',
            'NameSubtext_Lang_ruRU' => 'Name Subtext Lang Ru Ru',
            'NameSubtext_Lang_ptPT' => 'Name Subtext Lang Pt Pt',
            'NameSubtext_Lang_ptBR' => 'Name Subtext Lang Pt Br',
            'NameSubtext_Lang_itIT' => 'Name Subtext Lang It It',
            'NameSubtext_Lang_Unk' => 'Name Subtext Lang Unk',
            'NameSubtext_Lang_Mask' => 'Name Subtext Lang Mask', // RankFlags
            'Description_Lang_enUS' => 'Description Lang En Us', // Description
            'Description_Lang_enGB' => 'Description Lang En Gb',
            'Description_Lang_koKR' => 'Description Lang Ko Kr',
            'Description_Lang_frFR' => 'Description Lang Fr Fr',
            'Description_Lang_deDE' => 'Description Lang De De',
            'Description_Lang_enCN' => 'Description Lang En Cn',
            'Description_Lang_zhCN' => 'Description Lang Zh Cn',
            'Description_Lang_enTW' => 'Description Lang En Tw',
            'Description_Lang_zhTW' => 'Description Lang Zh Tw',
            'Description_Lang_esES' => 'Description Lang Es Es',
            'Description_Lang_esMX' => 'Description Lang Es Mx',
            'Description_Lang_ruRU' => 'Description Lang Ru Ru',
            'Description_Lang_ptPT' => 'Description Lang Pt Pt',
            'Description_Lang_ptBR' => 'Description Lang Pt Br',
            'Description_Lang_itIT' => 'Description Lang It It',
            'Description_Lang_Unk' => 'Description Lang Unk',
            'Description_Lang_Mask' => 'Description Lang Mask', // DescriptionFlags
            'AuraDescription_Lang_enUS' => 'Aura Description Lang En Us', // ToolTip
            'AuraDescription_Lang_enGB' => 'Aura Description Lang En Gb',
            'AuraDescription_Lang_koKR' => 'Aura Description Lang Ko Kr',
            'AuraDescription_Lang_frFR' => 'Aura Description Lang Fr Fr',
            'AuraDescription_Lang_deDE' => 'Aura Description Lang De De',
            'AuraDescription_Lang_enCN' => 'Aura Description Lang En Cn',
            'AuraDescription_Lang_zhCN' => 'Aura Description Lang Zh Cn',
            'AuraDescription_Lang_enTW' => 'Aura Description Lang En Tw',
            'AuraDescription_Lang_zhTW' => 'Aura Description Lang Zh Tw',
            'AuraDescription_Lang_esES' => 'Aura Description Lang Es Es',
            'AuraDescription_Lang_esMX' => 'Aura Description Lang Es Mx',
            'AuraDescription_Lang_ruRU' => 'Aura Description Lang Ru Ru',
            'AuraDescription_Lang_ptPT' => 'Aura Description Lang Pt Pt',
            'AuraDescription_Lang_ptBR' => 'Aura Description Lang Pt Br',
            'AuraDescription_Lang_itIT' => 'Aura Description Lang It It',
            'AuraDescription_Lang_Unk' => 'Aura Description Lang Unk',
            'AuraDescription_Lang_Mask' => 'Aura Description Lang Mask', // ToolTipFlags
            'ManaCostPct' => 'Mana Cost Pct',
            'StartRecoveryCategory' => 'Start Recovery Category',
            'StartRecoveryTime' => 'Start Recovery Time',
            'MaxTargetLevel' => 'Max Target Level',
            'SpellClassSet' => 'Spell Class Set', // SpellFamilyName
            'SpellClassMask_1' => 'Spell Class Mask 1', // SpellFamilyFlags
            'SpellClassMask_2' => 'Spell Class Mask 2', // Unknown
            'SpellClassMask_3' => 'Spell Class Mask 3', // SpellFamilyFlags2
            'MaxTargets' => 'Max Targets',
            'DefenseType' => 'Defense Type', // DmgClass
            'PreventionType' => 'Prevention Type',
            'StanceBarOrder' => 'Stance Bar Order',
            'EffectChainAmplitude_1' => 'Effect Chain Amplitude 1', // DmgMultiplier1
            'EffectChainAmplitude_2' => 'Effect Chain Amplitude 2', // DmgMultiplier2
            'EffectChainAmplitude_3' => 'Effect Chain Amplitude 3', // DmgMultiplier3
            'MinFactionID' => 'Min Faction ID',
            'MinReputation' => 'Min Reputation',
            'RequiredAuraVision' => 'Required Aura Vision',
            'RequiredTotemCategoryID_1' => 'Required Totem Category Id 1',
            'RequiredTotemCategoryID_2' => 'Required Totem Category Id 2',
            'RequiredAreasID' => 'Required Areas ID',
            'SchoolMask' => 'School Mask',
            'RuneCostID' => 'Rune Cost ID',
            'SpellMissileID' => 'Spell Missile ID',
            'PowerDisplayID' => 'Power Display ID',
            'EffectBonusMultiplier_1' => 'Effect Bonus Multiplier 1', // Unk_320_41
            'EffectBonusMultiplier_2' => 'Effect Bonus Multiplier 2', // Unk_320_42
            'EffectBonusMultiplier_3' => 'Effect Bonus Multiplier 3', // Unk_320_43
            'SpellDescriptionVariableID' => 'Spell Description Variable ID',
            'SpellDifficultyID' => 'Spell Difficulty ID',
        ];
    }

    /**
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentPowerTypeName(int $type = null)
    {
        return $this->getPowerTypeName($type ?? $this->PowerType);
    }

    /**
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentDispelTypeName(int $type = null)
    {
        return $this->getDispelTypeName($type ?? $this->DispelType);
    }

    /**
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentTargetCreatureTypeName(int $type = null)
    {
        return $this->getTargetCreatureTypeName($type ?? $this->TargetCreatureType);
    }

    /**
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentMechanicName(int $type = null)
    {
        return $this->getMechanicName($type ?? $this->Mechanic);
    }

    /**
     * TODO: 
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentSpellClassSetName(int $type = null)
    {
        return $this->getSpellClassSetName($type ?? $this->SpellClassSet);
    }

    /**
     * TODO:
     * Get the human-readable power type name.
     *
     * @return string|null
     */
    public function getCurrentCategoryName(int $type = null)
    {
        return sprintf('(%s) => %s', $this->Category, $this->getSpellCategoryName($type ?? $this->Category));
        // return $this->getSpellCategoryName($type ?? $this->Category);
    }

    /**
     * Get the human-readable defense type name.
     *
     * @return string|null
     */
    public function getCurrentDefenseTypeName(int $type = null)
    {
        return $this->getSpellDefenseTypeName($type ?? $this->DefenseType);
    }

    /**
     * Get the human-readable prevention type name.
     *
     * @return string|null
     */
    public function getCurrentPreventionTypeName(int $type = null)
    {
        return $this->getSpellPreventionTypeName($type ?? $this->PreventionType);
    }

    /**
     * Get the human-readable prevention type name.
     *
     * @return string|null
     */
    public function getCurrentReagentName(?string $reagent)
    {
        $result = $reagent;
        if(!is_null($reagent)) {
            $item = ItemTemplate::findOne(['entry' => $reagent]);
            if(isset($item)) {
                $result = $item->name;
            }
        }
        return $result;
    }

    /**
     * // TODO: make a method for each case?
     * Get the human-readable Effect name.
     *
     * @return string|null
     */
    public function getCurrentEffectName(int $type = null)
    {
        return $this->getSpellEffectName($type);
    }

    /**
     * // TODO: make a method for each case?
     * Get the human-readable EffectImplicitTarget name.
     *
     * @return string|null
     */
    public function getCurrentEffectImplicitTargetName(int $type = null)
    {
        return $this->getSpellEffectImplicitTargetName($type);
    }

    /**
     * Exports values from the current ActiveRecord instance to DBC (Database Client Cache) format.
     *
     * @param array $definition The column definition for mapping exported values.
     * @return array The exported values.
     */
    public function mapExportedDbcValues(DbcWriter $dbcWriter, array $data, array $definition)
    {
        $dbcLanguage = $dbcWriter->getLanguage();
        if ($dbcLanguage) {
            // Define the translatables
            $translatables = ['Name_Lang_', 'NameSubtext_Lang_', 'Description_Lang_', 'AuraDescription_Lang_'];
            // Iterate through the data
            foreach ($data as $key => $value) {
                // Check if the key matches any of the patterns in $translatables
                foreach ($translatables as $match) {
                    if (strpos($key, $match) === 0) {
                        // Check if the key ends with the language code
                        if (substr($key, -strlen($dbcLanguage)) !== $dbcLanguage) {
                            // If not, set the value to null
                            $data[$key] = null;
                        }
                        // Found a match, break the inner loop
                        break;
                    }
                }
            }
        }
        return parent::mapExportedDbcValues($dbcWriter, $data, $definition);
    }

    // PUBLIC STATIC METHODS

    /**
     * {@inheritdoc}
     * @return SpellDbcQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SpellDbcQuery(get_called_class());
    }

    /**
     * @param array $attributes
     */
    public static function viewColumn(array $attributes)
    {
        $customAttributes = [];

        foreach ($attributes as $attribute) {
            switch ($attribute) {
                case 'PowerType':
                    $customAttributes[] = [
                        'attribute' => 'PowerType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentPowerTypeName();
                        },
                    ];
                    break;
                case 'DispelType':
                    $customAttributes[] = [
                        'attribute' => 'DispelType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentDispelTypeName();
                        },
                    ];
                    break;
                case 'Mechanic':
                    $customAttributes[] = [
                        'attribute' => 'Mechanic',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentMechanicName();
                        },
                    ];
                    break;
                case 'Targets':
                    $customAttributes[] = DbcView::columnInline('Targets', SpellDbc::getTargetFlagOptions(), ['onclick' => 'return false;']);
                    break;
                case 'TargetCreatureType':
                    $customAttributes[] = DbcView::columnInline('TargetCreatureType', SpellDbc::getTargetCreatureTypeOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Attributes':
                    $customAttributes[] = DbcView::columnInline('Attributes', SpellDbc::getSpellAttributesOptions(), ['onclick' => 'return false;']);
                    break;
                case 'ShapeshiftMask':
                    $customAttributes[] = DbcView::columnInline('ShapeshiftMask', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'ShapeshiftExclude':
                    $customAttributes[] = DbcView::columnInline('ShapeshiftExclude', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'InterruptFlags':
                    $customAttributes[] = DbcView::columnInline('InterruptFlags', SpellDbc::getSpellInterruptFlagOptions(), ['onclick' => 'return false;']);
                    break;
                case 'SchoolMask':
                    $customAttributes[] = DbcView::columnInline('SchoolMask', SpellDbc::getSchoolMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Name_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('Name_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'NameSubtext_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('NameSubtext_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Description_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('Description_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'AuraDescription_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('AuraDescription_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemClass':
                    $customAttributes[] = DbcView::columnInline('EquippedItemClass', SpellDbc::getEquippedItemClassOptions(), ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemSubclass':
                    $customAttributes[] = DbcView::columnInlineCustom('EquippedItemSubclass', function ($model) {
                        return SpellDbc::getEquippedItemSubclassOptions($model, $model->EquippedItemClass);
                    }, ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemInvTypes':
                    $customAttributes[] = DbcView::columnInline('EquippedItemInvTypes', SpellDbc::getEquippedItemInvTypeOptions(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx':
                    $customAttributes[] = DbcView::columnInline('AttributesEx', SpellDbc::getSpellAttributesEx1Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx2':
                    $customAttributes[] = DbcView::columnInline('AttributesEx2', SpellDbc::getSpellAttributesEx2Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx3':
                    $customAttributes[] = DbcView::columnInline('AttributesEx3', SpellDbc::getSpellAttributesEx3Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx4':
                    $customAttributes[] = DbcView::columnInline('AttributesEx4', SpellDbc::getSpellAttributesEx4Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx5':
                    $customAttributes[] = DbcView::columnInline('AttributesEx5', SpellDbc::getSpellAttributesEx5Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx6':
                    $customAttributes[] = DbcView::columnInline('AttributesEx6', SpellDbc::getSpellAttributesEx6Options(), ['onclick' => 'return false;']);
                    break;
                case 'AttributesEx7':
                    $customAttributes[] = DbcView::columnInline('AttributesEx7', SpellDbc::getSpellAttributesEx7Options(), ['onclick' => 'return false;']);
                    break;
                case 'SpellClassSet':
                    $customAttributes[] = [
                        'attribute' => 'SpellClassSet',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentSpellClassSetName();
                        },
                    ];
                    break;
                // case 'Category':
                //     $customAttributes[] = [
                //         'attribute' => 'Category',
                //         'value' => function ($model) {
                //             /** @var SpellDbc $model */
                //             return $model->getCurrentCategoryName();
                //         },
                //     ];
                //     break;
                case 'DefenseType':
                    $customAttributes[] = [
                        'attribute' => 'DefenseType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentDefenseTypeName();
                        },
                    ];
                    break;
                case 'PreventionType':
                    $customAttributes[] = [
                        'attribute' => 'PreventionType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentPreventionTypeName();
                        },
                    ];
                    break;
                /* TODO: missing documentation
                case 'Effect_1':
                case 'Effect_2':
                case 'Effect_3':
                    $customAttributes[] = [
                        'attribute' => $attribute,
                        'value' => function ($model) use ($attribute) {
                            /** @var SpellDbc $model */
                            /*return $model->getCurrentEffectName($model->{$attribute});
                        },
                    ];
                    break;*/
                case 'EffectMechanic_1':
                case 'EffectMechanic_2':
                case 'EffectMechanic_3':
                    $customAttributes[] = [
                        'attribute' => $attribute,
                        'value' => function ($model) use ($attribute) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentMechanicName($model->{$attribute});
                        },
                    ];
                    break;

                case 'EffectSpellClassMaskA_1':
                case 'EffectSpellClassMaskA_2':
                case 'EffectSpellClassMaskA_3':
                case 'EffectSpellClassMaskB_1':
                case 'EffectSpellClassMaskB_2':
                case 'EffectSpellClassMaskB_3':
                case 'EffectSpellClassMaskC_1':
                case 'EffectSpellClassMaskC_2':
                case 'EffectSpellClassMaskC_3':
                case 'SpellClassMask_1': // FIXME: 
                case 'SpellClassMask_2':
                case 'SpellClassMask_3':
                    $customAttributes[] = DbcView::columnInline($attribute, SpellDbc::getSpellClassMaskOptions(), ['onclick' => 'return false;']);

                    /*$customAttributes[] = [
                        'attribute' => $attribute,
                        'value' => function ($model) use ($attribute) {
                            /** @var SpellDbc $model */
                            /*return $model->getSpellClassMaskOptions($model->{$attribute});
                        },
                    ];*/
                    break;
                case 'AuraInterruptFlags':
                    $customAttributes[] = DbcView::columnInline('AuraInterruptFlags', SpellDbc::getSpellAuraInterruptFlagOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Reagent_1':
                case 'Reagent_2':
                case 'Reagent_3':
                case 'Reagent_4':
                case 'Reagent_5':
                case 'Reagent_6':
                case 'Reagent_7':
                case 'Reagent_8':
                    $customAttributes[] = [
                        'attribute' => $attribute,
                        'value' => function ($model) use ($attribute) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentReagentName($model->{$attribute});
                        },
                    ];
                    break;
                case 'ImplicitTargetA_1':
                case 'ImplicitTargetA_2':
                case 'ImplicitTargetA_3':
                case 'ImplicitTargetB_1':
                case 'ImplicitTargetB_2':
                case 'ImplicitTargetB_3':
                    $customAttributes[] = [
                        'attribute' => $attribute,
                        'value' => function ($model) use ($attribute) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentEffectImplicitTargetName($model->{$attribute});
                        },
                    ];
                    break;
                case 'ProcTypeMask':
                    $customAttributes[] = DbcView::columnInline('ProcTypeMask', SpellDbc::getSpellProcFlagOptions(), ['onclick' => 'return false;']);
                    break;
                // Add more customizations for other attributes as needed
                default:
                    $customAttributes[] = $attribute;
                    break;
            }
        }

        return $customAttributes;
    }

    /**
     * @param array $attributes
     */
    public static function editColumn(array $attributes)
    {
        // TODO:
        return $attributes;
    }

}
