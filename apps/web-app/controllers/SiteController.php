<?php

namespace app\controllers;

use app\helpers\DbcArrayDataProvider;
use app\helpers\DbcDefinition;
use app\helpers\DbcRecord;
use app\helpers\DbcReader;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionListDbcs()
    {
        $dataPath = Yii::getAlias('@app/data');
        $dbcFiles = $this->findDbcFiles($dataPath);

        $dataProvider = new ArrayDataProvider([
            'allModels' => $dbcFiles,
        ]);

        return $this->render('list-dbcs', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionViewDbc($fileName, $page = 1, $pageSize = 100)
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

        return $this->render('view-dbc', [
            'dataProvider' => $dataProvider,
            'fileName' => $fileName,
            'targetClass' => $targetClass,
        ]);
    }

    public function actionValidateRecords($fileName)
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

        $idValues = [];
        foreach ($dbcReader->getRecords() as $record) {
            /** @var \yii\db\ActiveRecord $item */
            $item = $record->value();
            $idValues[] = $item->getPrimaryKey();
            $item = null;
        }

        // Calculate counts
        $insertCount = 0;
        $updateCount = 0;

        // Check existence of records
        foreach ($idValues as $primaryKeyValues) {
            $exists = call_user_func_array([$targetClass::find(), 'where'], [$primaryKeyValues])->exists();
            if ($exists) {
                $updateCount++;
            } else {
                $insertCount++;
            }
        }

        // Return the results
        return json_encode([
            'insertCount' => $insertCount,
            'updateCount' => $updateCount,
        ]);
    }

    public function actionImport()
    {
        // Your import logic goes here

        // Return success or failure message
        return json_encode(['success' => true]);
    }

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
