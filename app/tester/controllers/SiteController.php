<?php

namespace tester\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
       return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout='panel';
//print_r(Yii::$app->authManager->getRolesByUser(Yii::$app->user->id));die;
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->render('dashboard');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['site/login']));
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        if(!Yii::$app->user->can('canBeTester')){
            return $this->goHome();
        }
        return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['site/logout']));
    }
}
