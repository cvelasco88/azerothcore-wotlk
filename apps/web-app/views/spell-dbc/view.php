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
<div class="spell-dbc-view">

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
                case 'Mechanic':
                    $customAttributes[] = [
                        'attribute' => 'Mechanic',
                        'value' => function ($model) {
                            /** @var SpellDbc $model */
                            return $model->getCurrentMechanicName();
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
                case 'ShapeshiftMask':
                    $customAttributes[] = DbcView::columnInline('ShapeshiftMask', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'ShapeshiftExclude':
                    $customAttributes[] = DbcView::columnInline('ShapeshiftExclude', SpellDbc::getSpellShapeshiftMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'InterruptFlags':
                    $customAttributes[] = DbcView::columnInline('InterruptFlags', SpellDbc::getSpellInterruptFlagOptions(), ['onclick' => 'return false;']);
                    break;
                case 'SchoolMask':
                    $customAttributes[] = DbcView::columnInline('SchoolMask', SpellDbc::getSchoolMaskOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Name_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('Name_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'NameSubtext_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('NameSubtext_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'Description_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('Description_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'AuraDescription_Lang_Mask':
                    $customAttributes[] = DbcView::columnInline('AuraDescription_Lang_Mask', SpellDbc::getLanguageOptions(), ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemClass':
                    $customAttributes[] = DbcView::columnInline('EquippedItemClass', SpellDbc::getEquippedItemClassOptions(), ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemSubclass':
                    $customAttributes[] = DbcView::columnInlineCustom('EquippedItemSubclass', function($model) {
                        return SpellDbc::getEquippedItemSubclassOptions($model, $model->EquippedItemClass);
                    }, ['onclick' => 'return false;']);
                    break;
                case 'EquippedItemInvTypes':
                    $customAttributes[] = DbcView::columnInline('EquippedItemInvTypes', SpellDbc::getEquippedItemInvTypeOptions(), ['onclick' => 'return false;']);
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
                'attributes' => handledAttributes($attributes),
            ]),
        ];
    }

    // Display tabs
    echo Tabs::widget([
        'items' => $tabs,
    ]);
    ?>

</div><!-- view -->
