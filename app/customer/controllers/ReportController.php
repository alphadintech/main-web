<?php

namespace customer\controllers;

class ReportController extends \yii\web\Controller
{
    public $layout = "panel/main";
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail($id)
    {
        return $this->render('detail',[
            'title' => 'Detail',
            'id'=>$id
        ]);
    }

    public function actionComments($id)
    {
        return $this->render('comments',[
            'title' => 'Detail',
            'id'=>$id
        ]);
    }

    public function actionList($id)
    {
        return $this->render('list',[
            'title' => 'List',
            'id'=>$id
        ]);
    }

    public function actionTesters($id)
    {
        return $this->render('testers',[
            'title' => 'Testers',
            'id'=>$id
        ]);
    }

    public function actionAnalyze($id)
    {
        return $this->render('analyze',[
            'title' => 'Analyze',
            'id'=>$id
        ]);
    }

}
