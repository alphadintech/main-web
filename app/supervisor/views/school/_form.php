<?php

use common\models\SchoolTree;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;


$typeJs = "
 function fill(obj) { 
                var id = $(obj).val(); //extract the id of selected category   
                $('#schoolcontent-body').prop('disabled', true);
                $('#schooltree-parent_id').empty();
                if(id == 10){
                 $('#schooltree-parent_id').prop('disabled', true);
                 }else{
                  if(id == 30){
                        $('#schoolcontent-body').prop('disabled', false);
                  }
               
                 $('#schooltree-parent_id').prop('disabled', false);
                 id=id - 10;
                $.ajax({
                    method : 'GET',
                    dataType : 'text',
                    url : '".Yii::$app->homeUrl.'/school/type-items?id='."' + id,
                    success : function (response) {
                        var response = JSON.parse(response);
                        var myDropDownList = document.getElementById('schooltree-parent_id');
                   
                        $.each(response, function(index, value) {
                            var option = document.createElement('option');
                                option.text = value;
                                option.value = index;
                               try {
                                    myDropDownList.options.add(option);
                                }
                                catch (e) {
                                    alert(e);
                                }
                        });
                    }
                });
               
                }
            }
";

$this->registerJs($typeJs, View::POS_END, 'my-options');
//print_r($parent);die;

/* @var $this yii\web\View */
/* @var $model SchoolTree */
/* @var $contentModel \common\models\SchoolContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-tree-form">

    <?php
    $condition = (isset($update))?array():['action' => Yii::$app->homeUrl.'/school/add-node'];

    $form = ActiveForm::begin($condition); ?>


    <?= $form->field($model, 'type')->dropDownList($model->getTypsOf(),
        [
            'onchange' => "fill(this)",

            'class' => 'form-control',
            'prompt' => 'Select Type Of Value'
        ]) ?>

    <?php if (isset($parent['list'])): ?>
        <?= $form->field($model, 'parent_id')->dropDownList($parent['list'], ['options' => [$parent['selected'] => ['Selected' => true]]])->label('Parent') ?>
    <?php else: ?>
        <?= $form->field($model, 'parent_id')->dropDownList([])->label('Parent') ?>
    <?php endif; ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'part_order')->textInput() ?>

    <?= $form->field($model, 'section_order')->textInput() ?>

    <?php
//    print_r($contentModel)
    $condition =(isset($contentModel->body))?['rows' => 6, 'disabled' => false]:['rows' => 6, 'disabled' => true];
    $lable = (isset($update))?'Update':'Add';
    echo $form->field($contentModel, 'body')->textarea($condition)
    ?>

    <div class="form-group">
        <?= Html::submitButton($lable, ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
