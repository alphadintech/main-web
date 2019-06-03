<?php

namespace common\models;

use tester\models\TesterLanguage;
use Yii;

/**
 * This is the model class for table "{{%language}}".
 *
 * @property int $id
 * @property string $name_fa
 * @property string $name_orgin
 *
 * @property TesterLanguage[] $testerLanguages
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%language}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_fa', 'name_orgin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_fa' => 'Name Fa',
            'name_orgin' => 'Name Orgin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesterLanguages()
    {
        return $this->hasMany(TesterLanguage::className(), ['language_id' => 'id']);
    }
}
