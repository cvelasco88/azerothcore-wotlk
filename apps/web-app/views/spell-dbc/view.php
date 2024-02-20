<?php

use app\helpers\DbcView;
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

    <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
    
    <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>

    <div class="mb-3"></div>

    <?php
    
    function handledAttributes(array $attributes) {
        $targetFlagOptions = SpellDbc::getTargetFlagOptions();
        $targetCreatureTypes = SpellDbc::getTargetCreatureTypeOptions();
        $spellAttributesOptions = SpellDbc::getSpellAttributesOptions();
        
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
                    $customAttributes[] = DbcView::columnInline('Targets', SpellDbc::getTargetFlagOptions(), ['onclick' => 'return false;']);
                    break;
                case 'TargetCreatureType':
                    $customAttributes[] = DbcView::columnInline('TargetCreatureType', SpellDbc::getTargetCreatureTypeOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Attributes':
                    $customAttributes[] = DbcView::columnInline('Attributes', SpellDbc::getSpellAttributesOptions(), ['onclick' => 'return false;']);
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

</div><!-- view -->
