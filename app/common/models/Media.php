<?php

namespace common\models;

use tester\models\Tester;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%media}}".
 *
 * @property int $id
 * @property string $url
 * @property int $height
 * @property int $width
 * @property int $size
 * @property int $status
 * @property int $updated_at
 * @property int $created_at
 *
 * @property Tester[] $testers
 */
class Media extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE= 10;
    const STATUS_DELETED= 0;
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
        return '{{%media}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['height', 'width', 'size', 'status', 'updated_at', 'created_at'], 'integer'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'height' => 'Height',
            'width' => 'Width',
            'size' => 'Size',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesters()
    {
        return $this->hasMany(Tester::className(), ['avatar_id' => 'id']);
    }
}
