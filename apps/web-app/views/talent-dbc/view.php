<?php

use app\models\TalentDbc;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TalentDbc $model */
/** @var ActiveForm $form */

$this->title = 'View: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'TalentDbc Index', 'url' => ['index']];
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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'TabID',
            'TierID',
            'ColumnIndex',
            'SpellRank_1',
            'SpellRank_2',
            'SpellRank_3',
            'SpellRank_4',
            'SpellRank_5',
            'SpellRank_6',
            'SpellRank_7',
            'SpellRank_8',
            'SpellRank_9',
            'PrereqTalent_1',
            'PrereqTalent_2',
            'PrereqTalent_3',
            'PrereqRank_1',
            'PrereqRank_2',
            'PrereqRank_3',
            'Flags',
            'RequiredSpellID',
            'CategoryMask_1',
            'CategoryMask_2',
        ],
    ]) ?>

</div><!-- talent-dbc-view -->
