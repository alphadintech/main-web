<?php

namespace tester\models;

use common\models\Sport;
use common\models\User;
use Yii;

/**
 * This is the model class for table "{{%tester_sport}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $sport_id
 *
 * @property Sport $sport
 * @property User $user
 */
class TesterSport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_sport}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'sport_id'], 'integer'],
            [['sport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sport::className(), 'targetAttribute' => ['sport_id' => 'id']],
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
            'sport_id' => 'Sport ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSport()
    {
        return $this->hasOne(Sport::className(), ['id' => 'sport_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
