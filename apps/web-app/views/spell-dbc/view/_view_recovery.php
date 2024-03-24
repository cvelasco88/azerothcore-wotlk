<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'RecoveryTime',
    'CategoryRecoveryTime',
    'StartRecoveryCategory',
    'StartRecoveryTime',
];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>