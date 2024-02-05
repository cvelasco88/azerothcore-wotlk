<?php

/** @var yii\web\View $this */
/** @var yii\data\ArrayDataProvider $dataProvider */

use yii\helpers\Html;
use yii\widgets\ListView;


$this->title = 'List of DBC Files';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-list-dbcs">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_dbcListItem',
        'summary' => false,
    ]) ?>
</div>