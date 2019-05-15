<?php

namespace supervisor\controllers;

class InvitationController extends \yii\web\Controller
{
    public $layout = "panel";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
