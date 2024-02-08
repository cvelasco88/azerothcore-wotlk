<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var string $fileName */
/** @var array $records */

$this->title = 'View DBC File: ' . $fileName;
$this->params['breadcrumbs'][] = ['label' => 'List of DBC Files', 'url' => ['list-dbcs']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-view-dbc">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back to List', ['list-dbcs'], ['class' => 'btn btn-primary']) ?>
    </p>

    <h2>Records:</h2>

    <ul>
        <?php foreach ($records as $record): ?>
            <li><?= Html::encode(json_encode($record)) ?></li>
            <li><?php /*Html::encode("Record {$record)$record['id']}: {$record['name']}")*/ ?></li>
        <?php endforeach; ?>
    </ul>
</div>
