<?php

namespace tester\controllers;

class InvitationController extends \yii\web\Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
