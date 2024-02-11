<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var array $model */

$url = Url::to(['client-dbc/view', 'fileName' => $model['name']]);
?>

<div class="dbc-file">
    <?= Html::a("File: {$model['name']}", $url) ?>
</div>