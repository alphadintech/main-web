<?php

namespace tester\models;

use app\models\Media;
use common\models\City;
use common\models\User;
use Yii;

/**
 * This is the model class for table "tester".
 *
 * @property int $user_id
 * @property string $name
 * @property int $avatar_id
 * @property string $family
 * @property int $nationality_code
 * @property int $gender
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 * @property int $city_id
 * @property int $phone
 * @property int $mobile
 * @property int $postal_code
 * @property int $birthday
 *
 * @property Media $avatar
 * @property City $city
 * @property User $user
 */
class Tester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '((%tester))';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'updated_at', 'created_at'], 'required'],
            [['user_id','avatar_id', 'nationality_code', 'gender', 'status', 'updated_at', 'created_at'], 'integer'],
            [['name', 'family'], 'string', 'max' => 255],
            [['user_id'], 'unique'],
            [['nationality_code'], 'unique'],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Media::className(), 'targetAttribute' => ['avatar_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
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
            'avatar_id' => 'Avatar ID',
            'family' => 'Family',
            'nationality_code' => 'Nationality Code',
            'gender' => 'Gender',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'city_id' => 'City ID',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'postal_code' => 'Postal Code',
            'birthday' => 'Birthday',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvatar()
    {
        return $this->hasOne(Media::className(), ['id' => 'avatar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
