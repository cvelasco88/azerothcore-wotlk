<?php

use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var string $fileName */
/** @var array $records */

$this->title = 'View DBC File: ' . $fileName;
$this->params['breadcrumbs'][] = ['label' => 'Index of DBC Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsVar('fileName', $fileName);
$this->registerJsVar('batchSize', $batchSize);
$this->registerJsVar('totalRecords', $totalRecords);
$this->registerJsFile('@web/js/client-dbc-ajax-functions.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<style>
    .hidden-progress {
        display: none;
    }
</style>

<div class="client-dbc-view">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <div class="validation-progress hidden-progress">
        <h2>Validation Progress</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only">0% Complete</span>
            </div>
        </div>
        <div class="status"></div>
    </div>

    <div class="import-progress hidden-progress">
        <h2>Import Progress</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only">0% Complete</span>
            </div>
        </div>
        <div class="status"></div>
    </div>

    <div class="mb-3"></div>

    <?= Html::button('Validate Records', [
            'class' => 'btn btn-primary',
            'onclick' => 'validateRecords(this)'
        ]) ?>
    <?= Html::button('Import Records', [
        'class' => 'btn btn-primary',
        'onclick' => 'importRecords(this)',
        'confirm' => 'Are you sure you want to import all records?'
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