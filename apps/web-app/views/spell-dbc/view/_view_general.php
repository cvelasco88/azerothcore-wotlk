<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

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

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>