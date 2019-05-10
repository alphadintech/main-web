<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Trees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-tree-index">
    <?php

    Modal::begin([

        'toggleButton' => [

            'label' => '<i class="glyphicon glyphicon-plus"></i> Add',

            'class' => 'btn btn-success'

        ],

        'closeButton' => [

            'label' => 'Close',

            'class' => 'btn btn-danger btn-sm pull-right',

        ],

        'size' => 'modal-lg',

    ]);


    echo $this->render('_form', ['model' => $schoolTreeModel, 'contentModel' => $schoolContentModel]);

    Modal::end();

    ?>
    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            [
//                'class' => 'yii\grid\DataColumn',
                'attribute' => 'parent.title',
                'label' => 'parent title',
                'format' => 'text',
            ],


            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return $model->lableofType();
                },
//                'label' => 'parent title',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' => 'text',
//                'options' => ['width' => '200']
            ],
            'title',
            [
                'attribute' => 'description',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' => 'text',
                'options' => ['width' => '200']
            ],
            //'part_order',
            //'section_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>