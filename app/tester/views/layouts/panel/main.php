<?php

/* @var $this \yii\web\View */
/* @var $content string */


use tester\assets\PanelAsset;
use tester\models\Tester;
use yii\helpers\Html;
$tester = Tester::find()->where(['user_id' => Yii::$app->user->id])->one();
//print_r($tester);die;
PanelAsset::register($this);
//$this->registerJsFile('../theme/assets/global/plugins/jquery.min.js')
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  dir="rtl" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="IRANSansLight page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white page-md">
<?php $this->beginBody() ?>

<?=  $this->render('nav')?>


<div class="clearfix"> </div>
<div class="page-container">
   <?=  $this->render('sidebar')?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <?= $content ?>

        </div>
    </div>
</div>

</div>

<div class="page-footer">
    <div class="page-footer-inner"> 2019 &copy;
        <a href="http://google.com" title="hehe" target="_blank">alphadin</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>