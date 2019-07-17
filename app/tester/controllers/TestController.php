<?php

namespace tester\controllers;

use Yii;

class TestController extends \yii\web\Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('index');
    }

}
