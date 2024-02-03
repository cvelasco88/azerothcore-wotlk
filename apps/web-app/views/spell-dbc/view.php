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
    
    function handledAttributes(array $attributes) {
        $targetFlagOptions = SpellDbc::getTargetFlagOptions();
        $targetCreatureTypes = SpellDbc::getTargetCreatureTypes();
        

        $customAttributes = [];

        foreach ($attributes as $attribute) {
            switch ($attribute) {
                case 'PowerType':
                    $customAttributes[] = [
                        'attribute' => 'PowerType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentPowerTypeName();
                        },
                    ];
                    break;
                case 'DispelType':
                    $customAttributes[] = [
                        'attribute' => 'DispelType',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentDispelTypeName();
                        },
                    ];
                    break;
                case 'Targets':
                    $customAttributes[] = [
                        'attribute' => 'Targets',
                        'format' => 'raw',
                        'value' => function ($model) use ($targetFlagOptions) {
                            /** @var SpellDbc $model */
                            // return \yii\helpers\Html::activeDropDownList($model, 'Targets', $targetFlagOptions, ['multiple' => true]);
                            // If you want to use checkboxes, use the following instead:
                            return \yii\helpers\Html::activeCheckboxList($model, 'Targets', $targetFlagOptions, [
                                'itemOptions' => [
                                    'disabled' => true
                                ]
                            ]);
                        },
                    ];
                    break;
                case 'TargetCreatureType':
                    $customAttributes[] = [
                        'attribute' => 'TargetCreatureType',
                        'format' => 'raw',
                        'value' => function ($model) use ($targetCreatureTypes) {
                            /** @var SpellDbc $model */
                            // return \yii\helpers\Html::activeDropDownList($model, 'TargetCreatureType', $targetCreatureTypes, ['multiple' => true]);
                            // If you want to use checkboxes, use the following instead:
                            return \yii\helpers\Html::activeCheckboxList($model, 'TargetCreatureType', $targetCreatureTypes, [
                                'itemOptions' => [
                                    'disabled' => true
                                ]
                            ]);
                        },
                    ];
                    break;
                // Add more customizations for other attributes as needed
                default:
                    $customAttributes[] = $attribute;
                    break;
            }
        }

        return $customAttributes;
    }

    $tabs = [
        [
            'label' => "Detail",
            'content' => DetailView::widget([
                'model' => $model,
                'attributes' => handledAttributes(SpellDbc::getDetailAttributes()),
            ]),
        ]
    ];
    $attributeGroups = SpellDbc::getAttributeGroups();
    // Create tabs with DetailView for each attribute group
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
