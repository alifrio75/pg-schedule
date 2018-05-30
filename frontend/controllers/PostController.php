<?php

namespace frontend\controllers;

use Yii;
use app\models\Article;

class PostController extends \yii\web\Controller
{
    public function actionIndex($status)
    {
        return $this->render('index', [
            'model' => $this->findModel($status),
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
    }
    

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
