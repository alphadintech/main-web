<?php

namespace supervisor\controllers;

class TestersController extends \yii\web\Controller
{
    public $layout = "panel";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
