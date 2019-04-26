<?php

/* @var $this \yii\web\View */

/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\SignupTesterAsset;

SignupTesterAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="rtl" lang="<?= Yii::$app->language ?>">
<head >
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login">
<?php $this->beginBody() ?>
<div class="user-login-5">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
