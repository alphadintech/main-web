<?php

namespace common\models;

use Yii;

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
