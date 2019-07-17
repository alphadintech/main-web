<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row bs-reset">
    <div class="col-md-6 login-container bs-reset">
        <img class="login-logo login-6" src="<?=Yii::$app->homeUrl?>theme/assets/pages/img/login/login-invert.png" />
        <div class="login-content">
            <h1>ثبت نام آزمونگر</h1>
            <p> در سامانه آلفادین ما به دوستان و همراهانمان مهارت آزمونگری یا تست می آموزیم ، باآموزش های دریافت شده وبسایت ها و اپلیکیشن ها را تست کرده و درآمد کسب میکنیم .  </p>
            <p> با کسب درآمد از اوقات بیکاری خود یک قدم فاصله دارید. </p>
            <p> کافیست هم اکنون ثبت نام کنید. </p>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal'
            ]); ?>

            <?php
            $errorClass =false;
            if($model->hasErrors()){
              $errorClass = true;
            }
            ?>
                <div class="alert alert-danger <?=(!$errorClass)?'display-hide':''?>">
                    <button class="close" data-close="alert"></button>
                    <?php
                    if($errorClass){
                        foreach ($model->errors as $e){
                            echo "<span>". $e[0] ."</span>";
                        }
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="نام و نام خانوادگی" name="signup[username]" required/> </div>
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="ایمیل" name="signup[email]" required/> </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="گذرواژه" name="signup[password]" required/> </div>
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="تکرار گذرواژه" name="signup[password_repeat]" required/> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <?= Html::submitButton('ثبت نام', ['class' => 'btn blue', 'name' => 'login-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="login-footer">
            <div class="row bs-reset">
                <div class="col-xs-5 bs-reset">
                    <ul class="login-social">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-social-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-7 bs-reset">
                    <div class="login-copyright text-right">
                        <p>آلفادین</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 bs-reset">
        <div class="login-bg"> </div>
    </div>
</div>