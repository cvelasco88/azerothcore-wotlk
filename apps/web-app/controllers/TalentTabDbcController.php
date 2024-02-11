<?php

namespace app\controllers;

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
        $model = $this->findModel($id);

        // Check if data is submitted
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Successfully updated, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $model = new TalentTabDbc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
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
