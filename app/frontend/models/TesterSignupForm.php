<?php

namespace frontend\models;

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
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "Passwords don't match"],

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
        $user->name = $this->name;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status=User::STATUS_ACTIVE;
        if ($user->save()) {
            $auth = \Yii::$app->authManager;
            $testerRole = $auth->getRole('tester');
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
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
