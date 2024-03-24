<?php

use app\helpers\custom\SpellDbcView;
use app\models\SpellDbc;
use yii\bootstrap5\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SpellDbc $model */
/** @var ActiveForm $form */

$this->title = 'Update: ' . $model->Name_Lang_esES;
$this->params['breadcrumbs'][] = ['label' => 'SpellDbc Index', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spell-dbc-update">

    <h1>
        <?= Html::encode($model->Name_Lang_esES) ?>
    </h1>

    <div class="mb-3"></div>

    <?= Html::a('View', ['view', 'id' => $model->ID], ['class' => 'btn btn-success']) ?>

    <div class="mb-3"></div>

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $attributeGroups = SpellDbcView::getAttributeGroups(); /*[
        "Details" => "edit/_form_general.php",
        "AttributesExt" => "edit/_form_attributes_ext.php",
        "Recovery" => "edit/_form_recovery.php",
        "Aura" => "edit/_form_aura.php",
        "Mana" => "edit/_form_mana.php",
        "Totem" => "edit/_form_totem.php",
        "Reagent" => "edit/_form_reagent.php",
        "EquippedItem" => "edit/_form_equipped_item.php",
        "Effect" => "edit/_form_effects.php",
        "ImplicitTarget" => "edit/_form_implicit_target.php",
        "Translations" => "edit/_form_translations.php",
        "SpellClass" => "edit/_form_spell_class.php",
        "Required" => "edit/_form_required.php",
        "Interrupt" => "edit/_form_interrupt.php",
        "Other" => "edit/_form_others.php",
    ];*/
    $tabs = [];
    // Create tabs with DetailView for each attribute group
    foreach ($attributeGroups as $groupName => $attributes) {
        $tabs[] = [
            'label' => $groupName,
            'content' => $this->render("edit/_form_partial.php", [
                'form' => $form,
                'formModel' => $formModel,
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
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- view -->