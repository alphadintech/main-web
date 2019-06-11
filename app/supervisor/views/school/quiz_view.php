<?php

use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;

?>
<?php $form = ActiveForm::begin(); ?>

<div class="row">
<?= $form->field($model, 'question')->textInput() ?>
<div class="col-md-6">
<?= $form->field($modelAnswer, 'text[0]')->textInput()->label('answer 1') ?>
<?= $form->field($modelAnswer, 'text[1]')->textInput()->label('answer 2') ?>
<?= $form->field($modelAnswer, 'text[2]')->textInput()->label('answer 3') ?>
<?= $form->field($modelAnswer, 'text[3]')->textInput()->label('answer 4') ?>
</div>
    <div class="col-md-12">
    <div class="form-group  required">
        <label class="control-label" for="curect-answer">جواب درست</label>
        <?= Html::dropDownList('curect-answer','0',[0=>1,1=>2,2=>3,3=>4],['class'=>'form-control'])?>
        <p class="help-block help-block-error"></p>
    </div>
    </div>

</div>
<div class="form-group">
    <?= Html::submitButton('ثبت', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
<div class="school-tree-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $questions,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'question',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' => 'text',
                'options' => ['width' => '200']
            ],


            //'part_order',
            //'section_order',

//            [
//                'attribute' => 'act',
//                'format' => 'raw',
//                'header' => '<abbr title="Area Coordinating Team">ACT</abbr>',
//                'value' => function ($model) {
//                    return '<a href="'.Yii::$app->urlManager->createUrl(['school/question-view','id'=>$model->id]).'">Edit</a>';
//                },
//            ],
            [
                'attribute' => 'act',
                'format' => 'raw',
                'header' => '<abbr title="Area Coordinating Team">ACT</abbr>',
                'value' => function ($model) {
                    return '<a href="'.Yii::$app->urlManager->createUrl(['school/question-delete','id'=>$model->id]).'">delete</a>';
                },
            ],
        ],
    ]); ?>


</div>
