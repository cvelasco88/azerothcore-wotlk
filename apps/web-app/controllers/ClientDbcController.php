<?php

namespace app\controllers;

use app\helpers\DbcArrayDataProvider;
use app\helpers\DbcDefinition;
use app\helpers\DbcRecord;
use app\helpers\DbcReader;
use app\helpers\DbcWriter;
use app\models\base\DbcActiveRecord;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\ServerErrorHttpException;

class ClientDbcController extends Controller
{
    const BATCH_SIZE = 500; // Adjust as needed

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['validate', 'import'],
                'rules' => [
                    [
                        'actions' => ['validate', 'import'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'validate' => ['post'],
                    'import' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataPath = Yii::getAlias('@app/data');
        $dbcFiles = $this->findDbcFiles($dataPath);

        $dataProvider = new ArrayDataProvider([
            'allModels' => $dbcFiles,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($fileName, $page = 1, $pageSize = 100)
    {
        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        $targetClass = DbcDefinition::getTargetClass($fileName);
        if(!$targetClass) {
            throw new \Exception("Definition not found for {$fileName}");
        }

        // Open the DBC file
        $storage = fopen($filePath, 'rb');
        // Create a DbcReader instance
        $dbcReader = new DbcReader($targetClass, $storage);
        // Close the DBC file
        // Note: closed on DbcReader _destruct => fclose($storage);

        /** @var DbcRecord[] $records */
        $records = [];
        foreach ($dbcReader->getRecords() as $record) {
            $records[] = $record;
        }

        $dataProvider = new DbcArrayDataProvider([
            'allModels' => $records,
            'pagination' => [
                'pageSize' => $pageSize,
            ],
        ]);

        return $this->render('view', [
            'dataProvider' => $dataProvider,
            'fileName' => $fileName,
            'targetClass' => $targetClass,
            'batchSize' => self::BATCH_SIZE,
            'totalRecords' => count($records),
        ]);
    }

    public function actionValidate(string $fileName)
    {
        $batchIndex = $this->request->getBodyParam('batchIndex', 0);

        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        $targetClass = DbcDefinition::getTargetClass($fileName);
        if(!$targetClass) {
            throw new \Exception("Definition not found for {$fileName}");
        }

        // Open the DBC file
        $storage = fopen($filePath, 'rb');
        // Create a DbcReader instance
        $dbcReader = new DbcReader($targetClass, $storage);
        // Close the DBC file
        // Note: closed on DbcReader _destruct => fclose($storage);

        $insertCount = 0;
        $updateCount = 0;

        // Process records in batches
        [$totalRecords] = DbcReader::batch(
            $dbcReader,
            self::BATCH_SIZE,
            $batchIndex,
            function ($batchRecords) use ($targetClass, &$updateCount) {
                // Get primary key names
                $primaryKeyNames = $targetClass::primaryKey(); // Array of primary key names
    
                foreach ($batchRecords as $index => $record) {
                    /** @var DbcRecord $record */
                    $item = $record->value();
                    $primaryKeyValues = $item->getPrimaryKey();
                    // Construct condition for composite primary keys
                    if (count($primaryKeyNames) === 1) {
                        $primaryKeyValues = [$primaryKeyValues]; // Wrap single primary key value into an array
                    }
                    $condition = array_combine($primaryKeyNames, $primaryKeyValues);
                    /** @var \yii\db\ActiveQuery $query */
                    $query = $targetClass::find()->andWhere($condition);
                    if ($query->exists()) {
                        $updateCount++;
                        $oldItem = $query->one();
                        $oldItem->load($item->getAttributes(), '');
                        $item = $oldItem;
                    }

                    if(!$item->validate()) {
                        throw new ServerErrorHttpException('Validation with errors: ' . json_encode([
                            'index' => $index,
                            'PK' => $condition,
                            'errors' => $item->getErrors()
                        ]));
                    }
                }
            }
        );

        $dbcReader->close();

        $insertCount = $totalRecords - $updateCount;
        // Return the results
        return json_encode([
            'insertCount' => $insertCount,
            'updateCount' => $updateCount,
        ]);
    }

    public function actionImport(string $fileName)
    {
        $batchIndex = $this->request->getBodyParam('batchIndex', 0);

        // Your import logic goes here
        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        $targetClass = DbcDefinition::getTargetClass($fileName);
        if(!$targetClass) {
            throw new \Exception("Definition not found for {$fileName}");
        }
        
        // Open the DBC file
        $storage = fopen($filePath, 'rb');
        // Create a DbcReader instance
        $dbcReader = new DbcReader($targetClass, $storage);
        // Close the DBC file
        // Note: closed on DbcReader _destruct => fclose($storage);

        // Process records in batches
        DbcReader::batch(
            $dbcReader,
            self::BATCH_SIZE,
            $batchIndex,
            function ($batchRecords) use ($targetClass) {
                // Get primary key names
                $primaryKeyNames = $targetClass::primaryKey(); // Array of primary key names
    
                // Check existence of records and update counts
                foreach ($batchRecords as $record) {
                    /** @var DbcRecord $record */

                    /** @var \yii\db\ActiveRecord $item */
                    $item = $record->value();
                    $primaryKeyValues = $item->getPrimaryKey();
                    // Construct condition for composite primary keys
                    if (count($primaryKeyNames) === 1) {
                        $primaryKeyValues = [$primaryKeyValues]; // Wrap single primary key value into an array
                    }
                    // Construct condition for composite primary keys
                    $condition = array_combine($primaryKeyNames, $primaryKeyValues);

                    // Fetch existing records count in batches
                    /** @var \yii\db\ActiveQuery $query */
                    $query = $targetClass::find()->andWhere($condition);

                    $exists = $query->exists();
                    if ($exists) {
                        $model = $query->one();
                        $model->load($item->getAttributes(), '');
                        $item = $model;
                    }

                    try {
                        if (!$item->save()) {
                            throw new \yii\db\Exception('Error saving model', $item->getErrors());
                        }
                    } catch (\yii\db\Exception $e) {
                        // Catch the exception and pass the model errors to the user
                        $errorMessage = 'An error occurred while saving the model. Please correct the following errors:';
                        $errors = $e->errorInfo; // Get the model validation errors
                        // Combine the error message and model errors
                        $response = [
                            'message' => $errorMessage,
                            'errors' => $errors,
                        ];
                        // Return the error response
                        throw new ServerErrorHttpException(json_encode($response));
                    }
                    unset($item);
                }
            }
        );

        $dbcReader->close();

        // Return success or failure message
        return json_encode(['success' => true]);
    }

    public function actionExport(string $className)
    {
        if (!is_subclass_of($className, DbcActiveRecord::class)) {
            throw new \InvalidArgumentException("$className must inherit from DbcActiveRecord");
        }

        /** @var DbcActiveRecord $target */
        $target = new $className();
        $fileName = DbcDefinition::getFileName($target::class);

        // Your import logic goes here
        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        // Open the DBC file
        $storage = fopen($filePath, 'wb');

        // Create a DbcWriter instance with calculated header attributes
        $dbcWriter = new DbcWriter($className, $storage);
        // Close the DBC file
        // Note: closed on DbcWriter _destruct => fclose($storage);

        $definition = $target->getDefinition();

        foreach ($dbcWriter->getRecords() as $record) {
            // Write each record using the DbcWriter
            $dbcWriter->writeRecord($record, $definition);
        }

        $dbcWriter->close();

        // Redirect to the previous page
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

    // PRIVATE METHODS

    /**
     * @param string $directory
     */
    private function findDbcFiles($directory)
    {
        $files = scandir($directory);
        $dbcFiles = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'dbc') {
                $dbcFiles[] = ['name' => $file];
            }
        }

        return $dbcFiles;
    }
}
