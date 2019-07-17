<?php

namespace customer\controllers;

use Yii;

class ProjectController extends \yii\web\Controller
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
