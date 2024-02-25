<?php

use app\helpers\DbcView;
use app\models\SpellDbc;
use yii\bootstrap5\Tabs;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */

$this->title = $model->Name_Lang_esES;
$this->params['breadcrumbs'][] = ['label' => 'Spells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="spell-dbc-view">

    <h1><?= Html::encode($model->Name_Lang_esES) ?></h1>

    <div class="mb-3"></div>

    <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
    
    <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>

    <div class="mb-3"></div>

    <?php
    
    $tabs = [
        [
            'label' => "Detail",
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => SpellDbc::viewColumn(SpellDbc::getDetailAttributes()),
            ]),
        ]
    ];
    $attributeGroups = SpellDbc::getAttributeGroups();
    // Create tabs with DetailView for each attribute group
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => SpellDbc::viewColumn($attributes),
            ]),
        ];
    }

    // Display tabs
    echo Tabs::widget([
        'items' => $tabs,
    ]);
    ?>

</div><!-- view -->
