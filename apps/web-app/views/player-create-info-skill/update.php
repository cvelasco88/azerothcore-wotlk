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
<div class="player-create-info-skill-update">

    <?php echo Html::a(
        'View',
        [
            'view',
            'raceMask' => $model->raceMask,
            'classMask' => $model->classMask,
            'skill' => $model->skill
        ],
        ['class' => 'btn btn-success']
    ); ?>

    <div class="mb-3"></div>

    <?php $form = ActiveForm::begin(); ?>

    <?= '' //$form->field($model, 'raceMask') ?>
    <?= '' //$form->field($model, 'classMask') ?>

    <?= $form->field($formModel, 'raceMask')->checkboxList(PlayerCreateInfoSkill::getRaceMaskOptions()); ?>
    <?= $form->field($formModel, 'classMask')->checkboxList(PlayerCreateInfoSkill::getClassMaskOptions()); ?>
    
    <?= $form->field($model, 'skill') ?>
    <?= $form->field($model, 'rank') ?>
    <?= $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- player-create-info-skill-update -->