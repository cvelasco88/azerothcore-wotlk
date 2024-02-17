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

class ClientDbcController extends Controller
{
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
        ]);
    }

    public function actionValidate(string $fileName)
    {
        foreach (Yii::$app->log->targets as $target) {
            /** @var \yii\debug\LogTarget $target */
            $target->setEnabled(false);
        }

        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        $targetClass = DbcDefinition::getTargetClass($fileName);

        // Open the DBC file
        $storage = fopen($filePath, 'rb');
        // Create a DbcReader instance
        $dbcReader = new DbcReader($targetClass, $storage);
        // Close the DBC file
        // Note: closed on DbcReader _destruct => fclose($storage);

        $records = [];
        foreach ($dbcReader->getRecords() as $record) {
            $records[] = $record;
        }

        // Process records in batches
        $batchSize = 1000; // Adjust as needed
        // Calculate counts
        $insertCount = 0;
        $updateCount = 0;

        $this->processRecordsInBatches(
            $records,
            $batchSize,
            function ($batchRecords) use ($targetClass, &$updateCount) {
                // Get primary key names
                $primaryKeyNames = $targetClass::primaryKey(); // Array of primary key names

                foreach ($batchRecords as $record) {
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
                    }
                }
            }
        );

        $dbcReader->close();
        
        $insertCount = count($records) - $updateCount;

        // Return the results
        return json_encode([
            'insertCount' => $insertCount,
            'updateCount' => $updateCount,
        ]);
    }

    public function actionImport(string $fileName)
    {
        foreach (Yii::$app->log->targets as $target) {
            /** @var \yii\debug\LogTarget $target */
            $target->setEnabled(false);
        }

        // Your import logic goes here
        $dataPath = Yii::getAlias('@app/data');
        $filePath = $dataPath . DIRECTORY_SEPARATOR . $fileName;

        $targetClass = DbcDefinition::getTargetClass($fileName);

        // Open the DBC file
        $storage = fopen($filePath, 'rb');
        // Create a DbcReader instance
        $dbcReader = new DbcReader($targetClass, $storage);
        // Close the DBC file
        // Note: closed on DbcReader _destruct => fclose($storage);

        $records = [];
        foreach ($dbcReader->getRecords() as $record) {
            $records[] = $record;
        }

        // Process records in batches
        $batchSize = 1000; // Adjust as needed

        $this->processRecordsInBatches(
            $records,
            $batchSize,
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
                        // TODO: implementar
                        // $model = $query->one();
                    } else {
                        // TODO: implementar
                        try {
                            if (!$item->save()) {
                                throw new \yii\db\Exception('Error saving model', $item->getErrors());
                            }    
                        } catch (\yii\base\Exception|\yii\db\Exception $e) {
                            throw $e;
                        }
                        
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

        foreach($dbcWriter->getRecords() as $record) {
            // Write each record using the DbcWriter
            $dbcWriter->writeRecord($record, $definition);
        }

        $dbcWriter->close();
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

    /**
     * @param DbcRecord[] $records
     * @param int $batchSize
     * @param callable $callback
     */
    private function processRecordsInBatches(array $records, int $batchSize, callable $callback)
    {
        // Calculate total number of batches
        $totalRecords = count($records);
        $totalBatches = ceil($totalRecords / $batchSize);

        // Process records in batches
        for ($batchIndex = 0; $batchIndex < $totalBatches; $batchIndex++) {
            // Get records for the current batch
            $startIndex = $batchIndex * $batchSize;
            $batchRecords = array_slice($records, $startIndex, $batchSize);

            // Process records in batch using callback
            call_user_func($callback, $batchRecords);

            Yii::getLogger()->flush(true);
            gc_collect_cycles();
        }
    }

}
