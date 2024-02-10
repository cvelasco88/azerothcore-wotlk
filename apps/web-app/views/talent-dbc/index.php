<?php
/** @var yii\web\View $this */
use app\models\TalentDbc;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Json;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;

// Load the talent_ids.json file
$talentIdsJson = file_get_contents(Yii::getAlias('@app/data') . DIRECTORY_SEPARATOR . 'talent_ids.json');
$talentIds = Json::decode($talentIdsJson);

// Define a function to get the name based on ID
function getNameById($id, $talentIds)
{
    foreach ($talentIds as $talent) {
        if (strcmp($talent['id'], $id) == 0) {
            return $talent['name'];
        }
    }
    // If name is not found, return the ID
    return $id;
}

?>

<?= Html::a('Create TalentDbc', ['create'], ['class' => 'btn btn-success']) ?>

<div class="mb-3"></div>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => array_merge(
        // ['class' => 'yii\grid\SerialColumn'],
        [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ]
        ],        
        [
            [
                // 'attribute' => 'ID',
                'label' => 'Talent Name',
                'value' => function ($model) use ($talentIds) {
                    /** @var TalentDbc $model */
                    return getNameById($model->ID, $talentIds);
                },
            ],
            'TabID',
            'TierID',
            'ColumnIndex',
            'SpellRank_1',
            'SpellRank_2',
            'SpellRank_3',
            'SpellRank_4',
            'SpellRank_5',
            'SpellRank_6',
            'SpellRank_7',
            'SpellRank_8',
            'SpellRank_9',
            'PrereqTalent_1',
            'PrereqTalent_2',
            'PrereqTalent_3',
            'PrereqRank_1',
            'PrereqRank_2',
            'PrereqRank_3',
            'Flags',
            'RequiredSpellID',
            'CategoryMask_1',
            'CategoryMask_2',
        ]
    ),
]); ?>