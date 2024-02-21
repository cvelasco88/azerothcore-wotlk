<?php

use app\models\TalentTabDbc;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TalentTabDbc $model */
/** @var ActiveForm $form */

$this->title = 'Create TalentTabDbc';
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talent-tab-dbc-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID') ?>
    <?= $form->field($model, 'Name_Lang_enUS')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_enGB')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_koKR')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_frFR')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_deDE')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_enCN')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_zhCN')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_enTW')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_zhTW')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_esES')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_esMX')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_ruRU')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_ptPT')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_ptBR')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_itIT')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_Unk')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Name_Lang_Mask')->textInput() ?>
    <?= $form->field($model, 'SpellIconID')->textInput() ?>
    
    <?= '' // $form->field($model, 'RaceMask')->textInput() ?>
    <?= '' // $form->field($model, 'ClassMask')->textInput() ?>
    <?= $form->field($formModel, 'raceMask')->checkboxList(TalentTabDbc::getRaceMaskOptions()); ?>
    <?= $form->field($formModel, 'classMask')->checkboxList(TalentTabDbc::getClassMaskOptions()); ?>

    <?= $form->field($model, 'PetTalentMask')->textInput() ?>
    <?= $form->field($model, 'OrderIndex')->textInput() ?>
    <?= $form->field($model, 'BackgroundFile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- talent-dbc-create -->
