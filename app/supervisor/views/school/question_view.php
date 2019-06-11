<?php

use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;
$modelAnswer = new \common\models\SchoolAnswer();
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

