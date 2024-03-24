<?php
use app\helpers\custom\SpellDbcView;
use yii\widgets\DetailView;

$attributes = [
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
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>