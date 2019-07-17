<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "register_form".
 *
 * @property int $id
 * @property string $name
 * @property string $company_name
 * @property string $phone
 * @property string $email
 * @property string $desc
 */
class RegisterForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'register_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company_name', 'phone', 'email'], 'required'],
            [['name', 'company_name', 'phone', 'email', 'desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'company_name' => 'Company Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'desc' => 'Desc',
        ];
    }
}
