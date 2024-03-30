<?php

use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\bootstrap5\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */
/** @var ActiveForm $form */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'SpellDbc Index', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spell-dbc-create">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $attributeGroups = SpellDbcView::getAttributeGroups();
    $tabs = [];
    // Create tabs with DetailView for each attribute group
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => $this->render("_form_partial.php", [
                'form' => $form,
                'formModel' => $formModel,
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

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- view -->