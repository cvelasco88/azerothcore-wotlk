<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'SpellClassSet',
    'SpellClassMask_1',
    'SpellClassMask_2',
    'SpellClassMask_3',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>