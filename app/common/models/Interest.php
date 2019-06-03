<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%interest}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property TesterInterest[] $testerInterests
 */
class Interest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%interest}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesterInterests()
    {
        return $this->hasMany(TesterInterest::className(), ['interest_id' => 'id']);
    }
}
