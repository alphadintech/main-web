<?php

namespace tester\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
