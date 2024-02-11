<?php
/** @var yii\web\View $this */
use app\models\TalentTabDbc;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Json;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Html::a('Create TalentTabDbc', ['create'], ['class' => 'btn btn-success']) ?>

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
            'ID',
            'Name_Lang_enUS',
            'Name_Lang_enGB',
            'Name_Lang_koKR',
            'Name_Lang_frFR',
            'Name_Lang_deDE',
            'Name_Lang_enCN',
            'Name_Lang_zhCN',
            'Name_Lang_enTW',
            'Name_Lang_zhTW',
            'Name_Lang_esES',
            'Name_Lang_esMX',
            'Name_Lang_ruRU',
            'Name_Lang_ptPT',
            'Name_Lang_ptBR',
            'Name_Lang_itIT',
            'Name_Lang_Unk',
            'Name_Lang_Mask',
            'SpellIconID',
            'RaceMask',
            'ClassMask',
            'PetTalentMask',
            'OrderIndex',
            'BackgroundFile',
        ]
    ),
]); ?>