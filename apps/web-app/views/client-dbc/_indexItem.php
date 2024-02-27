<?php

use app\helpers\DbcDefinition;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var array $model */

$url = Url::to(['client-dbc/view', 'fileName' => $model['name']]);
$targetClass = DbcDefinition::getTargetClass($model['name']);
?>

<div class="dbc-file">
    <?php if ($targetClass !== false): ?>
        <?= Html::a("File: {$model['name']}", $url) ?>
    <?php else: ?>
        <?= Html::label("File: {$model['name']}") ?>
    <?php endif; ?>
</div>