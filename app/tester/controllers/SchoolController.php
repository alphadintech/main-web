<?php

namespace tester\controllers;

use common\models\SchoolTesterResult;
use common\models\SchoolTree;
use Yii;

class SchoolController extends \yii\web\Controller
{
    public $layout = "panel/main";

    public function actionIndex()
    {

        $courses = SchoolTree::find()
            ->where(['type' => SchoolTree::type_course])
            ->asArray()
            ->all();
        if ($courses) {
            foreach ($courses as $index => $course) {
                $sectionIds = SchoolTree::getSectionIds($course['id']);
                if ($sectionIds)
                    $courses[$index]['sectionsCount'] = count($sectionIds);
                else
                    $courses[$index]['sectionsCount'] = 0;
                $passedCount = 0;
                if ($sectionIds) {
                    foreach ($sectionIds as $sectionId) {
                        $isPass = SchoolTesterResult::find()
                            ->where(['section_id' => $sectionId])
                            ->andWhere(['status' => SchoolTesterResult::STATUS_PASS, 'tester_id' => Yii::$app->user->id])
                            ->exists();
                        if ($isPass)
                            $passedCount = $passedCount + 1;
                    }
                }
                $courses[$index]['passedCount'] = $passedCount;
            }
        }

        return $this->render('index', [
            'courses' => $courses
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionSections($id)
    {
        $sections = SchoolTree::find()
            ->where(['type' => SchoolTree::type_section])
            ->andWhere(['parent_id' => $id])
            ->orderBy(['section_order' => SORT_ASC])
            ->asArray()
            ->all();
        foreach ($sections as $index => $section) {
            $status = SchoolTesterResult::find()
//                ->joinWith('statuslable')
                ->where(['section_id' => $section['id']])
                ->andWhere(['tester_id' => Yii::$app->user->id])
                ->one();
            if ($status) {
                /** @var SchoolTesterResult $status */
                $sections[$index]['status'] = $status->status_lable;
            }else{
                $sections[$index]['status'] = 'Unread';
            }
        }
        return $this->render('section_list', [
            'sections' => $sections
        ]);
    }
    public function actionParts($id)
    {
        $parts = SchoolTree::find()
            ->joinWith('schoolContents')
            ->where(['type' => SchoolTree::type_part])
            ->andWhere(['parent_id' => $id])
            ->orderBy(['part_order' => SORT_ASC])
            ->asArray()
            ->all();
        return $this->render('part_list', [
            'parts' => $parts
        ]);
    }

}
