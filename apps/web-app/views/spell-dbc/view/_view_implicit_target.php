<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'ImplicitTargetA_1',
    'ImplicitTargetA_2',
    'ImplicitTargetA_3',
    'ImplicitTargetB_1',
    'ImplicitTargetB_2',
    'ImplicitTargetB_3',
];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>