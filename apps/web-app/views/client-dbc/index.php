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

    <?php if ($dataProvider->totalCount > 0): ?>
        <?= ListView::widget([
            'pager' => [
                'class' => yii\bootstrap5\LinkPager::class,
            ],
            'dataProvider' => $dataProvider,
            'itemView' => '_indexItem',
            'summary' => false,
        ]) ?>
    <?php else: ?>
        <p>No DBC files found. Please make sure to place the ".dbc" files in the "<code>@app/data</code>" folder.</p>
    <?php endif; ?>
</div>