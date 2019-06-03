<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%city}}".
 *
 * @property int $id
 * @property string $name
 * @property int $state_id
 *
 * @property State $state
 * @property Tester[] $testers
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%city}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'id']],
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
            'state_id' => 'State ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesters()
    {
        return $this->hasMany(Tester::className(), ['city_id' => 'id']);
    }
}
