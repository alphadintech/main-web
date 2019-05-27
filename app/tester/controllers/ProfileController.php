<?php

namespace tester\controllers;

use tester\models\Tester;
use Yii;
use yii\web\Controller;

class ProfileController extends Controller
{
//    public $enableCsrfValidation = false;
    public $layout = "panel";

    public function actionIndex()
    {
        if (!Yii::$app->user->can('canBeTester')) {
            return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['site/login']));
        }
        $testerModel = $this->getTester();

        if (!$testerModel) {
            Yii::$app->session->setFlash('success', 'باید به عنوان تستر وارد شوید');
            return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['site/login']));
        }
        $testerModel->user_id = Yii::$app->user->id;
        $testerModel->load(Yii::$app->request->post());
        if ($testerModel->load(Yii::$app->request->post()) && $testerModel->save()) {
            Yii::$app->session->setFlash('success', 'اطلاعات  به روز رسانی شد');
        }
//
//        if ($testerModel->load(Yii::$app->request->post(), 'contact')) {
////            Yii::$app->session->setFlash('success', 'با تشکر از ثبت نام شما . لطفا ایمیل خودرا برای تایید چک کنید.');
////            return $this->goHome();
//        }

        return $this->render('index', [
            'testerModel' => $testerModel,
        ]);
    }

    private function getTester()
    {
        return Tester::findOne(['user_id' => Yii::$app->user->id]);
    }
}
