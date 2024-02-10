<?php

use app\models\TalentDbc;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TalentDbc $model */
/** @var ActiveForm $form */

$this->title = 'Create TalentDbc';
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-dbc-create">

    <?= Html::a(
        'View',
        [
            'view',
            'id' => $model->ID,
        ],
        ['class' => 'btn btn-success']
    ); ?>

    <div class="mb-3"></div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TabID') ?>
    <?= $form->field($model, 'TierID') ?>
    <?= $form->field($model, 'ColumnIndex') ?>
    <?= $form->field($model, 'SpellRank_1') ?>
    <?= $form->field($model, 'SpellRank_2') ?>
    <?= $form->field($model, 'SpellRank_3') ?>
    <?= $form->field($model, 'SpellRank_4') ?>
    <?= $form->field($model, 'SpellRank_5') ?>
    <?= $form->field($model, 'SpellRank_6') ?>
    <?= $form->field($model, 'SpellRank_7') ?>
    <?= $form->field($model, 'SpellRank_8') ?>
    <?= $form->field($model, 'SpellRank_9') ?>
    <?= $form->field($model, 'PrereqTalent_1') ?>
    <?= $form->field($model, 'PrereqTalent_2') ?>
    <?= $form->field($model, 'PrereqTalent_3') ?>
    <?= $form->field($model, 'PrereqRank_1') ?>
    <?= $form->field($model, 'PrereqRank_2') ?>
    <?= $form->field($model, 'PrereqRank_3') ?>
    <?= $form->field($model, 'Flags') ?>
    <?= $form->field($model, 'RequiredSpellID') ?>
    <?= $form->field($model, 'CategoryMask_1') ?>
    <?= $form->field($model, 'CategoryMask_2') ?>
    
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- talent-dbc-create -->
