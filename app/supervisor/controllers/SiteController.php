<?php
namespace supervisor\controllers;

use Yii;
use yii\web\Controller;

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
        if(!Yii::$app->user->can('canBeSupervisor')){
            return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['login']));
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
        return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['login']));
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['logout']));
    }
}