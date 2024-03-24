<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'ImplicitTargetA_1',
    'ImplicitTargetA_2',
    'ImplicitTargetA_3',
    'ImplicitTargetB_1',
    'ImplicitTargetB_2',
    'ImplicitTargetB_3',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>