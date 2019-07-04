<?php

namespace customer\controllers;

class ReportController extends \yii\web\Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail($id = 'hasan')
    {
        return $this->render('detail',array('title' => $id));
    }

}
