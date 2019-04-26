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
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'class' => 'ogin-form',
]); ?>
<h3 class="form-title font-green">پنل کاربری</h3>
<?php
$errorClass = false;
if ($model->hasErrors()) {
    $errorClass = true;
}
?>
<div class="alert alert-danger <?= (!$errorClass) ? 'display-hide' : '' ?>">
    <button class="close" data-close="alert"></button>
    <?php if ($errorClass) {
        foreach ($model->errors as $e) {
            echo "<span>" . $e[0] . "</span>";
        }
    }
    ?>
</div>

<div class="form-group">
    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
    <label class="control-label visible-ie8 visible-ie9">نام کاربری</label>
    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="ایمیل"
           name="login[email]"/></div>
<div class="form-group">
    <label class="control-label visible-ie8 visible-ie9">گذرواژه</label>
    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
           placeholder="گذرواژه" name="login[password]"/></div>
<div class="form-actions">
    <?= Html::submitButton('ورود', ['class' => 'btn green uppercase', 'name' => 'login-button']) ?>
    <label class="rememberme check mt-checkbox mt-checkbox-outline">
        <input type="checkbox" name="login[rememberMe]" value="1"/>یادآوری
        <span></span>
    </label>
    <?= Html::a('فراموشی کلمه عبور', ['site/request-password-reset'],['class'=>'forget-password']) ?>
</div>

<?php ActiveForm::end(); ?>