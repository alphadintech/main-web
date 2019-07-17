<?php

namespace tester\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
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
