<?php

namespace frontend\models;

use supervisor\models\Supervisor;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SupervisorSignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'supervisor\models\Supervisor', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "عدم هماهنگی گذرواژه"],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
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
            $supervisor = new Supervisor();
            $supervisor->username = $this->username;
            $supervisor->user_id= $user->id;
//            $supervisor->save();
            if(!$supervisor->save()){
                print_r($supervisor->errors);
                die;
            }
//            ()?die($supervisor->errors):'';
            $auth = \Yii::$app->authManager;
            $testerRole = $auth->getRole('supervisor');
            $auth->assign($testerRole, $user->getId());
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
