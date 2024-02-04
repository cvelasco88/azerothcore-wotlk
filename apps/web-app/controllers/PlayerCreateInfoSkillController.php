<?php

namespace app\controllers;

use app\models\forms\PlayerCreateInfoSkillForm;
use app\models\PlayerCreateInfoSkill;
use app\models\search\PlayerCreateInfoSkillSearch;
use \Yii;
use yii\web\NotFoundHttpException;

class PlayerCreateInfoSkillController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new PlayerCreateInfoSkillSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($raceMask, $classMask, $skill)
    {
        $model = $this->findModel($raceMask, $classMask, $skill);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($raceMask, $classMask, $skill)
    {
        $formModel = new PlayerCreateInfoSkillForm();
        $model = $this->findModel($raceMask, $classMask, $skill);
        $formModel->initModelAttributes($model);

        // Check if data is submitted
        if ($formModel->processForm($model, Yii::$app->request->post())) {
            // Successfully updated, redirect to view action
            return $this->redirect(['view', 'raceMask' => $model->raceMask, 'classMask' => $model->classMask, 'skill' => $model->skill]);
        }

        return $this->render('update', [
            'model' => $model,
            'formModel' => $formModel,
        ]);
    }

    public function actionCreate()
    {
        $formModel = new PlayerCreateInfoSkillForm();
        $model = new PlayerCreateInfoSkill();
        $formModel->initModelAttributes($model);        

        if ($formModel->processForm($model, Yii::$app->request->post())) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'raceMask' => $model->raceMask, 'classMask' => $model->classMask, 'skill' => $model->skill]);
        }

        return $this->render('create', [
            'model' => $model,
            'formModel' => $formModel,
        ]);
    }


    /**
     * Deletes an existing PlayerCreateInfoSkill model.
     * @param integer $raceMask
     * @param integer $classMask
     * @param integer $skill
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($raceMask, $classMask, $skill)
    {
        $model = $this->findModel($raceMask, $classMask, $skill);

        if ($model->delete()) {
            Yii::$app->session->setFlash('success', 'Record deleted successfully.');
        } else {
            Yii::$app->session->setFlash('error', 'Error deleting the record.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the PlayerCreateInfoSkill model based on its primary key values.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $raceMask
     * @param integer $classMask
     * @param integer $skill
     * @return PlayerCreateInfoSkill the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($raceMask, $classMask, $skill)
    {
        if (($model = PlayerCreateInfoSkill::findOne(['raceMask' => $raceMask, 'classMask' => $classMask, 'skill' => $skill])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
