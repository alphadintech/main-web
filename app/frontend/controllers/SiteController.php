<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\SupervisorSignupForm;
use frontend\models\TesterSignupForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

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
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup-as-tester', 'signup-as-customer', 'signup-as-supervisor'],
                'rules' => [
                    [
                        'actions' => ['signup-as-tester', 'signup-as-customer'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['signup-as-supervisor'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout='login';
        if (!Yii::$app->user->isGuest) {
            $this->userGo();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(),'login') && $model->login()) {
            $this->userGo();
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'از اینکه با ما در ارتباط هستید متشکریم. ما به شما در اسرع وقت پاسخ خواهیم داد.');
            } else {
                Yii::$app->session->setFlash('error', 'خطایی در ارسال پیش آمده.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignupAsSupervisor()
    {
//        die("Sad");
        $model = new SupervisorSignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'با تشکر از ثبت نام شما . لطفا ایمیل خودرا برای تایید چک کنید.');
            return $this->goHome();
        }

        return $this->render('signup_as_supervisor', [
            'model' => $model,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     * @throws \Exception
     */
    public function actionSignupAsTester()
    {
        $this->layout = 'signup_as_tester';
        $model = new TesterSignupForm();
        if ($model->load(Yii::$app->request->post(), 'signup') && $model->signup()) {
            Yii::$app->session->setFlash('success', 'با تشکر از ثبت نام شما . لطفا ایمیل خودرا برای تایید چک کنید.');
            return $this->goHome();
        }

        return $this->render('signup_as_tester', [
            'model' => $model,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignupAsCustomer()
    {
        $model = new CustomerSignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'با تشکر از ثبت نام شما . لطفا ایمیل خودرا برای تایید چک کنید.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'ایمیل خود را برای تصحیح گذرواژه بررسی کنید');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'با عرض پوزش، ما نمیتوانیم برای آدرس ایمیل ارائه شده تنظیم مجدد رمزعبور انجام دهیم.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'گذرواژه با موفقیت ذخیره شد');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'ایمیل شما با موفقیت تایید شد');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'امکان تایید ایمیل به دلایل امنیتی وجود ندارد');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'ایمیل خود را برای تایید چک کنید');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'برای این ایمیل امکان ارسال مجدد وجود ندارد');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    private function userGo(){
        if (Yii::$app->user->can('canBeTester')) {
            return $this->redirect(Yii::$app->urlManagerTester->createUrl(['dashboard']));
        } else {
            if (Yii::$app->user->can('canBeSupervisor')) {
                return $this->redirect(Yii::$app->urlManagerSupervisor->createUrl(['dashboard']));
            } else {
                if (Yii::$app->user->can('canBeCustomer')) {
                    return $this->redirect(['customer/site']);
                } else {
                    return $this->goHome();
                }
            }
        }
    }
}
