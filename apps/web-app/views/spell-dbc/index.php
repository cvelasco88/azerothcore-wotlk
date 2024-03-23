<?php
/** @var yii\web\View $this */
use app\widgets\DbcExportView;
use app\helpers\DbcLanguage;
use app\models\SpellDbc;
use yii\grid\GridView;
use yii\helpers\Html;

// this one has to match the Search model
$nameLang = 'Name_Lang_' . DbcLanguage::getLanguageFromLocale(Yii::$app->language);

$this->title = 'SpellDbc Index';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create SpellDbc', ['create'], ['class' => 'btn btn-success']) ?>

<?= DbcExportView::widget(['url' => ['client-dbc/export', 'className' => SpellDbc::class]]) ?>

<div class="mb-3"></div>

<?= GridView::widget([
    'pager' => [
        'class' => yii\bootstrap5\LinkPager::class,
    ],
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => array_merge(
        [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                /*'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['view', 'id' => $model->ID], [
                            'title' => Yii::t('yii', 'View'),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['update', 'id' => $model->ID], [
                            'title' => Yii::t('yii', 'Update'),
                        ]);
                    }
                ]*/
            ]
        ],
        // ['class' => 'yii\grid\SerialColumn'],
        // array_keys((new SpellDbc())->attributes),
        SpellDbc::viewColumn([
            'ID',
            $nameLang,
            'Category',
            'SpellClassSet',
            'SpellLevel',
            'RangeIndex',
        ])
        // Add more columns as needed
        // ['class' => 'yii\grid\ActionColumn'],
    ),
]);

?>