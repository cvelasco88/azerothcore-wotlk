<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'RequiredAuraVision',
    'RequiredTotemCategoryID_1',
    'RequiredTotemCategoryID_2',
    'RequiredAreasID',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>