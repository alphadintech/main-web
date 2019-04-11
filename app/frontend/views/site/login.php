<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN LOGIN FORM -->
<form class="login-form" action="index.html" method="post">
    <h3 class="form-title font-green">پنل کاربری</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> نام کاربری خود را وارد کنید </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">نام کاربری</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="نام کاربری" name="username" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">گذرواژه</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="گذرواژه" name="password" /> </div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase">ورود</button>
        <label class="rememberme check mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="remember" value="1" />یاداوری
            <span></span>
        </label>
        <a href="javascript:;" id="forget-password" class="forget-password">فراموشی کلمه عبور</a>
    </div>
    <!--<div class="login-options">-->
    <!--<h4>Or login with</h4>-->
    <!--<ul class="social-icons">-->
    <!--<li>-->
    <!--<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>-->
    <!--</li>-->
    <!--</ul>-->
    <!--</div>-->
</form>
<!-- END LOGIN FORM -->
<!-- BEGIN FORGOT PASSWORD FORM -->
<form class="forget-form" action="index.html" method="post">
    <h3 class="font-green">فراموشی کلمه عبور</h3>
    <p> برای بازیابی گذرواژه ایمیل خود را وارد کنید . </p>
    <div class="form-group">
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="ایمیل" name="email" /> </div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn green btn-outline">بازگشت</button>
        <button type="submit" class="btn btn-success uppercase pull-right">تایید</button>
    </div>
</form>
<!-- END FORGOT PASSWORD FORM -->
