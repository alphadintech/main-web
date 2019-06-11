<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%school_tester_result}}".
 *
 * @property int $id
 * @property int $tester_id
 * @property int $section_id
 * @property string $result
 * @property int $time
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 *
 * @property string $status_lable
 * @property SchoolTree $section
 * @property User $tester
 */
class SchoolTesterResult extends \yii\db\ActiveRecord
{
    public $status_lable;
    const STATUS_UNREAD = 1;
    const STATUS_READ = 5;
    const STATUS_PASS = 10;
    const STATUS_FAILED = 7;

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
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_AFTER_FIND => 'status_lable'
                ],
                'value' => function ($event) {
                    $lable = [
                        SchoolTesterResult::STATUS_UNREAD => 'Unread',
                        SchoolTesterResult::STATUS_READ => 'Read',
                        SchoolTesterResult::STATUS_PASS => 'Passed',
                        SchoolTesterResult::STATUS_FAILED => 'Failed',
                    ];
                    return  $lable[$this->status];

                },
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school_tester_result}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_UNREAD],
            ['status', 'in', 'range' => [self::STATUS_UNREAD, self::STATUS_READ, self::STATUS_FAILED, self::STATUS_PASS]],
            [['tester_id', 'section_id'], 'required'],
            [['tester_id', 'section_id', 'time', 'status', 'updated_at', 'created_at'], 'integer'],
            [['result','status_lable'], 'string', 'max' => 255],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolTree::className(), 'targetAttribute' => ['section_id' => 'id']],
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
            'section_id' => 'Section ID',
            'result' => 'Result',
            'time' => 'Time',
            'status' => 'Status',
            'status_lable' => 'Status Lable',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(SchoolTree::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTester()
    {
        return $this->hasOne(User::className(), ['id' => 'tester_id']);
    }

}
