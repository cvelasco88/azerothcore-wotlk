<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\bootstrap5\ActiveForm;
use yii\web\View;

/** @var yii\web\View $this */
/** @var string $fileName */
/** @var array $records */

$this->title = 'View DBC File: ' . $fileName;
$this->params['breadcrumbs'][] = ['label' => 'List of DBC Files', 'url' => ['list-dbcs']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-view-dbc">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <p>
        <?= Html::a('Back to List', ['list-dbcs'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= Html::button('Validate Records', ['class' => 'btn btn-primary', 'onclick' => 'validateRecords(this, "' . $fileName . '")']) ?>
    <?= Html::button('Import Data', ['class' => 'btn btn-primary', 'onclick' => 'importData(this, "' . $fileName . '")']) ?>

    <h2>Records:</h2>
    <?php
    $reflectionClass = new \ReflectionClass($targetClass);
    // Get all properties of the target class
    $properties = $reflectionClass->getProperties();
    $columns = array_map(function ($prop) {
        return $prop->name; }, $properties);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $columns,
    ]);
    ?>
</div>

<?php
$this->registerJs(
    new JsExpression(
        "
            function validateRecords(button, fileName) {
                // Disable the button to prevent multiple clicks
                $(button).prop('disabled', true);

                $(button).removeClass(function(index, className) {
                    return (className.match(/\bbtn-\S+/g) || []).join(' ');
                }).addClass('btn-primary');
                $.ajax({
                    url: '" . Yii::$app->urlManager->createUrl(['site/validate-records', 'fileName' => '']) . "' + fileName,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        // Re-enable the button on error
                        $(button).prop('disabled', false);

                        // Handle the response, maybe show a message to the user
                        console.log(response);
                        if (response) {
                            // Check if updateCount is 0 and set class accordingly
                            if (response.updateCount === 0) {
                                $(button).addClass('btn-success').removeClass('btn-primary');
                            } else if (response.updateCount > 0) {
                                $(button).addClass('btn-warn').removeClass('btn-primary');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Re-enable the button on error
                        $(button).prop('disabled', false);
                        
                        // Handle errors
                        console.error(error);
                        // Show alert on error
                        alert('An error occurred while validating records.');
                    }
                });
            }

            function importData(button, fileName) {
                // Disable the button to prevent multiple clicks
                $(button).prop('disabled', true);
    
                $(button).removeClass(function(index, className) {
                    return (className.match(/\bbtn-\S+/g) || []).join(' ');
                }).addClass('btn-primary');
                $.ajax({
                    url: '" . Yii::$app->urlManager->createUrl(['site/validate-records', 'fileName' => '']) . "' + fileName,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        // Re-enable the button on error
                        $(button).prop('disabled', false);
                        
                        // Handle the response, maybe show a message to the user
                        console.log(response);
                        if (response) {
                            // Set class to 'btn-success' if import was successful
                            if (response.success) {
                                $(button).addClass('btn-success').removeClass('btn-primary');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Re-enable the button on error
                        $(button).prop('disabled', false);
                        
                        // Handle errors
                        console.error(error);
                        // Show alert on error
                        alert('An error occurred while importing data.');
                    }
                });
            }
        "
    ),
    View::POS_END
);
?>