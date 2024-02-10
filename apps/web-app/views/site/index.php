<?php

use yii\bootstrap4\Html;

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
                    ['label' => 'List DBC', 'url' => ['/site/list-dbcs']],
                    ['label' => 'SpellDbc', 'url' => ['/spell-dbc/index']],
                    ['label' => 'PlayerCreateInfoSkill', 'url' => ['/player-create-info-skill/index']],
                    ['label' => 'TalentDbc', 'url' => ['/talent-dbc/index']],
                ];
                ?>

                <ul class="navbar-nav">
                    <?php foreach ($menuItems as $item): ?>
                        <li class="nav-item">
                            <?= Html::a($item['label'], $item['url'], $item['linkOptions'] ?? []) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
            <div class="col-xs-12">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
