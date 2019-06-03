<?php

namespace tester\models;

use common\models\Interest;
use common\models\User;
use Yii;

/**
 * This is the model class for table "{{%tester_interest}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $interest_id
 *
 * @property Interest $interest
 * @property User $user
 */
class TesterInterest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_interest}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'interest_id'], 'integer'],
            [['interest_id'], 'exist', 'skipOnError' => true, 'targetClass' => Interest::className(), 'targetAttribute' => ['interest_id' => 'id']],
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
            'interest_id' => 'Interest ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterest()
    {
        return $this->hasOne(Interest::className(), ['id' => 'interest_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
