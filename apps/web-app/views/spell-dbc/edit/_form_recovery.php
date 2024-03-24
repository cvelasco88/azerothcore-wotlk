<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'RecoveryTime',
    'CategoryRecoveryTime',
    'StartRecoveryCategory',
    'StartRecoveryTime',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>