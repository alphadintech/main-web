<?php
use yii\helpers\Html;
?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3>از اعتماد شما به مجموعه  <span>آلفادین</span> سپاسگذاریم </h3>

                    </div>
                    <h7> با توجه به استقبال بالا از این مجموعه امکان ثبت نام و استفاده مستقیم از پلتفرم فعلا وجود ندارد لذا خواهشمند است با پرکردن فرم زیر به ما اجازه دهید تا در زمانی که امکان ارائه خدمات به نحو احسنت به شما وجود داشت با شما تماس بگیریم </h7>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="نام و نام خانوادگی" name="testrequest[username]" required=""> </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="شرکت" name="testrequest[email]" required=""> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="تلفن تماس" name="testrequest[username]" required=""> </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="ایمیل" name="testrequest[email]" required=""> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea  class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off"  name="testrequest[username]" required="">شرح درخواست</textarea> </div>
                    </div>
                    <button type="submit" class="btn blue pull-right" name="login-button">ثبت نام</button>
                </div>

            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>