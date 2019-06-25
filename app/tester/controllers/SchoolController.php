<?php

namespace tester\controllers;

use common\models\SchoolQuestion;
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
        $parent = SchoolTree::find()
            ->Where(['id' => $id])
            ->one();

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
            'sections' => $sections,
            'parentTitle'=>$parent->title
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionParts($id)
    {
        $parts = SchoolTree::find()
            ->joinWith('schoolContents')
            ->where(['type' => SchoolTree::type_part])
            ->andWhere(['parent_id' => $id])
            ->orderBy(['part_order' => SORT_ASC])
            ->asArray()
            ->all();
        $parent = SchoolTree::find()
            ->where(['id' => $parts[0]["parent_id"]])
            ->one();

        $parparent = SchoolTree::find()
            ->where(['id' => $parent["parent_id"]])
            ->one();

        return $this->render('part_list', [
            'parts' => $parts,
            'parent'=>$parent,
            'parparent'=>$parparent
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionQuiz($id)
    {
//        print_r($_POST);die;
        $request =Yii::$app->request->post();
        $questions = SchoolQuestion::find()->where(['section_id'=>$id])
            ->all();
        if(isset($request['submit'])){
            $postAnswers = $request['questions'];
            $trueAnswers=0;
            foreach ($postAnswers as $questionId=>$answerId){
                $question = SchoolQuestion::find()->where(['id'=>$questionId])
                    ->one();
                if($question->answer_id == $answerId){
                    $trueAnswers++;
                }
            }
            $allQ = count($questions);

            $testerResult =SchoolTesterResult::find()->where(['tester_id'=> Yii::$app->user->id])->andWhere(['section_id'=>$id])->one();
            if(!$testerResult)
                $testerResult = new SchoolTesterResult();
            $testerResult->section_id = $id;
            $testerResult->tester_id= Yii::$app->user->id;
            $testerResult->result= (string)($trueAnswers/$allQ);

            if(($trueAnswers/$allQ)== 1){
                $testerResult->status= SchoolTesterResult::STATUS_PASS;
            }else{
                $testerResult->status= SchoolTesterResult::STATUS_FAILED;
            }
            if(!$testerResult->save()){
                print_r($testerResult->errors);die;
            }
            return $this->redirect(['school/']);
        }


        return $this->render('quiz_form', [
            'questions' => $questions
        ]);
    }

}
