<?php

use app\models\SpellDbc;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */
/** @var ActiveForm $form */

$this->title = 'Update: ' . $model->Name_Lang_esES;
$this->params['breadcrumbs'][] = ['label' => 'SpellDbc Index', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spell-dbc-update">

    <h1><?= Html::encode($model->Name_Lang_esES) ?></h1>

    <div class="mb-3"></div>

    <?= Html::a('View', ['view', 'id' => $model->ID], ['class' => 'btn btn-success']) ?>

    <div class="mb-3"></div>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ID')->textInput(['readonly' => true]) ?>
        <?= $form->field($model, 'Category') ?>
        <?= $form->field($model, 'DispelType') ?>
        <?= $form->field($model, 'Mechanic') ?>

        <?= '' // $form->field($model, 'Attributes') ?>
        <?= $form->field($formModel, 'Attributes')->checkboxList(SpellDbc::getSpellAttributesOptions()); ?>

        <?= $form->field($model, 'AttributesEx') ?>
        <?= $form->field($model, 'AttributesEx2') ?>
        <?= $form->field($model, 'AttributesEx3') ?>
        <?= $form->field($model, 'AttributesEx4') ?>
        <?= $form->field($model, 'AttributesEx5') ?>
        <?= $form->field($model, 'AttributesEx6') ?>
        <?= $form->field($model, 'AttributesEx7') ?>
        <?= $form->field($model, 'ShapeshiftMask') ?>
        <?= $form->field($model, 'unk_320_2') ?>
        <?= $form->field($model, 'ShapeshiftExclude') ?>
        <?= $form->field($model, 'unk_320_3') ?>

        <?= '' // $form->field($model, 'Targets') ?>
        <?= $form->field($formModel, 'Targets')->checkboxList(SpellDbc::getTargetFlagOptions()); ?>

        <?= '' // $form->field($model, 'TargetCreatureType') ?>
        <?= $form->field($formModel, 'TargetCreatureType')->checkboxList(SpellDbc::getTargetCreatureTypeOptions()); ?>

        <?= $form->field($model, 'RequiresSpellFocus') ?>
        <?= $form->field($model, 'FacingCasterFlags') ?>
        <?= $form->field($model, 'CasterAuraState') ?>
        <?= $form->field($model, 'TargetAuraState') ?>
        <?= $form->field($model, 'ExcludeCasterAuraState') ?>
        <?= $form->field($model, 'ExcludeTargetAuraState') ?>
        <?= $form->field($model, 'CasterAuraSpell') ?>
        <?= $form->field($model, 'TargetAuraSpell') ?>
        <?= $form->field($model, 'ExcludeCasterAuraSpell') ?>
        <?= $form->field($model, 'ExcludeTargetAuraSpell') ?>
        <?= $form->field($model, 'CastingTimeIndex') ?>
        <?= $form->field($model, 'RecoveryTime') ?>
        <?= $form->field($model, 'CategoryRecoveryTime') ?>
        <?= $form->field($model, 'InterruptFlags') ?>
        <?= $form->field($model, 'AuraInterruptFlags') ?>
        <?= $form->field($model, 'ChannelInterruptFlags') ?>
        <?= $form->field($model, 'ProcTypeMask') ?>
        <?= $form->field($model, 'ProcChance') ?>
        <?= $form->field($model, 'ProcCharges') ?>
        <?= $form->field($model, 'MaxLevel') ?>
        <?= $form->field($model, 'BaseLevel') ?>
        <?= $form->field($model, 'SpellLevel') ?>
        <?= $form->field($model, 'DurationIndex') ?>
        <?= $form->field($model, 'PowerType') ?>
        <?= $form->field($model, 'ManaCost') ?>
        <?= $form->field($model, 'ManaCostPerLevel') ?>
        <?= $form->field($model, 'ManaPerSecond') ?>
        <?= $form->field($model, 'ManaPerSecondPerLevel') ?>
        <?= $form->field($model, 'RangeIndex') ?>
        <?= $form->field($model, 'ModalNextSpell') ?>
        <?= $form->field($model, 'CumulativeAura') ?>
        <?= $form->field($model, 'Totem_1') ?>
        <?= $form->field($model, 'Totem_2') ?>
        <?= $form->field($model, 'Reagent_1') ?>
        <?= $form->field($model, 'Reagent_2') ?>
        <?= $form->field($model, 'Reagent_3') ?>
        <?= $form->field($model, 'Reagent_4') ?>
        <?= $form->field($model, 'Reagent_5') ?>
        <?= $form->field($model, 'Reagent_6') ?>
        <?= $form->field($model, 'Reagent_7') ?>
        <?= $form->field($model, 'Reagent_8') ?>
        <?= $form->field($model, 'ReagentCount_1') ?>
        <?= $form->field($model, 'ReagentCount_2') ?>
        <?= $form->field($model, 'ReagentCount_3') ?>
        <?= $form->field($model, 'ReagentCount_4') ?>
        <?= $form->field($model, 'ReagentCount_5') ?>
        <?= $form->field($model, 'ReagentCount_6') ?>
        <?= $form->field($model, 'ReagentCount_7') ?>
        <?= $form->field($model, 'ReagentCount_8') ?>
        <?= $form->field($model, 'EquippedItemClass') ?>
        <?= $form->field($model, 'EquippedItemSubclass') ?>
        <?= $form->field($model, 'EquippedItemInvTypes') ?>
        <?= $form->field($model, 'Effect_1') ?>
        <?= $form->field($model, 'Effect_2') ?>
        <?= $form->field($model, 'Effect_3') ?>
        <?= $form->field($model, 'EffectDieSides_1') ?>
        <?= $form->field($model, 'EffectDieSides_2') ?>
        <?= $form->field($model, 'EffectDieSides_3') ?>
        <?= $form->field($model, 'EffectBasePoints_1') ?>
        <?= $form->field($model, 'EffectBasePoints_2') ?>
        <?= $form->field($model, 'EffectBasePoints_3') ?>
        <?= $form->field($model, 'EffectMechanic_1') ?>
        <?= $form->field($model, 'EffectMechanic_2') ?>
        <?= $form->field($model, 'EffectMechanic_3') ?>
        <?= $form->field($model, 'ImplicitTargetA_1') ?>
        <?= $form->field($model, 'ImplicitTargetA_2') ?>
        <?= $form->field($model, 'ImplicitTargetA_3') ?>
        <?= $form->field($model, 'ImplicitTargetB_1') ?>
        <?= $form->field($model, 'ImplicitTargetB_2') ?>
        <?= $form->field($model, 'ImplicitTargetB_3') ?>
        <?= $form->field($model, 'EffectRadiusIndex_1') ?>
        <?= $form->field($model, 'EffectRadiusIndex_2') ?>
        <?= $form->field($model, 'EffectRadiusIndex_3') ?>
        <?= $form->field($model, 'EffectAura_1') ?>
        <?= $form->field($model, 'EffectAura_2') ?>
        <?= $form->field($model, 'EffectAura_3') ?>
        <?= $form->field($model, 'EffectAuraPeriod_1') ?>
        <?= $form->field($model, 'EffectAuraPeriod_2') ?>
        <?= $form->field($model, 'EffectAuraPeriod_3') ?>
        <?= $form->field($model, 'EffectChainTargets_1') ?>
        <?= $form->field($model, 'EffectChainTargets_2') ?>
        <?= $form->field($model, 'EffectChainTargets_3') ?>
        <?= $form->field($model, 'EffectItemType_1') ?>
        <?= $form->field($model, 'EffectItemType_2') ?>
        <?= $form->field($model, 'EffectItemType_3') ?>
        <?= $form->field($model, 'EffectMiscValue_1') ?>
        <?= $form->field($model, 'EffectMiscValue_2') ?>
        <?= $form->field($model, 'EffectMiscValue_3') ?>
        <?= $form->field($model, 'EffectMiscValueB_1') ?>
        <?= $form->field($model, 'EffectMiscValueB_2') ?>
        <?= $form->field($model, 'EffectMiscValueB_3') ?>
        <?= $form->field($model, 'EffectTriggerSpell_1') ?>
        <?= $form->field($model, 'EffectTriggerSpell_2') ?>
        <?= $form->field($model, 'EffectTriggerSpell_3') ?>
        <?= $form->field($model, 'EffectSpellClassMaskA_1') ?>
        <?= $form->field($model, 'EffectSpellClassMaskA_2') ?>
        <?= $form->field($model, 'EffectSpellClassMaskA_3') ?>
        <?= $form->field($model, 'EffectSpellClassMaskB_1') ?>
        <?= $form->field($model, 'EffectSpellClassMaskB_2') ?>
        <?= $form->field($model, 'EffectSpellClassMaskB_3') ?>
        <?= $form->field($model, 'EffectSpellClassMaskC_1') ?>
        <?= $form->field($model, 'EffectSpellClassMaskC_2') ?>
        <?= $form->field($model, 'EffectSpellClassMaskC_3') ?>
        <?= $form->field($model, 'SpellVisualID_1') ?>
        <?= $form->field($model, 'SpellVisualID_2') ?>
        <?= $form->field($model, 'SpellIconID') ?>
        <?= $form->field($model, 'ActiveIconID') ?>
        <?= $form->field($model, 'SpellPriority') ?>
        <?= $form->field($model, 'Name_Lang_Mask') ?>
        <?= $form->field($model, 'NameSubtext_Lang_Mask') ?>
        <?= $form->field($model, 'Description_Lang_Mask') ?>
        <?= $form->field($model, 'AuraDescription_Lang_Mask') ?>
        <?= $form->field($model, 'ManaCostPct') ?>
        <?= $form->field($model, 'StartRecoveryCategory') ?>
        <?= $form->field($model, 'StartRecoveryTime') ?>
        <?= $form->field($model, 'MaxTargetLevel') ?>
        <?= $form->field($model, 'SpellClassSet') ?>
        <?= $form->field($model, 'SpellClassMask_1') ?>
        <?= $form->field($model, 'SpellClassMask_2') ?>
        <?= $form->field($model, 'SpellClassMask_3') ?>
        <?= $form->field($model, 'MaxTargets') ?>
        <?= $form->field($model, 'DefenseType') ?>
        <?= $form->field($model, 'PreventionType') ?>
        <?= $form->field($model, 'StanceBarOrder') ?>
        <?= $form->field($model, 'MinFactionID') ?>
        <?= $form->field($model, 'MinReputation') ?>
        <?= $form->field($model, 'RequiredAuraVision') ?>
        <?= $form->field($model, 'RequiredTotemCategoryID_1') ?>
        <?= $form->field($model, 'RequiredTotemCategoryID_2') ?>
        <?= $form->field($model, 'RequiredAreasID') ?>
        <?= $form->field($model, 'SchoolMask') ?>
        <?= $form->field($model, 'RuneCostID') ?>
        <?= $form->field($model, 'SpellMissileID') ?>
        <?= $form->field($model, 'PowerDisplayID') ?>
        <?= $form->field($model, 'SpellDescriptionVariableID') ?>
        <?= $form->field($model, 'SpellDifficultyID') ?>
        <?= $form->field($model, 'Speed') ?>
        <?= $form->field($model, 'EffectRealPointsPerLevel_1') ?>
        <?= $form->field($model, 'EffectRealPointsPerLevel_2') ?>
        <?= $form->field($model, 'EffectRealPointsPerLevel_3') ?>
        <?= $form->field($model, 'EffectMultipleValue_1') ?>
        <?= $form->field($model, 'EffectMultipleValue_2') ?>
        <?= $form->field($model, 'EffectMultipleValue_3') ?>
        <?= $form->field($model, 'EffectPointsPerCombo_1') ?>
        <?= $form->field($model, 'EffectPointsPerCombo_2') ?>
        <?= $form->field($model, 'EffectPointsPerCombo_3') ?>
        <?= $form->field($model, 'EffectChainAmplitude_1') ?>
        <?= $form->field($model, 'EffectChainAmplitude_2') ?>
        <?= $form->field($model, 'EffectChainAmplitude_3') ?>
        <?= $form->field($model, 'EffectBonusMultiplier_1') ?>
        <?= $form->field($model, 'EffectBonusMultiplier_2') ?>
        <?= $form->field($model, 'EffectBonusMultiplier_3') ?>
        <?= $form->field($model, 'Description_Lang_enUS') ?>
        <?= $form->field($model, 'Description_Lang_enGB') ?>
        <?= $form->field($model, 'Description_Lang_koKR') ?>
        <?= $form->field($model, 'Description_Lang_frFR') ?>
        <?= $form->field($model, 'Description_Lang_deDE') ?>
        <?= $form->field($model, 'Description_Lang_enCN') ?>
        <?= $form->field($model, 'Description_Lang_zhCN') ?>
        <?= $form->field($model, 'Description_Lang_enTW') ?>
        <?= $form->field($model, 'Description_Lang_zhTW') ?>
        <?= $form->field($model, 'Description_Lang_esES') ?>
        <?= $form->field($model, 'Description_Lang_esMX') ?>
        <?= $form->field($model, 'Description_Lang_ruRU') ?>
        <?= $form->field($model, 'Description_Lang_ptPT') ?>
        <?= $form->field($model, 'Description_Lang_ptBR') ?>
        <?= $form->field($model, 'Description_Lang_itIT') ?>
        <?= $form->field($model, 'Description_Lang_Unk') ?>
        <?= $form->field($model, 'Name_Lang_enUS') ?>
        <?= $form->field($model, 'Name_Lang_enGB') ?>
        <?= $form->field($model, 'Name_Lang_koKR') ?>
        <?= $form->field($model, 'Name_Lang_frFR') ?>
        <?= $form->field($model, 'Name_Lang_deDE') ?>
        <?= $form->field($model, 'Name_Lang_enCN') ?>
        <?= $form->field($model, 'Name_Lang_zhCN') ?>
        <?= $form->field($model, 'Name_Lang_enTW') ?>
        <?= $form->field($model, 'Name_Lang_zhTW') ?>
        <?= $form->field($model, 'Name_Lang_esES') ?>
        <?= $form->field($model, 'Name_Lang_esMX') ?>
        <?= $form->field($model, 'Name_Lang_ruRU') ?>
        <?= $form->field($model, 'Name_Lang_ptPT') ?>
        <?= $form->field($model, 'Name_Lang_ptBR') ?>
        <?= $form->field($model, 'Name_Lang_itIT') ?>
        <?= $form->field($model, 'Name_Lang_Unk') ?>
        <?= $form->field($model, 'NameSubtext_Lang_enUS') ?>
        <?= $form->field($model, 'NameSubtext_Lang_enGB') ?>
        <?= $form->field($model, 'NameSubtext_Lang_koKR') ?>
        <?= $form->field($model, 'NameSubtext_Lang_frFR') ?>
        <?= $form->field($model, 'NameSubtext_Lang_deDE') ?>
        <?= $form->field($model, 'NameSubtext_Lang_enCN') ?>
        <?= $form->field($model, 'NameSubtext_Lang_zhCN') ?>
        <?= $form->field($model, 'NameSubtext_Lang_enTW') ?>
        <?= $form->field($model, 'NameSubtext_Lang_zhTW') ?>
        <?= $form->field($model, 'NameSubtext_Lang_esES') ?>
        <?= $form->field($model, 'NameSubtext_Lang_esMX') ?>
        <?= $form->field($model, 'NameSubtext_Lang_ruRU') ?>
        <?= $form->field($model, 'NameSubtext_Lang_ptPT') ?>
        <?= $form->field($model, 'NameSubtext_Lang_ptBR') ?>
        <?= $form->field($model, 'NameSubtext_Lang_itIT') ?>
        <?= $form->field($model, 'NameSubtext_Lang_Unk') ?>
        <?= $form->field($model, 'AuraDescription_Lang_Unk') ?>
        <?= $form->field($model, 'AuraDescription_Lang_enUS') ?>
        <?= $form->field($model, 'AuraDescription_Lang_enGB') ?>
        <?= $form->field($model, 'AuraDescription_Lang_koKR') ?>
        <?= $form->field($model, 'AuraDescription_Lang_frFR') ?>
        <?= $form->field($model, 'AuraDescription_Lang_deDE') ?>
        <?= $form->field($model, 'AuraDescription_Lang_enCN') ?>
        <?= $form->field($model, 'AuraDescription_Lang_zhCN') ?>
        <?= $form->field($model, 'AuraDescription_Lang_enTW') ?>
        <?= $form->field($model, 'AuraDescription_Lang_zhTW') ?>
        <?= $form->field($model, 'AuraDescription_Lang_esES') ?>
        <?= $form->field($model, 'AuraDescription_Lang_esMX') ?>
        <?= $form->field($model, 'AuraDescription_Lang_ruRU') ?>
        <?= $form->field($model, 'AuraDescription_Lang_ptPT') ?>
        <?= $form->field($model, 'AuraDescription_Lang_ptBR') ?>
        <?= $form->field($model, 'AuraDescription_Lang_itIT') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- view -->
