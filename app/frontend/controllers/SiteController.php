<?php

namespace frontend\controllers;

class SiteController extends \yii\web\Controller
{
    public $layout = "site";

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionExploratory()
    {
        return $this->render('Exploratory');
    }

    public function actionComparison()
    {
        return $this->render('Comparison');
    }

    public function actionCompetitor()
    {
        return $this->render('Competitor');
    }

    public function actionRegression()
    {
        return $this->render('Regression');
    }

    public function actionUsability()
    {
        return $this->render('Usability');
    }

    public function actionSurvey()
    {
        return $this->render('Survey');
    }

    public function actionTestcase()
    {
        return $this->render('Testcase');
    }

    public function actionPrototype()
    {
        return $this->render('Prototype');
    }

    public function actionCardsorting()
    {
        return $this->render('Cardsorting');
    }

    public function actionLoadtest()
    {
        return $this->render('loadtest');
    }

    public function actionStructured()
    {
        return $this->render('Structured');
    }

}
