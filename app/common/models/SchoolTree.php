<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%school_tree}}".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $type
 * @property string $title
 * @property string $description
 * @property int $part_order
 * @property int $section_order
 *
 * @property SchoolContent[] $schoolContents
 * @property SchoolQuestion[] $schoolQuestions
 * @property SchoolTesterResult[] $schoolTesterResults
 */
class SchoolTree extends \yii\db\ActiveRecord
{
    const type_course =10;
    const type_section =20;
    const type_part =30;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school_tree}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'part_order', 'section_order','type'], 'integer'],
            [['title'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'type' => 'Type',
            'title' => 'Title',
            'description' => 'Description',
            'part_order' => 'Part Order',
            'section_order' => 'Section Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolContents()
    {
        return $this->hasMany(SchoolContent::className(), ['part_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolQuestions()
    {
        return $this->hasMany(SchoolQuestion::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolTesterResults()
    {
        return $this->hasMany(SchoolTesterResult::className(), ['section_id' => 'id']);
    }


    public function getTypsOf()
    {
        return [
            SchoolTree::type_course => 'Course',
            SchoolTree::type_section => 'Section',
            SchoolTree::type_part => 'Part Of Section',
        ];
    }

    public function lableOfType()
    {
        switch ($this->type){
            case SchoolTree::type_course :
                return 'Course';
                break;
            case  SchoolTree::type_section :
                return 'Section';
                break;
            case SchoolTree::type_part :
                return 'Part Of Section';
                break;
            default:
                return " unknown";
                break;
        }

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(SchoolTree::className(), ['id' => 'parent_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function titleOfParent()
    {
//        print_r($this->parent_id);die;
        $p = SchoolTree::find()->where(['id'=>$this->parent_id])->one();
        if(isset($p->title)){
            return $p->title;
        }
        return 'main';
    }
}
