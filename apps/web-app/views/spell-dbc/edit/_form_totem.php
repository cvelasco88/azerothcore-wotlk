<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'Totem_1',
    'Totem_2',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>