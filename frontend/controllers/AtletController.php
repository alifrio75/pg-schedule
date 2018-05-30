<?php

namespace frontend\controllers;

use Yii;
use app\models\Atlet;

class AtletController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
