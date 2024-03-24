<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'AttributesEx',
    'AttributesEx2',
    'AttributesEx3',
    'AttributesEx4',
    'AttributesEx5',
    'AttributesEx6',
    'AttributesEx7',
]
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>