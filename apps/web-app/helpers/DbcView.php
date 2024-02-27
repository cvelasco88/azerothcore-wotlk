<?php

namespace app\helpers;

use yii\helpers\Html;

class DbcView
{
    public static function exportButton(array $url) {

        /* <?= Html::a('Export', ['client-dbc/export', 'className' => SpellDbc::class], 
        [
            'class' => 'btn btn-warning',
            'data' => [
                'confirm' => 'Are you sure you want to Export this data?',
                'method' => 'post',
            ],
        ]) ?> */

        $exportUrl = \yii\helpers\Url::to($url);

        return Html::button(
            'Export', 
            [
                'class' => 'btn btn-warning',
                'onclick' => '
                    if (confirm("Are you sure you want to Export this data?")) {
                        $.ajax({
                            url: "' . $exportUrl . '",
                            type: "POST", // Adjust the request method as needed
                            beforeSend: function() {
                                // Show loading spinner or some indication to the user
                                // $("#loadingIndicator").show();
                                console.log("Start export...");
                            },
                            success: function(response) {
                                // Handle success response, if needed
                                console.log("Operation completed successfully.");
                            },
                            error: function(xhr, status, error) {
                                // Handle error, if any
                                console.error("Error:", error);
                            },
                            complete: function() {
                                // Hide loading spinner or indication when request is complete
                                // $("#loadingIndicator").hide();
                                console.log("Export finished");
                            }
                        });
                    }
                ',
            ]
        );
    }

    /**
     * @param string $attribute
     * @param string $label
     * @param array $entries
     * @param array $options
     */
    public static function column(string $attribute, string $label, array $entries, array $options = []): array
    {
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
    public static function columnInline(string $attribute, array $entries, array $options = []): array
    {
        return self::columnInlineCustom($attribute, function () use ($entries) {
            return $entries;
        }, $options);
    }

    /**
     * @param string $attribute
     * @param callable $fnEntries
     * @param array $options
     */
    public static function columnInlineCustom(string $attribute, callable $fnEntries, array $options = []): array
    {
        return [
            'attribute' => $attribute,
            'format' => 'raw',
            'value' => function ($model) use ($attribute, $fnEntries, $options) {
                $entries = call_user_func($fnEntries, $model);
                $selectedItems = self::getPresentEntries($entries, $model->{$attribute});
                if(count($selectedItems) == 0) {
                    return $model->{$attribute};
                } else {
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
            }
        ];
    }

    // PRIVATE METHODS

    private static function getPresentEntries($entries, $value)
    {
        $presentFlags = [];
        // Iterate over each constant
        foreach ($entries as $flag => $label) {
            // Check if the constant is present in the $value
            if ($value > 0 && $value & $flag || ($flag === 0 && $value === 0)) {
                $presentFlags[] = $flag;
            }
        }
        return $presentFlags;
    }
}