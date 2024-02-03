<?php

use app\models\SpellDbc;
use yii\bootstrap5\Tabs;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */

$this->title = $model->Name_Lang_enUS;
$this->params['breadcrumbs'][] = ['label' => 'Spells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="view">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    
    echo DetailView::widget([
        'model' => $model,
        'attributes' => SpellDbc::getDetailAttributes(),
    ]);

    $attributeGroups = SpellDbc::getAttributeGroups();
    // Create tabs with DetailView for each attribute group
    $tabs = [];
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => $attributes,
            ]),
        ];
    }

    // Display tabs
    echo Tabs::widget([
        'items' => $tabs,
    ]);
    ?>
    
    <div class="form-group">
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
    </div>

</div><!-- view -->
