<?php

namespace customer\controllers;

class ReportController extends \yii\web\Controller
{
    public $layout = "panel/main";
    private $titles=[
        '450'=>"<h1> جزئیات تست عملکرد کلی اندروید </h1>",
        '451'=>"<h1> جزئیات تست عملکرد کلی آی او اس </h1>",
        '452'=>"<h1> جزئیات تست عملکرد کلی وبسایت </h1>"
    ];
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDetail($id)
    {
        return $this->render('detail',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionComments($id)
    {
        return $this->render('comments',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionList($id)
    {
        return $this->render('list',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionTesters($id)
    {
        return $this->render('testers',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionAnalyze($id)
    {
        return $this->render('analyze',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

}
