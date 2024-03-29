<?php

namespace frontend\controllers;

use frontend\models\RegisterForm;
use Yii;

class SiteController extends \yii\web\Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public $layout = "site";

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionExploratory()
    {
        return $this->render('exploratory');
    }

    public function actionComparison()
    {
        return $this->render('comparison');
    }

    public function actionCompetitor()
    {
        return $this->render('competitor');
    }

    public function actionRegression()
    {
        return $this->render('regression');
    }

    public function actionUsability()
    {
        return $this->render('usability');
    }

    public function actionSurvey()
    {
        return $this->render('survey');
    }

    public function actionTestcase()
    {
        return $this->render('testcase');
    }

    public function actionPrototype()
    {
        return $this->render('prototype');
    }

    public function actionCardsorting()
    {
        return $this->render('cardsorting');
    }

    public function actionLoadtest()
    {
        return $this->render('loadtest');
    }

    public function actionStructured()
    {
        return $this->render('structured');
    }

    public function actionTestrequest()
    {
        $registerForm= new RegisterForm();
        if($registerForm->load(\Yii::$app->request->post(),'regform')){
            if($registerForm->save()){
                Yii::$app->session->setFlash('success','اطلاعات شما با موفقیت ثبت شد و به زودی با شما تماس گرفته می شود.');
            }else{
                Yii::$app->session->setFlash('error','ثبت اطلاعات با مشکل مواجه شده است');
            }
        }
        return $this->render('testrequest',['registerForm'=>$registerForm]);
    }

}
