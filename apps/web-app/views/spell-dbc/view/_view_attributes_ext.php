<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'AttributesEx',
    'AttributesEx2',
    'AttributesEx3',
    'AttributesEx4',
    'AttributesEx5',
    'AttributesEx6',
    'AttributesEx7',
]
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::editColumns($form, $formModel, $model, $attributes),
]) ?>