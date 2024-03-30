<?php

namespace app\widgets;

use yii\base\Widget;
use yii\bootstrap5\Progress;
use yii\helpers\Html;
use \Yii;

class DbcExportView extends Widget
{
    public string $containerClass = 'export-progress';
    public string $title = 'Export Progress';
    public array $url;

    public function init()
    {
        parent::init();

        $requiredParams = ['containerClass', 'title', 'url'];
        foreach($requiredParams as $param) {
            if ($this->{$param} === null) {
                throw new \InvalidArgumentException('The "'.$param.'" attribute is required for DbcExportView. Please make sure to define it when using the widget.');
            }
        }
    }

    public function run()
    {
        $exportUrl = \yii\helpers\Url::to($this->url);

        // Register the JavaScript file
        $view = Yii::$app->getView();
        $view->registerJsFile('@web/js/export-dbc-ajax-functions.js', ['depends' => [\yii\web\JqueryAsset::class]]);

        $buttonHtml = Html::button(
            'Export', 
            [
                'class' => 'btn btn-warning',
                'onclick' => 'exportData(this, "' . $exportUrl . '")',
            ]
        );

        // Generate the export progress bar
        $progressBar = Progress::widget([
            'percent' => 0,
            'label' => '<span class="sr-only"></span>',
            'barOptions' => ['class' => 'progress-bar progress-bar-striped active'],
        ]);

        // Generate the export progress div HTML
        $progressHtml = '
        <div class="'.$this->containerClass.' hidden-progress">
            <h2>'.$this->title.'</h2>
            ' . $progressBar . '
            <div class="status"></div>
        </div>';

        // Return the combined HTML
        return $buttonHtml . $progressHtml;
    }

}