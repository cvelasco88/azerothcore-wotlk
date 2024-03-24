<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
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
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>