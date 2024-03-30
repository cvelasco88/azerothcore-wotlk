<?php

use yii\bootstrap4\Html;
use yii\helpers\Markdown;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div>
        <?php /*echo phpinfo();*/ ?>
    </div>
    <div class="body-content">

        <div class="row">
            <div class="col-xs-12">
            <?php

                $menuItems = [
                    ['label' => 'SpellDbc', 'url' => ['/spell-dbc/index']],
                    ['label' => 'PlayerCreateInfoSkill', 'url' => ['/player-create-info-skill/index']],
                    ['label' => 'TalentDbc', 'url' => ['/talent-dbc/index']],
                    ['label' => 'TalentTabDbc', 'url' => ['/talent-tab-dbc/index']],
                ];
                ?>
                <h1>Indexes</h1>
                <ul class="list-group">
                    <?php foreach ($menuItems as $item): ?>
                        <li class="list-group-item">
                            <?= Html::a($item['label'], $item['url'], $item['linkOptions'] ?? []) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
            <div class="col-xs-12">
                <?php
                $filepath = Yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'README.md';
                $markdownContent = file_get_contents($filepath);
                $myHtml = Markdown::process($markdownContent);
                echo $myHtml;
                ?>
            </div>
        </div>

    </div>
</div>
