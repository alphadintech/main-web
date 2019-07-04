<?php

namespace customer\controllers;

class ProjectController extends \yii\web\Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
