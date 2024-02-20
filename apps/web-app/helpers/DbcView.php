<?php

namespace app\helpers;
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
                foreach ($entries as $value => $valueLabel) {
                    $checked = ($currentMask & $value) || ($currentMask === 0 && $value === 0);
                    $checkbox = Html::checkbox($checkboxName, $checked, [
                        'value' => $value,
                        'label' => $valueLabel,                        
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

    /**
     * @param string $attribute
     * @param array $entries
     * @param array $options
     */
    public static function columnInline(string $attribute, array $entries, array $options = []): array {

        return [
            'attribute' => $attribute,
            'format' => 'raw',
            'value' => function ($model) use ($attribute, $entries, $options) {
                $selectedItems = self::getPresentEntries($entries, $model->{$attribute});
                $checkboxName = $attribute . '[]';
                return Html::activeCheckboxList($model, $checkboxName, $entries, [
                    'item' => function ($index, $label, $name, $checked, $value) use ($selectedItems, $options) {
                        $isChecked = in_array($value, $selectedItems);
                        return Html::checkbox($name, $isChecked, [
                            'value' => $value,
                            'label' => $label,
                            'style' => 'margin-right: 2px; margin-left: 10px;'
                        ] + $options);
                    }
                ]);
            }
        ];
    }

    // PRIVATE METHODS

    private static function getPresentEntries($entries, $value) {
        $presentFlags = [];
        // Iterate over each constant
        foreach ($entries as $flag => $label) {
            // Check if the constant is present in the $value
            if ($value & $flag || ($flag === 0 && $value === 0)) {
                $presentFlags[] = $flag;
            }
        }
        return $presentFlags;
    }
}