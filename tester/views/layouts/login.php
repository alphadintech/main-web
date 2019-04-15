<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAsset::register($this);
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
<div class="logo">
    <a href="index.html">
        <img src="<?=Yii::$app->homeUrl?>/panel/assets/pages/img/logo-big.png" alt=""/> </a>
</div>
<div class="content">
    <?= $content ?>
</div>
<div class="copyright"> آلفادین</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
