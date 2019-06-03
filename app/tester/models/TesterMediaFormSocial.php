<?php

namespace tester\models;

use Yii;

/**
 * This is the model class for table "{{%tester_media_form_social}}".
 *
 * @property int $id
 * @property int $social_id
 * @property int $form_id
 *
 * @property TesterMediaForm $form
 * @property Social $social
 */
class TesterMediaFormSocial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tester_media_form_social}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['social_id', 'form_id'], 'integer'],
            [['form_id'], 'exist', 'skipOnError' => true, 'targetClass' => TesterMediaForm::className(), 'targetAttribute' => ['form_id' => 'id']],
            [['social_id'], 'exist', 'skipOnError' => true, 'targetClass' => Social::className(), 'targetAttribute' => ['social_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'social_id' => 'Social ID',
            'form_id' => 'Form ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm()
    {
        return $this->hasOne(TesterMediaForm::className(), ['id' => 'form_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocial()
    {
        return $this->hasOne(Social::className(), ['id' => 'social_id']);
    }
}
