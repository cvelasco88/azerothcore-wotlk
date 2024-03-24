<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'EquippedItemClass',
    'EquippedItemSubclass',
    'EquippedItemInvTypes',
];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>