<?php
use app\helpers\custom\SpellDbcView;

$attributes = [
    'Reagent_1',
    'Reagent_2',
    'Reagent_3',
    'Reagent_4',
    'Reagent_5',
    'Reagent_6',
    'Reagent_7',
    'Reagent_8',
    //
    'ReagentCount_1',
    'ReagentCount_2',
    'ReagentCount_3',
    'ReagentCount_4',
    'ReagentCount_5',
    'ReagentCount_6',
    'ReagentCount_7',
    'ReagentCount_8',
];
?>

<?php
$formField = SpellDbcView::editColumns($form, $formModel, $model, $attributes);
foreach($formField as $formField) {
    echo $formField;
}
?>