<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
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
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>