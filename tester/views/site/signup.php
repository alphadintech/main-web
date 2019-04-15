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
        <img class="login-logo login-6" src="<?=Yii::$app->homeUrl?>panel/assets/pages/img/login/login-invert.png" />
        <div class="login-content">
            <h1>ثبت نام آزمونگر</h1>
            <p> در سامانه آلفادین ما به دوستان و همراهانمان مهارت آزمونگری یا تست می آموزیم ، باآموزش های دریافت شده وبسایت ها و اپلیکیشن ها را تست کرده و درآمد کسب میکنیم .  </p>
            <p> با کسب درآمد از اوقات بیکاری خود یک قدم فاصله دارید. </p>
            <p> کافیست هم اکنون ثبت نام کنید. </p>
            <form action="javascript:;" class="login-form" method="post">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>اطلاعات فرم را با دقت پرکنید </span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="نام و نام خانوادگی" name="username" required/> </div>
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="ایمیل" name="password" required/> </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="گذرواژه" name="username" required/> </div>
                    <div class="col-xs-6">
                        <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="تکرار گذرواژه" name="password" required/> </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" value="1" /><a href="http://google.com">قوانین و مقررات آلفادین</a> را خوانده ام و می پذیرم
                            <span></span>
                        </label>
                    </div>
                    <div class="col-sm-8 text-right">
                        <button class="btn blue" type="submit">ثبت نام</button>
                    </div>
                </div>
            </form>
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