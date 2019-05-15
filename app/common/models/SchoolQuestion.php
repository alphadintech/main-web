<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%school_question}}".
 *
 * @property int $id
 * @property string $question
 * @property int $section_id
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 * @property int $answer_id
 *
 * @property SchoolAnswer[] $schoolAnswers
 * @property SchoolAnswer $answer
 * @property SchoolTree $section
 */
class SchoolQuestion extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ]
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school_question}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE,  self::STATUS_DELETED]],
            [['question', 'section_id', 'answer_id'], 'required'],
            [['question'], 'string'],
            [['section_id', 'status', 'updated_at', 'created_at', 'answer_id'], 'integer'],
            [['answer_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolAnswer::className(), 'targetAttribute' => ['answer_id' => 'id']],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolTree::className(), 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'section_id' => 'Section ID',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'answer_id' => 'Answer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolAnswers()
    {
        return $this->hasMany(SchoolAnswer::className(), ['question_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswer()
    {
        return $this->hasOne(SchoolAnswer::className(), ['id' => 'answer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(SchoolTree::className(), ['id' => 'section_id']);
    }
}
