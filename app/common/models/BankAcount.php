<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_acount}}".
 *
 * @property int $id
 * @property string $bank_name
 * @property string $sheba
 * @property string $card_num
 * @property string $acount_num
 * @property int $user_id
 *
 * @property User $user
 */
class BankAcount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%bank_acount}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['bank_name', 'sheba', 'card_num', 'acount_num'], 'string', 'max' => 255],
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
            'bank_name' => 'Bank Name',
            'sheba' => 'Sheba',
            'card_num' => 'Card Num',
            'acount_num' => 'Acount Num',
            'user_id' => 'User ID',
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
