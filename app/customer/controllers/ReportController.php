<?php

namespace customer\controllers;

use Yii;

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
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('index');
    }

    public function actionDetail($id)
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('detail',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionComments($id)
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('comments',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionList($id)
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('list',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionTesters($id)
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('testers',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

    public function actionAnalyze($id)
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('analyze',[
            'title' => $this->titles[$id],
            'id'=>$id
        ]);
    }

}
