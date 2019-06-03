<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%social}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property TesterMediaFormSocial[] $testerMediaFormSocials
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%social}}';
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
    public function getTesterMediaFormSocials()
    {
        return $this->hasMany(TesterMediaFormSocial::className(), ['social_id' => 'id']);
    }
}
