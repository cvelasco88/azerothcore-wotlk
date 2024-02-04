<?php
/** @var yii\web\View $this */
use app\models\SpellDbc;
use yii\grid\GridView;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;

echo GridView::widget([
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
        [
            'ID',
            'Name_Lang_enUS',
            'Category',
            'SpellClassSet',
            'SpellLevel',
            'RangeIndex',
        ]
        // Add more columns as needed
        // ['class' => 'yii\grid\ActionColumn'],
    ),
]);

?>