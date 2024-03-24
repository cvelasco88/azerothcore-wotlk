<?php

namespace app\helpers\custom;

use app\helpers\DbcView;
use app\models\forms\SpellDbcForm;
use app\models\SpellDbc;
use yii\widgets\ActiveForm;

class SpellDbcView
{

    // PUBLIC STATIC METHODS

    /**
     * @param bool $skipOther Used to avoid recursivity when getting "Other"
     */
    public static function getAttributeGroups(bool $skipOther = false)
    {
        $groups = [];
        $groups["Details"] = self::getDetailAttributes();
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
        if(!$skipOther) {
            $groups["Other"] = self::getOtherAttributes();
        }
        return $groups;
    }

    public static function getOtherAttributes()
    {
        $attributeGroups = self::getAttributeGroups(true);
        $except = [];
        foreach ($attributeGroups as $groupName => $attributes) {
            $except = array_merge($except, $attributes);
        }
        $tmp = new SpellDbc();
        return array_keys($tmp->getAttributes(null, $except));
        /*return [
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
        ];*/
    }

    // PRIVATE STATIC METHODS

    private static function getDetailAttributes()
    {
        return [
            "ID",
            "Category",
            "DispelType",
            "Mechanic",
            "Attributes",
            "Targets",
            "TargetCreatureType",
            "RequiresSpellFocus",
            "FacingCasterFlags",
            "MaxLevel",
            "BaseLevel",
            "SpellLevel",
            "DurationIndex",
            "PowerType",
            "RangeIndex",
            "Speed",
            "SpellPriority",
            "MaxTargetLevel",
            "MaxTargets",
            "SchoolMask",
            "RuneCostID",
            "SpellDifficultyID",
        ];
    }

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


    /**
     * @param string[]|array $attributes
     */
    public static function viewColumns(array $attributes)
    {
        return array_map(function($attr) {
            return static::viewColumn($attr);
        }, $attributes);
    }

    /**
     * @param string $attribute
     */
    public static function viewColumn(string $attribute)
    {
        switch ($attribute) {
            case 'PowerType':
                $customAttribute = [
                    'attribute' => 'PowerType',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentPowerTypeName();
                    },
                ];
                break;
            case 'DispelType':
                $customAttribute = [
                    'attribute' => 'DispelType',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentDispelTypeName();
                    },
                ];
                break;
            case 'Mechanic':
                $customAttribute = [
                    'attribute' => 'Mechanic',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentMechanicName();
                    },
                ];
                break;
            case 'Targets':
                $customAttribute = DbcView::columnInline('Targets', SpellDbc::getTargetFlagOptions(), ['onclick' => 'return false;']);
                break;
            case 'TargetCreatureType':
                $customAttribute = DbcView::columnInline('TargetCreatureType', SpellDbc::getTargetCreatureTypeOptions(), ['onclick' => 'return false;']);
                break;
            case 'Attributes':
                $customAttribute = DbcView::columnInline('Attributes', SpellDbc::getSpellAttributesOptions(), ['onclick' => 'return false;']);
                break;
            case 'ShapeshiftMask':
                $customAttribute = DbcView::columnInline('ShapeshiftMask', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                break;
            case 'ShapeshiftExclude':
                $customAttribute = DbcView::columnInline('ShapeshiftExclude', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                break;
            case 'InterruptFlags':
                $customAttribute = DbcView::columnInline('InterruptFlags', SpellDbc::getSpellInterruptFlagOptions(), ['onclick' => 'return false;']);
                break;
            case 'SchoolMask':
                $customAttribute = DbcView::columnInline('SchoolMask', SpellDbc::getSchoolMaskOptions(), ['onclick' => 'return false;']);
                break;
            case 'Name_Lang_Mask':
                $customAttribute = DbcView::columnInline('Name_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                break;
            case 'NameSubtext_Lang_Mask':
                $customAttribute = DbcView::columnInline('NameSubtext_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                break;
            case 'Description_Lang_Mask':
                $customAttribute = DbcView::columnInline('Description_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                break;
            case 'AuraDescription_Lang_Mask':
                $customAttribute = DbcView::columnInline('AuraDescription_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                break;
            case 'EquippedItemClass':
                $customAttribute = DbcView::columnInline('EquippedItemClass', SpellDbc::getEquippedItemClassOptions(), ['onclick' => 'return false;']);
                break;
            case 'EquippedItemSubclass':
                $customAttribute = DbcView::columnInlineCustom('EquippedItemSubclass', function ($model) {
                    return SpellDbc::getEquippedItemSubclassOptions($model, $model->EquippedItemClass);
                }, ['onclick' => 'return false;']);
                break;
            case 'EquippedItemInvTypes':
                $customAttribute = DbcView::columnInline('EquippedItemInvTypes', SpellDbc::getEquippedItemInvTypeOptions(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx':
                $customAttribute = DbcView::columnInline('AttributesEx', SpellDbc::getSpellAttributesEx1Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx2':
                $customAttribute = DbcView::columnInline('AttributesEx2', SpellDbc::getSpellAttributesEx2Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx3':
                $customAttribute = DbcView::columnInline('AttributesEx3', SpellDbc::getSpellAttributesEx3Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx4':
                $customAttribute = DbcView::columnInline('AttributesEx4', SpellDbc::getSpellAttributesEx4Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx5':
                $customAttribute = DbcView::columnInline('AttributesEx5', SpellDbc::getSpellAttributesEx5Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx6':
                $customAttribute = DbcView::columnInline('AttributesEx6', SpellDbc::getSpellAttributesEx6Options(), ['onclick' => 'return false;']);
                break;
            case 'AttributesEx7':
                $customAttribute = DbcView::columnInline('AttributesEx7', SpellDbc::getSpellAttributesEx7Options(), ['onclick' => 'return false;']);
                break;
            case 'SpellClassSet':
                $customAttribute = [
                    'attribute' => 'SpellClassSet',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentSpellClassSetName();
                    },
                ];
                break;
            // case 'Category':
            //     $customAttribute = [
            //         'attribute' => 'Category',
            //         'value' => function ($model) {
            //             /** @var SpellDbc $model */
            //             return $model->getCurrentCategoryName();
            //         },
            //     ];
            //     break;
            case 'DefenseType':
                $customAttribute = [
                    'attribute' => 'DefenseType',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentDefenseTypeName();
                    },
                ];
                break;
            case 'PreventionType':
                $customAttribute = [
                    'attribute' => 'PreventionType',
                    'value' => function ($model) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentPreventionTypeName();
                    },
                ];
                break;
            case 'Effect_1':
            case 'Effect_2':
            case 'Effect_3':
                $customAttribute = [
                    'attribute' => $attribute,
                    'value' => function ($model) use ($attribute) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentEffectName($model->{$attribute});
                    },
                ];
                break;
            case 'EffectMechanic_1':
            case 'EffectMechanic_2':
            case 'EffectMechanic_3':
                $customAttribute = [
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
                $customAttribute = DbcView::columnInline($attribute, SpellDbc::getSpellClassMaskOptions(), ['onclick' => 'return false;']);

                /*$customAttribute = [
                    'attribute' => $attribute,
                    'value' => function ($model) use ($attribute) {
                        /** @var SpellDbc $model */
                        /*return $model->getSpellClassMaskOptions($model->{$attribute});
                    },
                ];*/
                break;
            case 'AuraInterruptFlags':
                $customAttribute = DbcView::columnInline('AuraInterruptFlags', SpellDbc::getSpellAuraInterruptFlagOptions(), ['onclick' => 'return false;']);
                break;
            case 'Reagent_1':
            case 'Reagent_2':
            case 'Reagent_3':
            case 'Reagent_4':
            case 'Reagent_5':
            case 'Reagent_6':
            case 'Reagent_7':
            case 'Reagent_8':
                $customAttribute = [
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
                $customAttribute = [
                    'attribute' => $attribute,
                    'value' => function ($model) use ($attribute) {
                        /** @var SpellDbc $model */
                        return $model->getCurrentEffectImplicitTargetName($model->{$attribute});
                    },
                ];
                break;
            case 'ProcTypeMask':
                $customAttribute = DbcView::columnInline('ProcTypeMask', SpellDbc::getSpellProcFlagOptions(), ['onclick' => 'return false;']);
                break;
            // Add more customizations for other attributes as needed
            default:
                $customAttribute = $attribute;
                break;
        }

        return $customAttribute;
    }

    /**
     * @param ActiveForm $form
     * @param SpellDbcForm $formModel
     * @param SpellDbc $model
     * @param string[]|array $attributes
     */
    public static function editColumns(ActiveForm $form, SpellDbcForm $formModel, SpellDbc $model, array $attributes)
    {
        return array_map(function($attr) use ($form, $formModel, $model) {
            return static::editColumn($form, $formModel, $model, $attr);
        }, $attributes);
    }

    /**
     * @param ActiveForm $form
     * @param SpellDbcForm $formModel
     * @param SpellDbc $model
     * @param array $attributes
     */
    public static function editColumn(ActiveForm $form, SpellDbcForm $formModel, SpellDbc $model, string $attribute)
    {
        $input = null;
        switch($attribute){
            case 'ID':
                if($model->isNewRecord) {
                    $input = $form->field($model, $attribute);
                } else {
                    $input = $form->field($model, $attribute)->textInput(['readonly' => true]); 
                }
                break;
            case 'Category':
                $values = SpellDbc::getSpellCategoryOptions();
                $input = $form->field($model, $attribute)->dropDownList(
                    $values, // Array of values to display
                )->label($attribute);
                break;
            case 'DispelType':
                $values = SpellDbc::getDispelTypeOptions();
                $input = $form->field($model, $attribute)->dropDownList(
                    $values, // Array of values to display
                )->label($attribute);
                break;
            case 'Mechanic':
                $values = SpellDbc::getMechanicOptions();
                $input = $form->field($model, $attribute)->dropDownList(
                    $values, // Array of values to display
                )->label($attribute);
                break;
            case 'Attributes':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesOptions()); 
                break;
            case 'Targets':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getTargetFlagOptions()); 
                break;
            case 'TargetCreatureType':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getTargetCreatureTypeOptions()); 
                break;
            case 'AttributesEx':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx1Options()); 
                break;
            case 'AttributesEx2':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx2Options()); 
                break;
            case 'AttributesEx3':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx3Options()); 
                break;
            case 'AttributesEx4':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx4Options()); 
                break;
            case 'AttributesEx5':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx5Options()); 
                break;
            case 'AttributesEx6':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx6Options()); 
                break;
            case 'AttributesEx7':
                $input = $form->field($formModel, $attribute)->checkboxList(SpellDbc::getSpellAttributesEx7Options()); 
                break;
            
            // ////
            // case 'PowerType':
            //     $values = SpellDbc::getPowerTypeOptions();
            //     $input = $form->field($model, $attribute)->dropDownList(
            //         $values, // Array of values to display
            //     )->label($attribute);
            //     break;

            // switch ($attribute) {
                
            //     case 'DispelType':
            //         $customAttribute = [
            //             'attribute' => 'DispelType',
            //             'value' => function ($model) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentDispelTypeName();
            //             },
            //         ];
            //         break;
            //     case 'Mechanic':
            //         $customAttribute = [
            //             'attribute' => 'Mechanic',
            //             'value' => function ($model) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentMechanicName();
            //             },
            //         ];
            //         break;
            //     case 'Targets':
            //         $customAttribute = DbcView::columnInline('Targets', SpellDbc::getTargetFlagOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'TargetCreatureType':
            //         $customAttribute = DbcView::columnInline('TargetCreatureType', SpellDbc::getTargetCreatureTypeOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'Attributes':
            //         $customAttribute = DbcView::columnInline('Attributes', SpellDbc::getSpellAttributesOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'ShapeshiftMask':
            //         $customAttribute = DbcView::columnInline('ShapeshiftMask', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'ShapeshiftExclude':
            //         $customAttribute = DbcView::columnInline('ShapeshiftExclude', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'InterruptFlags':
            //         $customAttribute = DbcView::columnInline('InterruptFlags', SpellDbc::getSpellInterruptFlagOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'SchoolMask':
            //         $customAttribute = DbcView::columnInline('SchoolMask', SpellDbc::getSchoolMaskOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'Name_Lang_Mask':
            //         $customAttribute = DbcView::columnInline('Name_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'NameSubtext_Lang_Mask':
            //         $customAttribute = DbcView::columnInline('NameSubtext_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'Description_Lang_Mask':
            //         $customAttribute = DbcView::columnInline('Description_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AuraDescription_Lang_Mask':
            //         $customAttribute = DbcView::columnInline('AuraDescription_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'EquippedItemClass':
            //         $customAttribute = DbcView::columnInline('EquippedItemClass', SpellDbc::getEquippedItemClassOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'EquippedItemSubclass':
            //         $customAttribute = DbcView::columnInlineCustom('EquippedItemSubclass', function ($model) {
            //             return SpellDbc::getEquippedItemSubclassOptions($model, $model->EquippedItemClass);
            //         }, ['onclick' => 'return false;']);
            //         break;
            //     case 'EquippedItemInvTypes':
            //         $customAttribute = DbcView::columnInline('EquippedItemInvTypes', SpellDbc::getEquippedItemInvTypeOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx':
            //         $customAttribute = DbcView::columnInline('AttributesEx', SpellDbc::getSpellAttributesEx1Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx2':
            //         $customAttribute = DbcView::columnInline('AttributesEx2', SpellDbc::getSpellAttributesEx2Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx3':
            //         $customAttribute = DbcView::columnInline('AttributesEx3', SpellDbc::getSpellAttributesEx3Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx4':
            //         $customAttribute = DbcView::columnInline('AttributesEx4', SpellDbc::getSpellAttributesEx4Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx5':
            //         $customAttribute = DbcView::columnInline('AttributesEx5', SpellDbc::getSpellAttributesEx5Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx6':
            //         $customAttribute = DbcView::columnInline('AttributesEx6', SpellDbc::getSpellAttributesEx6Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'AttributesEx7':
            //         $customAttribute = DbcView::columnInline('AttributesEx7', SpellDbc::getSpellAttributesEx7Options(), ['onclick' => 'return false;']);
            //         break;
            //     case 'SpellClassSet':
            //         $customAttribute = [
            //             'attribute' => 'SpellClassSet',
            //             'value' => function ($model) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentSpellClassSetName();
            //             },
            //         ];
            //         break;
            //     // case 'Category':
            //     //     $customAttribute = [
            //     //         'attribute' => 'Category',
            //     //         'value' => function ($model) {
            //     //             /** @var SpellDbc $model */
            //     //             return $model->getCurrentCategoryName();
            //     //         },
            //     //     ];
            //     //     break;
            //     case 'DefenseType':
            //         $customAttribute = [
            //             'attribute' => 'DefenseType',
            //             'value' => function ($model) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentDefenseTypeName();
            //             },
            //         ];
            //         break;
            //     case 'PreventionType':
            //         $customAttribute = [
            //             'attribute' => 'PreventionType',
            //             'value' => function ($model) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentPreventionTypeName();
            //             },
            //         ];
            //         break;
            //     case 'Effect_1':
            //     case 'Effect_2':
            //     case 'Effect_3':
            //         $customAttribute = [
            //             'attribute' => $attribute,
            //             'value' => function ($model) use ($attribute) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentEffectName($model->{$attribute});
            //             },
            //         ];
            //         break;
            //     case 'EffectMechanic_1':
            //     case 'EffectMechanic_2':
            //     case 'EffectMechanic_3':
            //         $customAttribute = [
            //             'attribute' => $attribute,
            //             'value' => function ($model) use ($attribute) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentMechanicName($model->{$attribute});
            //             },
            //         ];
            //         break;
    
            //     case 'EffectSpellClassMaskA_1':
            //     case 'EffectSpellClassMaskA_2':
            //     case 'EffectSpellClassMaskA_3':
            //     case 'EffectSpellClassMaskB_1':
            //     case 'EffectSpellClassMaskB_2':
            //     case 'EffectSpellClassMaskB_3':
            //     case 'EffectSpellClassMaskC_1':
            //     case 'EffectSpellClassMaskC_2':
            //     case 'EffectSpellClassMaskC_3':
            //     case 'SpellClassMask_1': // FIXME: 
            //     case 'SpellClassMask_2':
            //     case 'SpellClassMask_3':
            //         $customAttribute = DbcView::columnInline($attribute, SpellDbc::getSpellClassMaskOptions(), ['onclick' => 'return false;']);
    
            //         /*$customAttribute = [
            //             'attribute' => $attribute,
            //             'value' => function ($model) use ($attribute) {
            //                 /** @var SpellDbc $model */
            //                 /*return $model->getSpellClassMaskOptions($model->{$attribute});
            //             },
            //         ];*/
            //         break;
            //     case 'AuraInterruptFlags':
            //         $customAttribute = DbcView::columnInline('AuraInterruptFlags', SpellDbc::getSpellAuraInterruptFlagOptions(), ['onclick' => 'return false;']);
            //         break;
            //     case 'Reagent_1':
            //     case 'Reagent_2':
            //     case 'Reagent_3':
            //     case 'Reagent_4':
            //     case 'Reagent_5':
            //     case 'Reagent_6':
            //     case 'Reagent_7':
            //     case 'Reagent_8':
            //         $customAttribute = [
            //             'attribute' => $attribute,
            //             'value' => function ($model) use ($attribute) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentReagentName($model->{$attribute});
            //             },
            //         ];
            //         break;
            //     case 'ImplicitTargetA_1':
            //     case 'ImplicitTargetA_2':
            //     case 'ImplicitTargetA_3':
            //     case 'ImplicitTargetB_1':
            //     case 'ImplicitTargetB_2':
            //     case 'ImplicitTargetB_3':
            //         $customAttribute = [
            //             'attribute' => $attribute,
            //             'value' => function ($model) use ($attribute) {
            //                 /** @var SpellDbc $model */
            //                 return $model->getCurrentEffectImplicitTargetName($model->{$attribute});
            //             },
            //         ];
            //         break;
            //     case 'ProcTypeMask':
            //         $customAttribute = DbcView::columnInline('ProcTypeMask', SpellDbc::getSpellProcFlagOptions(), ['onclick' => 'return false;']);
            //         break;
            //     // Add more customizations for other attributes as needed
            //     default:
            //         $customAttribute = $attribute;
            //         break;
            // }

            ////
            default:
                $input = $form->field($model, $attribute);
        }
        return $input;
    }
}