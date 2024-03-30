<?php

use app\helpers\DbcLanguage;
use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\bootstrap5\ButtonDropdown;
use yii\bootstrap5\Tabs;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */

$nameLang = 'Name_Lang_' . DbcLanguage::getLanguageFromLocale(Yii::$app->language);
$this->title = 'View: ' . $model->{$nameLang};
$this->params['breadcrumbs'][] = ['label' => 'SpellDbc Index', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="spell-dbc-view">

    <h1>
        <?= Html::encode($model->{$nameLang}) ?>
    </h1>

    <div class="mb-3"></div>

    <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>

    <?= ButtonDropdown::widget([
        'label' => 'Actions',
        'buttonOptions' => [
            // 'class' => 'btn btn-primary',
        ],
        'dropdown' => [
            'items' => [
                [
                    'label' => 'Clone',
                    'url' => ['spell-dbc/clone', 'id' => $model->ID],
                    'linkOptions' => ['class' => 'option', 'id' => 'clone'],
                ],
                '<div class="dropdown-divider"></div>', // Divider line between items
                [
                    'label' => 'Delete',
                    'url' => ['delete', 'id' => $model->ID],
                    'linkOptions' => [
                        'class' => 'dropdown-item text-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ],
                ],
                // Add other options here
            ],
        ],
    ]); ?>

    <div class="mb-3"></div>

    <?php
    $attributeGroups = SpellDbcView::getAttributeGroups(); 
    $tabs = [];
    // Create tabs with DetailView for each attribute group
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => $this->render("_view_partial.php", [
                'model' => $model, 
                'attributes' => $attributes
            ]),
        ];
    }

    // Display tabs
    echo Tabs::widget([
        'items' => $tabs,
    ]);
    ?>

</div><!-- view -->