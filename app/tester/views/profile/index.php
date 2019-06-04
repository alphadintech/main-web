<?php
/* @var $this yii\web\View */

use faravaghi\jalaliDatePicker\jalaliDatePicker;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use tester\models\Tester;
use tester\models\TesterMediaForm;

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/** @var \tester\models\TesterMediaForm $testerMediaForm */
//var_dump($citySelected);die;
$langRow = "";
$script = <<<JS
        var count = 1;
        $("#language_form").append(getLangRow());
        $('#plus_Lang').click(function (e) {
            count ++;
            $("#language_form").append(getLangRow());
        });
        function getLangRow() {
            return "<div class='language_row row' class='row'><div class='form-body col-md-3'><div class='form-group'><div class='col-md-9'><select name = 'lang[" +count+ "][name]' class='form-control'><option value='0'>انتخاب کنید</option> $langList </select></div></div></div><div class='form-body col-md-3'><div class='form-group'><label class='col-md-3 control-label'>خواندن</label><div class='col-md-9'><select name = 'lang[" +count+ "][read]' class='form-control'><option value='0'>nothing</option>$rateList</select></div></div></div><div class='form-body col-md-3'><div class='form-group'><label class='col-md-3 control-label'>نوشتن</label><div class='col-md-9'><select name = 'lang[" +count+ "][write]' class='form-control'><option value='0'>nothing</option>$rateList</select></div></div></div><div class='form-body col-md-3'><div class='form-group'><label class='col-md-3 control-label'>مکالمه</label><div class='col-md-9'><select name = 'lang[" +count+ "][speak]' class='form-control'><option value='0'>nothing</option>$rateList </select></div></div></div></div>"
                 }
JS;
$this->registerJs($script);
$script = <<<JS
       var intervalFunc = function () {
        $('#uploadtesteravatar-imagefile').html($('#uploadtesteravatar-imagefile').val());
    };
    $('#avatar-upload').on('click', function () { // use .live() for older versions of jQuery
        $('#uploadtesteravatar-imagefile').click();
        setInterval(intervalFunc, 1);
        return false;
    });
JS;
$this->registerJs($script);
$script = <<<JS
       $('.js-example-basic-multiple').select2();
JS;
$this->registerJs($script);
$home = Yii::$app->homeUrl;
$typeJs = <<<JS
 function fill(obj) { 
                var id = $(obj).val(); //extract the id of selected category   
                var home =  "$home";
              
                $.ajax({
                    method : 'GET',
                    dataType : 'text',
                    url :home + 'profile/state?id=' + id,
                    success : function (response) {
                        var response = JSON.parse(response);
                        var myDropDownList = document.getElementById('tester-city');
                       $('#tester-city').empty();
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
            
JS;

$this->registerJs($typeJs, View::POS_END, 'my-options');

/** @var Tester $testerModel */
?>

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> اطلاعات کاربری
    <small>تکمیل - ویرایش اطلاعات</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?= ($testerModel->avatar_id !== Null && !empty($testerModel->avatar->url)) ? Yii::$app->urlManagerFrontend->createUrl([$testerModel->avatar->url]) : 'image/profile-default.jpg'; ?>"
                         class="img-responsive" alt=""></div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?= ($testerModel->name) ? $testerModel->name . " " . $testerModel->family : "کاربر آزمونگر" ?></div>

                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                            <?= $form->field($modelUploadTesterAvatar, 'imageFile')->fileInput() ?>
                            <button>Submit</button>
                            <?php ActiveForm::end() ?>
                            <a id="avatar-upload" href="tester_profile.html">
                                <i class="icon-settings"></i> تکمیل - ویرایش </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">

            <div class="row">
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-transgender"></i> اطلاعات فردی
                            </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>

                            <div class="form-body">
                                <?=
                                $form->field($testerModel, 'name', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'نام خود را وارد کنید']
                                    )->label('نام', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'family', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'نام خانوادگی خود را وارد کنید']
                                    )->label('نام خانوادگی', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'nationality_code', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'کد ملی خود را وارد کنید']
                                    )->label('کد ملی', ['class' => 'col-md-3 control-label'])
                                ?>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">تاریخ تولد</label>
                                    <div class="col-md-9">
                                        <?php
                                        echo jalaliDatePicker::widget([
                                            'model' => $testerModel,
                                            'attribute' => 'birthday',
                                            'options' => ['placeholder' => 'تاریخ تولد خود را وارد کنید',
                                                'format' => 'yyyy/mm/dd',
                                                'viewformat' => 'yyyy/mm/dd',
                                                'placement' => 'left',
                                                'todayBtn'=> 'linked',
                                                ],
                                            'htmlOptions' => [
                                                'class'	=> 'form-control',
                                                'placeholder'=>"تاریخ تولد خود را وارد کنید"
                                            ]
                                        ]);
                                        ?>
                                    </div>
                                </div>

                                <?=
                                $form->field($testerModel, 'gender', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList([Tester::GENDER_MAN => 'مرد', Tester::GENDER_WOMAN => 'زن', Tester::GENDER_OTHER => 'دیگر',])
                                    ->label('جنسیت', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'maried', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList([1 => 'مجرد', 2 => 'متاهل'])
                                    ->label('تاهل', ['class' => 'col-md-3 control-label'])
                                ?>

                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-phone"></i> راه های تماس
                            </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ایمیل</label>
                                    <div class="col-md-9">
                                        <input disabled type="text" class="form-control"
                                               placeholder="<?= Yii::$app->user->identity->email ?>">
                                    </div>
                                </div>


                                <?=
                                $form->field($testerModel, 'phone', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'تلفن ثابت را وارد کنید']
                                    )->label('تلفن ثابت', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'mobile', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'تلفن همراه خود را وارد کنید']
                                    )->label('تلفن همراه', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'postal_code', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'کد پستی خود را وارد کنید']
                                    )->label('کد پستی', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerModel, 'state', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList($stateList, [
                                        'onchange' => "fill(this)",
                                        'value'=>$stateSelected

                                    ])
                                    ->label('استان', ['class' => 'col-md-3 control-label'])
                                ?>
                                <?php

                                if(empty($cityList))
                                    $cityList = [0=>"استان خود را انتخاب کنید"];
                                echo $form->field($testerModel, 'city_id', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList($cityList, [
                                        'id' => "tester-city",
                                        'value'=>$citySelected
                                    ])
                                    ->label('شهر', ['class' => 'col-md-3 control-label']);
                                ?>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->


                </div>
                <div class="col-md-12">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-language"></i> زبان های خارجی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">

                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>
                            <div id="language_form">
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات
                                        </button>

                                        <div id="plus_Lang" class="btn green pull-right col-md-offset-1">+</div>
                                    </div>

                                </div>
                            </div>
                            <?php ActiveForm::end() ?>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <div class="col-md-6">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-graduation-cap"></i> اطلاعات تحصیلی و شغلی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">
                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>
                            <div class="form-body">
                                <?=
                                /** @var \tester\models\TesterJobAndEdu $testerJobEdu */
                                $form->field($testerJobEdu, 'education', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList(\tester\models\TesterJobAndEdu::edu_select())
                                    ->label('تحصیلات', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=

                                $form->field($testerJobEdu, 'major', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'رشته تحصیلی خود را وارد کنید'])
                                    ->label('رشته تحصیلی', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerJobEdu, 'employment_status', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList(\tester\models\TesterJobAndEdu::status_select())
                                    ->label('وضعیت استخدام', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerJobEdu, 'job_title', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList(\tester\models\TesterJobAndEdu::job_title_select())
                                    ->label('مرحله شغلی', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerJobEdu, 'job_scale', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->dropDownList(\tester\models\TesterJobAndEdu::job_scale_select())
                                    ->label('مقیاس شرکت', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerJobEdu, 'income', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'درامد ماهیانه خود را وارد کنید'])
                                    ->label('درامد ماهیانه', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerJobEdu, 'job_description', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'کوتاه در مورد کاری که انجام میدهید توضیح دهید'])
                                    ->label('توضیح شغلی', ['class' => 'col-md-3 control-label'])
                                ?>

                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                    </div>
                                </div>
                            </div>

                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-bicycle"></i> اوقات فراغت
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">علاقه مندی</label>
                                    <div class="col-md-9">

                                        <div class="input-group select2-bootstrap-prepend">

                                            <?=
                                            Select2::widget([
                                                'name' => 'interest',
                                                'value' => $selectedInterest,
                                                'data' => $interestList,
                                                'size' => Select2::MEDIUM,
                                                'options' => ['placeholder' => 'علاقه مندی', 'multiple' => true],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ورزش</label>
                                    <div class="col-md-9">

                                        <div class="input-group select2-bootstrap-prepend">
                                            <?=
                                            Select2::widget([
                                                'name' => 'sport',
                                                'value' => $selectedSport,
                                                'data' => $sportList,
                                                'size' => Select2::MEDIUM,
                                                'options' => ['placeholder' => 'ورزش', 'multiple' => true],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
                <div class="col-md-12">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-tv"></i> رسانه
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-6 control-label">شبکه های اجتماعی</label>
                                    <div class="col-md-6">

                                        <div class="input-group select2-bootstrap-prepend">
                                            <?=
                                            Select2::widget([
                                                'name' => $testerMediaForm->formName() . "[social][]",
                                                'value' => $selectedSocial,
                                                'data' => $socialList,
                                                'size' => Select2::MEDIUM,
                                                'options' => ['placeholder' => 'شبکه های اجتماعی', 'multiple' => true],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <?=
                                $form->field($testerMediaForm, 'q1', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q1'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q2', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q2'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q3', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q3'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q4', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q4'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q5', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q5'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>
                                <?=
                                $form->field($testerMediaForm, 'q6', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q6'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q7', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->dropDownList(TesterMediaForm::getOptions('q7'))
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                                <?=
                                $form->field($testerMediaForm, 'q8', ['template' => '{label}<div class="col-md-6">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'آشنایی با رویداد های جدید ...'])
                                    ->label(null, ['class' => 'col-md-6 control-label'])
                                ?>

                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                    </div>
                                </div>
                            </div>

                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
                <div class="col-md-6">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-credit-card"></i> اطلاعات بانکی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <?php
                            Pjax::begin([
                                // Pjax options
                            ]);
                            $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'form-horizontal',
                                    'data' => ['pjax' => true]
                                ]
                            ]); ?>
                            <div class="form-body">


                                <?=
                                $form->field($testerBankAcount, 'acount_num', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'شماره حساب خود را وارد کنید'])
                                    ->label('شماره حساب', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerBankAcount, 'card_num', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'شماره کارت خود را وارد کنید'])
                                    ->label('شماره کارت', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerBankAcount, 'sheba', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'شماره شبا حساب خود را وارد کنید'])
                                    ->label('شماره شبا', ['class' => 'col-md-3 control-label'])
                                ?>

                                <?=
                                $form->field($testerBankAcount, 'bank_name', ['template' => '{label}<div class="col-md-9">{input}</div>{error}'])
                                    ->input('text',
                                        ['class' => 'form-control', 'placeholder' => 'نام بانک حساب خود را وارد کنید'])
                                    ->label('نام بانک', ['class' => 'col-md-3 control-label'])
                                ?>

                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            ActiveForm::end();
                            Pjax::end();
                            ?>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>