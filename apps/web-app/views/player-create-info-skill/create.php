<?php

use app\models\PlayerCreateInfoSkill;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PlayerCreateInfoSkill $model */
/** @var ActiveForm $form */

$this->title = 'Create Player Create Info Skill';
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="player-create-info-skill-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= '' //$form->field($model, 'raceMask') ?>
    <?= '' //$form->field($model, 'classMask') ?>

    <?php
    // Generating checkbox list for raceMask
    $raceOptions = PlayerCreateInfoSkill::getRaceMaskOptions();

    echo $form->field($model, 'raceMask')->checkboxList($raceOptions, [
        'item' => function ($index, $label, $name, $checked, $value) {
            $checked = ($value == 0);
            $checkbox = Html::checkbox('raceMask[]', $checked, [
                'value' => $value,
                'label' => $label,
            ]);
            return "<div class='checkbox-inline mx-2'>{$checkbox}</div>";
        },
    ]);
    ?>

    <?php
    // Generating checkbox list for classMask
    $classOptions = PlayerCreateInfoSkill::getClassMaskOptions();

    echo $form->field($model, 'classMask')->checkboxList($classOptions, [
        'item' => function ($index, $label, $name, $checked, $value) {
            $checked = ($value == 0);
            $checkbox = Html::checkbox('classMask[]', $checked, [
                'value' => $value,
                'label' => $label,
            ]);
            return "<div class='checkbox-inline mx-2'>{$checkbox}</div>";
        },
    ]);
    ?>

    <?= $form->field($model, 'skill') ?>
    <?= $form->field($model, 'rank') ?>
    <?= $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- player-create-info-skill-create -->