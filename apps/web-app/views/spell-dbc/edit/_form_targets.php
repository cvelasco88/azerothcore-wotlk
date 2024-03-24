<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'Targets',
    'TargetCreatureType',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>