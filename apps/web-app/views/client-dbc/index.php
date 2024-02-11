<?php

/** @var yii\web\View $this */
/** @var yii\data\ArrayDataProvider $dataProvider */

use yii\helpers\Html;
use yii\widgets\ListView;


$this->title = 'Index of DBC Files';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="client-dbc-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_indexItem',
        'summary' => false,
    ]) ?>
</div>