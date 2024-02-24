<?php

namespace app\controllers;

use app\models\forms\TalentTabDbcForm;
use app\models\TalentTabDbc;
use app\models\search\TalentTabDbcSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TalentTabDbcController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new TalentTabDbcSearch();
        $searchModel->loadDefaultValues();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $formModel = new TalentTabDbcForm();
        $model = $this->findModel($id);
        $formModel->initModelAttributes($model);

        // Check if data is submitted
        if ($formModel->processForm($model, Yii::$app->request->post())) {
            // Successfully updated, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
            'formModel' => $formModel,
        ]);
    }

    public function actionCreate()
    {
        $formModel = new TalentTabDbcForm();
        $model = new TalentTabDbc();
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

    /**
     * Deletes an existing TalentTabDbc model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if ($model->delete()) {
            Yii::$app->session->setFlash('success', 'Record deleted successfully.');
        } else {
            Yii::$app->session->setFlash('error', 'Error deleting the record.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the TalentTabDbc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TalentTabDbc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TalentTabDbc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
