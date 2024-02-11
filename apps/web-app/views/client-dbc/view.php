<?php

use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var string $fileName */
/** @var array $records */

$this->title = 'View DBC File: ' . $fileName;
$this->params['breadcrumbs'][] = ['label' => 'Index of DBC Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('@web/js/client-dbc-ajax-functions.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<div class="client-dbc-view">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <p>
        <?= Html::a('Back to List', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= Html::button('Validate Records', [
            'class' => 'btn btn-primary',
            'onclick' => 'validateRecords(this, "' . $fileName . '")'
        ]) ?>
    <?= Html::button('Import Data', [
        'class' => 'btn btn-primary',
        'onclick' => 'importData(this, "' . $fileName . '")',
        'confirm' => 'Are you sure you want to import data?'
    ]) ?>
    
    <h2>Records:</h2>
    <?php
    $reflectionClass = new \ReflectionClass($targetClass);
    // Get all properties of the target class
    $properties = $reflectionClass->getProperties();
    $columns = array_map(function ($prop) {
        return $prop->name;
    }, $properties);

    echo GridView::widget([
        'pager' => [
            'class' => yii\bootstrap5\LinkPager::class,
        ],
        'dataProvider' => $dataProvider,
        'columns' => $columns,
    ]);
    ?>
</div>