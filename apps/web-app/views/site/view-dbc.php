<?php

use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var string $fileName */
/** @var array $records */

$this->title = 'View DBC File: ' . $fileName;
$this->params['breadcrumbs'][] = ['label' => 'List of DBC Files', 'url' => ['list-dbcs']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-view-dbc">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back to List', ['list-dbcs'], ['class' => 'btn btn-primary']) ?>
    </p>

    <h2>Records:</h2>
    <?php 
    $reflectionClass = new \ReflectionClass($modelClass);
    // Get all properties of the target class
    $properties = $reflectionClass->getProperties();
    $columns = array_map(function($prop) { return $prop->name; }, $properties);
    echo GridView::widget([
            'dataProvider' => new \yii\data\ArrayDataProvider([
                'allModels' => $records,
                'pagination' => false,
            ]),
            'columns' => $columns,
        ]); 
    ?>
</div>
