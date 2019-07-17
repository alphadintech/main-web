<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3>از اعتماد شما به مجموعه <span>آلفادین</span> سپاسگذاریم </h3>

                    </div>
                    <h7> با توجه به استقبال بالا از این مجموعه امکان ثبت نام و استفاده مستقیم از پلتفرم فعلا وجود ندارد
                        لذا خواهشمند است با پرکردن فرم زیر به ما اجازه دهید تا در زمانی که امکان ارائه خدمات به نحو
                        احسنت به شما وجود داشت با شما تماس بگیریم
                    </h7>
                </div>
                <div class="col-md-12">
                    <hr>
                    <?php ActiveForm::begin() ?>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text"
                                   autocomplete="off" placeholder="نام و نام خانوادگی" name="regform[name]" required="">
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text"
                                   autocomplete="off" placeholder="شرکت" name="regform[company_name]" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text"
                                   autocomplete="off" placeholder="تلفن تماس" name="regform[phone]" required>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="email"
                                   autocomplete="off" placeholder="ایمیل" name="regform[email]" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea class="form-control form-control-solid placeholder-no-fix form-group" type="text"
                                      autocomplete="off" name="regform[desc]"  placeholder="شرح درخواست"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn blue pull-right" name="login-button">ثبت نام</button>
                    <?php ActiveForm::end() ?>
                </div>

            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>