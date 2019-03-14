<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app','About') ;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Yii::t('app',Html::encode($this->title)) ?></h1>
    <p><?= Yii::t('app','About alphadin portal version 1.1') ?></p>
    <p><?=  Yii::$app->formatter->asDate('2015-01-15','long') ?></p>


</div>
