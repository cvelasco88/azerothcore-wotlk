<?php

use app\models\PlayerCreateInfoSkill;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PlayerCreateInfoSkill $model */
/** @var ActiveForm $form */

$this->title = 'Create Player Create Info Skill';
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="player-create-info-skill-view">

    <?php echo Html::a('Update', [
        'update',
        'raceMask' => $model->raceMask,
        'classMask' => $model->classMask,
        'skill' => $model->skill
    ], ['class' => 'btn btn-primary']); ?>

    <?php echo Html::a('Delete', [
        'delete',
        'raceMask' => $model->raceMask,
        'classMask' => $model->classMask,
        'skill' => $model->skill
    ], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this record?',
            'method' => 'post',
        ],
    ]); ?>

    <div class="mb-3"></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'raceMask',
                'label' => 'Race Mask',
                'format' => 'raw',
                'value' => function ($model) {
                    $raceOptions = PlayerCreateInfoSkill::getRaceMaskOptions();
                    $selectedRaceMask = $model->raceMask;

                    $checkboxes = [];
                    foreach ($raceOptions as $value => $label) {
                        $checked = ($selectedRaceMask & $value) || ($selectedRaceMask === 0 && $value === 0);
                        $checkbox = Html::checkbox('raceMask[]', $checked, [
                            'value' => $value,
                            'label' => $label,
                            // 'disabled' => true,
                            'onclick' => 'return false;', // Disabled click
                        ]);
                        $checkboxes[] = "<div class='checkbox-inline mx-2'>{$checkbox}</div>";
                    }

                    return implode('', $checkboxes);
                },
            ],
            [
                'attribute' => 'classMask',
                'label' => 'Class Mask',
                'format' => 'raw',
                'value' => function ($model) {
                    $classOptions = PlayerCreateInfoSkill::getClassMaskOptions();
                    $selectedClassMask = $model->classMask;

                    $checkboxes = [];
                    foreach ($classOptions as $value => $label) {
                        $checked = ($selectedClassMask & $value) || ($selectedClassMask === 0 && $value === 0);
                        $checkbox = Html::checkbox('classMask[]', $checked, [
                            'value' => $value,
                            'label' => $label,
                            // 'disabled' => true,
                            'onclick' => 'return false;', // Disabled click
                        ]);
                        $checkboxes[] = "<div class='checkbox-inline mx-2'>{$checkbox}</div>";
                    }

                    return implode('', $checkboxes);
                },
            ],
            'skill',
            'rank',
            'comment',
        ],
    ]) ?>

</div><!-- player-create-info-skill-view -->