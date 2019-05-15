<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%school_content}}".
 *
 * @property int $id
 * @property int $part_id
 * @property int $author_id
 * @property string $body
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 *
 * @property User $author
 * @property SchoolTree $part
 */
class SchoolContent extends \yii\db\ActiveRecord
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
        return '{{%school_content}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE,  self::STATUS_DELETED]],
            [['part_id', 'author_id', 'body'], 'required'],
            [['part_id', 'author_id', 'status', 'updated_at', 'created_at'], 'integer'],
            [['body'], 'string'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['part_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolTree::className(), 'targetAttribute' => ['part_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'part_id' => 'Part ID',
            'author_id' => 'Author ID',
            'body' => 'Body',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPart()
    {
        return $this->hasOne(SchoolTree::className(), ['id' => 'part_id']);
    }
}
