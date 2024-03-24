<?php
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\widgets\DetailView;

$attributes = [
    'RequiredAuraVision',
    'RequiredTotemCategoryID_1',
    'RequiredTotemCategoryID_2',
    'RequiredAreasID',
];
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>