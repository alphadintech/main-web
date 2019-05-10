<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%school_answer}}".
 *
 * @property int $id
 * @property string $text
 * @property int $question_id
 *
 * @property SchoolQuestion $question
 * @property SchoolQuestion[] $schoolQuestions
 */
class SchoolAnswer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school_answer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'question_id'], 'required'],
            [['text'], 'string'],
            [['question_id'], 'integer'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolQuestion::className(), 'targetAttribute' => ['question_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'question_id' => 'Question ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(SchoolQuestion::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolQuestions()
    {
        return $this->hasMany(SchoolQuestion::className(), ['answer_id' => 'id']);
    }
}
