<?php

namespace customer\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public $layout = "panel/main";

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('index');
    }

}
