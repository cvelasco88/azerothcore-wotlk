<?php
/** @var yii\web\View $this */
use app\widgets\DbcExportView;
use app\helpers\DbcView;
use app\models\TalentDbc;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create TalentDbc', ['create'], ['class' => 'btn btn-success']) ?>

<?= DbcExportView::widget(['url' => ['client-dbc/export', 'className' => TalentDbc::class]]) ?>

<div class="mb-3"></div>

<?= GridView::widget([
    'pager' => [
        'class' => yii\bootstrap5\LinkPager::class,
    ],
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
            'ID',
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