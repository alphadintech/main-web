<?php

namespace supervisor\controllers;

use Yii;

class TestController extends \yii\web\Controller
{
    public $layout = "panel";
    public function actionIndex()
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('index');
    }

}
