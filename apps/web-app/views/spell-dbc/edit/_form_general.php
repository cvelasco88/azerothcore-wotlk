<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
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
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>