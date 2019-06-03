<?php

namespace tester\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "{{%tester_job_and_edu}}".
 *
 * @property int $user_id
 * @property int $education
 * @property string $major
 * @property string $job_title
 * @property integer $job_scale
 * @property string $job_description
 * @property int $employment_status
 * @property int $income
 *
 * @property User $user
 */
class TesterJobAndEdu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_job_and_edu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'education','job_scale', 'employment_status', 'income'], 'integer'],
            [['job_description'], 'string'],
            [['major', 'job_title'], 'string', 'max' => 255],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'education' => 'Education',
            'major' => 'Major',
            'job_title' => 'Job Title',
            'job_scale' => 'Job Scale',
            'job_description' => 'Job Description',
            'employment_status' => 'Employment Status',
            'income' => 'Income',
        ];
    }

    public static function edu_select()
    {
//        <option>کارشناسی</option>
//        <option>کارشناسی ارشد</option>
//        <option>دانشجو</option>
//        <option>دکترا</option>
//        <option>سیکل</option>
//        <option>پرفسر</option>
//        <option>دیپلم</option>
//        <option>بدون تحصیلات</option>
//        <option>دیگر</option>
        return[
            1=>"کارشناسی",
            2=>"کارشناسی ارشد",
            3=>"دانشجو",
            4=>"دکترا",
            5=>"سیکل",
            6=>"پرفسر",
            7=>"دیپلم",
            8=>"بدون تحصیلات",
            9=>"دیگر",
        ];

}
public static function status_select()
    {
//        <option>کارمند</option>
//        <option>به دنبال کار</option>
//        <option>دانشجو/دانش آموز</option>
//        <option>بازنشسته</option>
//        <option>خویش فرما</option>
//        <option>کارآفرین</option>
//        <option>خانه دار</option>
//        <option>دیگر</option>
        return[
            1=>"کارمند",
            2=>"به دنبال کار",
            3=>"دانشجو/دانش آموز",
            4=>"بازنشسته",
            5=>"خویش فرما",
            6=>"کارآفرین",
            7=>"خانه دار",
            8=>"دیگر",
        ];

}
public static function job_title_select()
    {
//        <option>در حال کسب درجه(انترن،دانشجو،..)</option>
//        <option>مدیر میانی</option>
//        <option>سرپرست</option>
//        <option>مدیر ارشد</option>
//        <option>با تجربه</option>
//        <option>سرپرست بخش</option>
//        <option>کاراموز</option>
//        <option>کارمند</option>
//        <option>سایر</option>
        return[
            1=>"در حال کسب درجه(انترن،دانشجو،..)",
            2=>"مدیر میانی",
            3=>"سرپرست",
            4=>"مدیر ارشد",
            5=>"با تجربه",
            6=>"سرپرست بخش",
            7=>"کاراموز",
            8=>"کارمند",
            9=>"دیگر",
        ];

}

public static function job_scale_select()
    {
//        <option>تنها</option>
//        <option>1-10</option>
//        <option>11-50</option>
//        <option>50-200</option>
//        <option>201-500</option>
//        <option>501-1000</option>
//        <option>بیش از 1000</option>
        return[
            1=>"تنها",
            2=>"1-10",
            3=>"11-50",
            4=>"50-200",
            5=>"201-500",
            6=>"501-1000",
            7=>"بیش از 1000"
        ];

}
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
