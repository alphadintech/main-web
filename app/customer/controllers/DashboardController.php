<?php

namespace customer\controllers;

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
        return $this->render('index');
    }

}
