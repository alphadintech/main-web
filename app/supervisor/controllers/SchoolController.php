<?php

namespace supervisor\controllers;

use common\models\SchoolContent;
use Yii;
use common\models\SchoolTree;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SchoolController implements the CRUD actions for SchoolTree model.
 */
class SchoolController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $layout = "panel";
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @param SchoolTree $schoolTreeModel
     * @param SchoolContent $schoolContentModel
     * @return bool|SchoolContent
     */
    protected function addContent($schoolTreeModel, $schoolContentModel)
    {
        $schoolContentModel->author_id = Yii::$app->user->id;
        $schoolContentModel->part_id = $schoolTreeModel->id;
        if ($schoolContentModel->save()) {
            return true;
        }
        print_r(Yii::$app->user->identity->name);
        die('sasa');
        return $schoolContentModel;
    }

    /**
     * @param $id
     * @return string
     */
    public function actionTypeItems($id)
    {
        if (Yii::$app->request->isAjax) {
            $raw = SchoolTree::find()
                ->where(['type' => $id])
                ->asArray()
                ->all();
            $results = [];
            /*
             * TODO : DO Best Soulotion
             */
            foreach ($raw as $item) {
                $results[$item['id']] = $item['title'];
            }
            return json_encode($results);
        }

    }

    /**
     * Lists all SchoolTree models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SchoolTree::find(),
        ]);
        $model = new SchoolTree();
        $schoolContentModel = new SchoolContent();
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'schoolTreeModel' => $model,
            'schoolContentModel' => $schoolContentModel,
        ]);
    }

    /**
     * Displays a single SchoolTree model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SchoolTree model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAddNode()
    {

        $model = new SchoolTree();

        if ($model->load(Yii::$app->request->post())) {
            $model->part_order = (!empty($model->part_order)) ? $model->part_order : 1;
            $model->section_order = (!empty($model->section_order)) ? $model->section_order : 1;
            if ($model->save()) {
                $schoolContentModel = new SchoolContent();
                if ($model->type == SchoolTree::type_part && $schoolContentModel->load(Yii::$app->request->post())) {
                    if ($schoolContentModel = $this->addContent($model, $schoolContentModel)) {

                        Yii::$app->session->setFlash('success', "Node with body created successfully.");
                        return $this->redirect(['view', 'id' => $model->id]);
                    } else {

                        Yii::$app->session->setFlash('success', "Node created successfully.");
                        Yii::$app->session->setFlash('error', $schoolContentModel->firstErrors);
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
                Yii::$app->session->setFlash('success', "Node created successfully.");
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->setFlash('error', $model->firstErrors);
            }
        }

        return $this->redirect('index');
    }

    /**
     * Updates an existing SchoolTree model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $schoolContentModel = $this->findContentModel($model->id);
        if (!$schoolContentModel) {
            $schoolContentModel = new SchoolContent();
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->type == SchoolTree::type_course) {
                $model->parent_id = 0;
                $model->save();
            }
            if ($schoolContentModel->load(Yii::$app->request->post()) && $schoolContentModel->save())
                return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $parent = [];
        if ($model->parent_id != 0) {
            $raw = SchoolTree::find()
                ->where(['type' => $model->type - 10])
                ->asArray()
                ->all();
            $results = [];
            /*
             * TODO : DO Best Soulotion
             */
            foreach ($raw as $item) {
                $results[$item['id']] = $item['title'];
            }
            $parent['list'] = $results;
            $parent['selected'] = $model->parent_id;
        }
        return $this->render('update', [
            'model' => $model,
            'parent' => $parent,
            'schoolContentModel' => $schoolContentModel,
        ]);
    }

    /**
     * Deletes an existing SchoolTree model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SchoolTree model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SchoolTree the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SchoolTree::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the SchoolTree model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return bool|SchoolContent
     */
    protected function findContentModel($part_id)
    {
        if (($model = SchoolContent::findOne(['part_id' => $part_id])) !== null) {
            return $model;
        }

        return false;
    }
}
