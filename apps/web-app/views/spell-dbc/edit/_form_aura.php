<?php
use app\helpers\custom\SpellDbcView;

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

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>