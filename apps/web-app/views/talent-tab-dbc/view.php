<?php

use app\models\TalentDbc;
use app\models\TalentTabDbc;
use yii\bootstrap5\Tabs;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TalentTabDbc $model */
/** @var ActiveForm $form */

$this->title = 'View TalentTabDbc: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="talent-dbc-view">

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
    function handledAttributes(array $attributes) {
        $customAttributes = [];

        foreach ($attributes as $attribute) {
            switch ($attribute) {
                // Add more customizations for other attributes as needed
                default:
                    $customAttributes[] = $attribute;
                    break;
            }
        }

        return $customAttributes;
    }

    $tabs = [
        [
            'label' => "Detail",
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => handledAttributes(TalentTabDbc::getDetailAttributes()),
            ]),
        ]
    ];
    $attributeGroups = TalentTabDbc::getAttributeGroups();
    // Create tabs with DetailView for each attribute group
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => $attributes,
            ]),
        ];
    }

    $tabs[] = [
        'label' => 'Talents',
        'content' => GridView::widget([
            'pager' => [
                'class' => yii\bootstrap5\LinkPager::class,
            ],
            'dataProvider' => new \yii\data\ActiveDataProvider([
                'query' => TalentDbc::find()->where(['TabID' => $model->ID]),
            ]),
            'columns' => (new TalentDbc())->attributes(),
        ]),
    ];

    // Display tabs
    echo Tabs::widget([
        'items' => $tabs,
    ]);
    ?>

</div><!-- talent-dbc-view -->