<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tester".
 *
 * @property int $user_id
 * @property string $name
 * @property string $family
 * @property int $nationality_code
 * @property int $gender
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 *
 * @property User $user
 */
class Tester extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['user_id', 'updated_at', 'created_at'], 'required'],
            [['user_id', 'nationality_code', 'gender', 'status', 'updated_at', 'created_at'], 'integer'],
            [['name', 'family'], 'string', 'max' => 255],
            [['user_id'], 'unique'],
            [['nationality_code'], 'unique'],
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
            'name' => 'Name',
            'family' => 'Family',
            'nationality_code' => 'Nationality Code',
            'gender' => 'Gender',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
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
