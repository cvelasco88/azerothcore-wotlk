<?php

namespace app\controllers;
use app\models\SpellDbc;
use app\models\search\SpellDbcSearch;
use \Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class SpellDbcController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new SpellDbcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = SpellDbc::findOne($id);

        if ($model === null) {
            // Spell not found
            throw new NotFoundHttpException('The requested spell does not exist.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = SpellDbc::findOne($id);

        if ($model === null) {
            // Spell not found
            throw new NotFoundHttpException('The requested spell does not exist.');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Successfully updated, redirect to view action
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
