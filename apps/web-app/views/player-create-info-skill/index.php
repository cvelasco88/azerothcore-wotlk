<?php
/** @var yii\web\View $this */
use app\helpers\DbcView;
use app\models\PlayerCreateInfoSkill;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Index Page';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo Html::a('Create Player Create Info Skill', ['create'], ['class' => 'btn btn-success']); ?>

<div class="mb-3"></div>

<?php
echo GridView::widget([
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
            DbcView::column('raceMask', 'Race Mask', PlayerCreateInfoSkill::getRaceMaskOptions(), ['onclick' => 'return false;']),
            DbcView::column('classMask', 'Class Mask', PlayerCreateInfoSkill::getClassMaskOptions(), ['onclick' => 'return false;']),
            'skill',
            'rank',
            'comment',
        ]
        // Add more columns as needed
    ),
]);
?>