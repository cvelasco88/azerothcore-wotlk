<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'InterruptFlags',
    'AuraInterruptFlags',
    'ChannelInterruptFlags',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>