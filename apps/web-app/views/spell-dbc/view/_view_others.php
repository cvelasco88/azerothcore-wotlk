<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

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

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>