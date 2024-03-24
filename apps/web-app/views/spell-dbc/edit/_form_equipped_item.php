<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'EquippedItemClass',
    'EquippedItemSubclass',
    'EquippedItemInvTypes',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>