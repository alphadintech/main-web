<?php

namespace frontend\models;
use tester\models\Tester;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class TesterSignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $password_repeat;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'این ایمیل قبلا در سامانه ثبت شده'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "عدم هماهنگی گذرواژه"],

        ];
    }

    /**
     * Signs tester user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     * @throws \Exception
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status=User::STATUS_ACTIVE;
        if ($user->save()) {
            $auth = \Yii::$app->authManager;
            $testerRole = $auth->getRole('tester');
            $auth->assign($testerRole, $user->getId());
            $tester = new Tester();
            $tester->user_id = $user->id;
            $tester->save();
            return $user;
        }

        return null;
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('ثبت کاربری برای ' . Yii::$app->name)
            ->send();
    }
}
