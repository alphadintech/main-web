<?php

namespace tester\models;

use common\models\Language;
use common\models\User;
use Yii;

/**
 * This is the model class for table "{{%tester_language}}".
 *
 * @property int $id
 * @property int $tester_id
 * @property int $language_id
 * @property int $read_rate
 * @property int $write_rate
 * @property int $speak_rate
 *
 * @property Language $language
 * @property User $tester
 */
class TesterLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_language}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tester_id', 'language_id', 'read_rate', 'write_rate', 'speak_rate'], 'integer'],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['tester_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['tester_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tester_id' => 'Tester ID',
            'language_id' => 'Language ID',
            'read_rate' => 'Read Rate',
            'write_rate' => 'Write Rate',
            'speak_rate' => 'Speak Rate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTester()
    {
        return $this->hasOne(User::className(), ['id' => 'tester_id']);
    }
}
