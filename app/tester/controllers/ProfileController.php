<?php

namespace tester\controllers;

use tester\models\Tester;
use Yii;

class ProfileController extends \yii\web\Controller
{
    public $layout = "panel";
    public function actionIndex()
    {

        $testerModel = new Tester();
//        if ($testerModel->load(Yii::$app->request->post(), 'Individual') && $testerModel->save()) {
//            return $this->render('index', [
//                'testerModel' => $testerModel,
//            ]);
////
////            return $this->goHome();
//        }
//        if ($testerModel->load(Yii::$app->request->post(), 'contact')) {
////            Yii::$app->session->setFlash('success', 'با تشکر از ثبت نام شما . لطفا ایمیل خودرا برای تایید چک کنید.');
////            return $this->goHome();
//        }

        return $this->render('index', [
            'testerModel' => $testerModel,
        ]);
    }

}
