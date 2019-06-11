<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="school-tree-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $sections,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'title',
            [
                'attribute' => 'description',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' => 'text',
                'options' => ['width' => '200']
            ],

            [
//                'class' => 'yii\grid\DataColumn',
                'attribute' => 'parent.title',
                'label' => 'parent title',
                'format' => 'text',
            ],

            //'part_order',
            //'section_order',

            [
                'attribute' => 'act',
                'format' => 'raw',
                'header' => '<abbr title="Area Coordinating Team">ACT</abbr>',
                'value' => function ($model) {
                    return '<a href="'.Yii::$app->urlManager->createUrl(['school/quiz-view','id'=>$model->id]).'">quiz</a>';
                },
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
