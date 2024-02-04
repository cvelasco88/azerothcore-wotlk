<?php

namespace app\controllers;
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
        $model = $this->findModel($raceMask, $classMask, $skill);

        $body = Yii::$app->request->post();
        if(isset($body["raceMask"])) {
            $raceMask = 0;
            foreach($body["raceMask"] as $opt) {
                $raceMask |= $opt;
            }
            $body["PlayerCreateInfoSkill"]["raceMask"] = "".$raceMask;
        }
        if(isset($body["classMask"])) {
            $classMask = 0;
            foreach($body["classMask"] as $opt) {
                $classMask |= $opt;
            }
            $body["PlayerCreateInfoSkill"]["classMask"] = "".$classMask;
        }

        if ($model->load($body) && $model->save()) {
            // Successfully updated, redirect to view action
            return $this->redirect(['view', 'raceMask' => $model->raceMask, 'classMask' => $model->classMask, 'skill' => $model->skill]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $model = new PlayerCreateInfoSkill();
        $body = Yii::$app->request->post();
        if(isset($body["raceMask"])) {
            $raceMask = 0;
            foreach($body["raceMask"] as $opt) {
                $raceMask |= $opt;
            }
            $body["PlayerCreateInfoSkill"]["raceMask"] = "".$raceMask;
        }
        if(isset($body["classMask"])) {
            $classMask = 0;
            foreach($body["classMask"] as $opt) {
                $classMask |= $opt;
            }
            $body["PlayerCreateInfoSkill"]["classMask"] = "".$classMask;
        }

        if ($model->load($body) && $model->save()) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'raceMask' => $model->raceMask, 'classMask' => $model->classMask, 'skill' => $model->skill]);
        }

        return $this->render('create', [
            'model' => $model,
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
