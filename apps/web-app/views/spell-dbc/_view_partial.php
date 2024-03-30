<?php
use app\helpers\custom\SpellDbcView;
use yii\widgets\DetailView;
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => SpellDbcView::viewColumns($attributes),
]) ?>