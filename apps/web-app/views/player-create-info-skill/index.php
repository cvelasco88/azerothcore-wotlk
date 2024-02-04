<?php
/** @var yii\web\View $this */
use app\models\PlayerCreateInfoSkill;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;

// Function to map raceMask values to class names
function mapRaceMask(PlayerCreateInfoSkill $model)
{
    return $model->getRaceMaskName($model->raceMask) ?? $model->raceMask;
}

// Function to map classMask values to class names
function mapClassMask(PlayerCreateInfoSkill $model)
{
    return $model->getClassMaskName($model->classMask) ?? $model->classMask;
}

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => array_merge(
        // ['class' => 'yii\grid\SerialColumn'],
        [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ]
        ],
        [ 
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
                /*'filter' => Html::activeCheckboxList(
                    $searchModel,
                    'raceMask',
                    PlayerCreateInfoSkill::getRaceMaskOptions(),
                    [
                        'item' => function ($index, $label, $name, $checked, $value) {
                            $checkbox = Html::checkbox($name, $checked, ['value' => $value, 'label' => $label]);
                            return "<div class='checkbox-inline'>{$checkbox}</div>";
                        },
                    ]
                ),*/
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
        ]
        // Add more columns as needed
    ),
]);
?>