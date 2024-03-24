<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'ManaCost',
    'ManaCostPerLevel',
    'ManaPerSecond',
    'ManaPerSecondPerLevel',
];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>