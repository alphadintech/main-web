<?php

namespace tester\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "{{%tester_media_form}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $q1
 * @property int $q2
 * @property int $q3
 * @property int $q4
 * @property int $q5
 * @property int $q6
 * @property int $q7
 * @property string $q8
 *
 * @property User $user
 */
class TesterMediaForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_media_form}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7'], 'integer'],
            [['q8'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'q1' => 'چه مقدار از زمان خود را در روز به شبکه های اجتماعی اختصاص می‌دهید',
            'q2' => 'چه مقدار از زمان خود را در روز به تماشای تلویزیون اختصاص می‌دهید',
            'q3' => 'چه مقدار از زمان خود را در روز به تلفن همراه اختصاص می‌دهید',
            'q4' => 'چه مقدار از زمان خود را در روز به کامپیوتر اختصاص می‌دهید',
            'q5' => 'چه مقدار از زمان خود را در روز به سایت های اینترنتی اختصاص می‌دهید',
            'q6' => 'برای اپلیکیشن های موبایل چقدر هزینه می‌کنید',
            'q7' => 'به میانگین ماهیانه چند اپلیکیشن جدید نصب می‌کنید',
            'q8' => 'هدف شما از پیگیری شبکه های اجتماعی چیست',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function  getOptions($q)
    {
        $options =[
            'q1'=>[
                0=>"هیچ",
                1=>"0 تا 1 ساعت",
                2=>"1 تا 3 ساعت",
                3=>"3 تا 5 ساعت",
                4=>"5 تا 8 ساعت",
                5=>"بیشتر",

            ],
            'q2'=>[
                0=>"هیچ",
                1=>"0 تا 1 ساعت",
                2=>"1 تا 3 ساعت",
                3=>"3 تا 5 ساعت",
                4=>"5 تا 8 ساعت",
                5=>"بیشتر",
            ],
            'q3'=>[
                0=>"هیچ",
                1=>"0 تا 1 ساعت",
                2=>"1 تا 3 ساعت",
                3=>"3 تا 5 ساعت",
                4=>"5 تا 8 ساعت",
                5=>"بیشتر",
            ],
            'q4'=>[
                0=>"هیچ",
                1=>"0 تا 1 ساعت",
                2=>"1 تا 3 ساعت",
                3=>"3 تا 5 ساعت",
                4=>"5 تا 8 ساعت",
                5=>"بیشتر",
            ],
            'q5'=>[
                0=>"هیچ",
                1=>"0 تا 1 ساعت",
                2=>"1 تا 3 ساعت",
                3=>"3 تا 5 ساعت",
                4=>"5 تا 8 ساعت",
                5=>"بیشتر",
            ],
            'q6'=>[
                0=>"هیچ",
                1=>"1 تا 10 هزار تومان در سال",
                2=>"10 تا 100 هزار تومان در سال",
                3=>"100 تا 500 هزار تومان در سال",
                4=>"بیشتر",
            ],
            'q7'=>[
                0=>"هیچ",
                1=>"1 یا 2 اپلیکیشن در ماه",
                2=>"3 تا 5 اپلیکیشن در ماه",
                3=>"6 تا 10 اپلیکیشن در ماه",
                4=>"بیشتر",
            ],
        ];
        return $options[$q];
    }
}
