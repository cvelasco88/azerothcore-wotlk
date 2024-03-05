<?php

namespace app\controllers;

use app\helpers\DbcLanguage;
use app\models\forms\SpellDbcForm;
use app\models\SpellDbc;
use app\models\search\SpellDbcSearch;
use \Yii;
use yii\web\NotFoundHttpException;

class SpellDbcController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dbcLanguage = DbcLanguage::getLanguageFromLocale(Yii::$app->language);
        $searchModel = new SpellDbcSearch($dbcLanguage);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        if ($model === null) {
            // Spell not found
            throw new NotFoundHttpException('The requested spell does not exist.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $formModel = new SpellDbcForm();
        $model = new SpellDbc();
        $model->loadDefaultValues();
        $formModel->initModelAttributes($model);

        if ($formModel->processForm($model, Yii::$app->request->post())) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
            'formModel' => $formModel,
        ]);
    }

    public function actionUpdate($id)
    {
        $formModel = new SpellDbcForm();
        $model = $this->findModel($id);
        $formModel->initModelAttributes($model);

        if ($formModel->processForm($model, Yii::$app->request->post())) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
            'formModel' => $formModel,
        ]);
    }

    public function actionClone($id)
    {
        $formModel = new SpellDbcForm();
        $model = $this->findModel($id);
        // Create a new model instance for cloning
        $clonedModel = new SpellDbc();
        $clonedModel->attributes = $model->attributes;
        unset($clonedModel->ID); // Unset the ID to ensure a new record is created
        $formModel->initModelAttributes($model);

        if ($formModel->processForm($clonedModel, Yii::$app->request->post())) {
            // Successfully cloned, redirect to view action for the cloned model
            return $this->redirect(['view', 'id' => $clonedModel->ID]);
        }

        return $this->render('create', [
            'model' => $clonedModel,
            'formModel' => $formModel,
        ]);
    }

    /**
     * Finds the SpellDbc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SpellDbc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SpellDbc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
