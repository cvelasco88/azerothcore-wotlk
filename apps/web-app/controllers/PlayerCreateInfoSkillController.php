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
        $model = PlayerCreateInfoSkill::findOne([
            'raceMask' => $raceMask,
            'classMask' => $classMask,
            'skill' => $skill,
        ]);

        if ($model === null) {
            // Spell not found
            throw new NotFoundHttpException('The requested spell does not exist.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($raceMask, $classMask, $skill)
    {
        $model = PlayerCreateInfoSkill::findOne([
            'raceMask' => $raceMask,
            'classMask' => $classMask,
            'skill' => $skill,
        ]);

        if ($model === null) {
            // Spell not found
            throw new NotFoundHttpException('The requested spell does not exist.');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Successfully created, redirect to view action
            return $this->redirect(['view', 'raceMask' => $model->raceMask, 'classMask' => $model->classMask, 'skill' => $model->skill]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
