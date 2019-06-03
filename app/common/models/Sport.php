<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%sport}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property TesterSport[] $testerSports
 */
class Sport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sport}}';
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
    public function getTesterSports()
    {
        return $this->hasMany(TesterSport::className(), ['sport_id' => 'id']);
    }
}
