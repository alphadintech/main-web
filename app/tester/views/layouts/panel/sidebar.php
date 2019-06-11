<?php

?>

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="heading">
                <h3 class="uppercase">بخش کاربری</h3>
            </li>
            <li class="nav-item  <?=(Yii::$app->controller->id == 'dashboard')?'active':'';?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['dashboard']) ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">پیشخوان</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item <?=(Yii::$app->controller->id == 'finance')?'active':'';?>" >
                <a href="<?= Yii::$app->urlManager->createUrl(['finance']) ?>" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">امور مالی</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">بخش آزمون</h3>
            </li>
            <li class="nav-item <?=(Yii::$app->controller->id == 'invitation')?'active':'';?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['invitation']) ?>" class="nav-link nav-toggle">
                    <i class="icon-globe"></i>
                    <span class="title">دعوتنامه‌ها</span>
                </a>
            </li>
            <li class="nav-item <?=(Yii::$app->controller->id == 'test')?'active':'';?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['test']) ?>" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">آزمون‌ها</span>
                </a>
            </li>
            <li class="nav-item <?=(Yii::$app->controller->id == 'school')?'active':'';?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['school']) ?>" class="nav-link nav-toggle">
                    <i class="icon-notebook"></i>
                    <span class="title">آکادمی</span>
                </a>
            </li>
        </ul>

    </div>
</div>
