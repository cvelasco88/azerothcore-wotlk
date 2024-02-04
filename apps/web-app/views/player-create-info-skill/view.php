<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PlayerCreateInfoSkill $model */
/** @var ActiveForm $form */

$this->title = 'Create Player Create Info Skill';
$this->params['breadcrumbs'][] = ['label' => 'Index Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="player-create-info-skill-view">

    <?php echo Html::a('Update', [
            'update',
            'raceMask' => $model->raceMask,
            'classMask' => $model->classMask,
            'skill' => $model->skill
        ], ['class' => 'btn btn-success']); ?>

    <div class="mb-3"></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'raceMask',
            'classMask',
            'skill',
            'rank',
            'comment',
        ],
    ]) ?>

</div><!-- player-create-info-skill-view -->
