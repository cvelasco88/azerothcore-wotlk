<?php

namespace app\helpers;
use app\models\base\DbcActiveRecord;
use yii\helpers\Html;

class DbcView {

    /**
     * @param string $attribute
     * @param string $label
     * @param array $entries
     * @param array $options
     */
    public static function column(string $attribute, string $label, array $entries, array $options = []): array {
        return [
            'attribute' => $attribute,
            'label' => $label,
            'format' => 'raw',
            'value' => function ($model) use ($attribute, $entries, $options) {                
                $currentMask = $model->{$attribute};
                $checkboxes = [];
                $checkboxName = $attribute . '[]';
                foreach ($entries as $value => $label) {
                    $checked = ($currentMask & $value) || ($currentMask === 0 && $value === 0);
                    $checkbox = Html::checkbox($checkboxName, $checked, [
                        'value' => $value,
                        'label' => $label,                        
                    ] + $options);
                    $checkboxes[] = "<div class='checkbox-inline mx-2'>{$checkbox}</div>";
                }

                return implode('', $checkboxes);
            },
            /*'filter' => Html::activeCheckboxList(
                $searchModel,
                $attribute,
                $entries,
                [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        $checkbox = Html::checkbox($name, $checked, ['value' => $value, 'label' => $label]);
                        return "<div class='checkbox-inline'>{$checkbox}</div>";
                    },
                ]
            ),*/
        ];
    }
}