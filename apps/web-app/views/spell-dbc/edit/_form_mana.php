<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'ManaCost',
    'ManaCostPerLevel',
    'ManaPerSecond',
    'ManaPerSecondPerLevel',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>