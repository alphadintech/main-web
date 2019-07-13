<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\SiteAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head();
    ?>
</head>

<body class="enable-animation">

<?php $this->beginBody() ?>

<div id="slidetop">
    <div class="container">

        <div class="row">

            <div class="col-md-4 text-right">
                <h6><i class="icon-heart"></i> چرا آلفادین?</h6>
                <p>آلفادین با بهره گیری از متخصصان حوزه تست نرم افزار با تکیه بر دانش روز و با همکاری هزاران نفر در قالب
                    آزمونگر این اطمینان را به مشاغل میدهد که تجارت آنها از نظر کیفت با کمترین چالش مواجه خواهد شد</p>
            </div>

            <div class="col-md-4 text-right">
                <h6><i class="fa-facheck"></i>مشاوره</h6>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-double-left"></i> مشاوران ما تا رسیدن به اهداف در کنار شما
                            خواهند بود </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-left"></i> برای گرفتن وقت مشاوره تماس بگیرید</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-left"></i> با اطمینان خاطر پیش بروید</a></li>

                </ul>
            </div>

            <div class="col-md-4 text-right">
                <h6><i class="icon-envelope"></i> اطلاعات تماس</h6>
                <ul class="list-unstyled">
                    <li><b>آدرس:</b> ایران ، تهران ، تهران <br/>پاسداران ، اختیاریه ، کوچه رشیدی ، پلاک 2</li>
                    <li><b>تلفن:</b>22222222-021</li>
                    <a href="mailto:support@yourname.com">
                        <li><b>ایمیل:</b> support@alphadin.com</li>
                    </a>
                </ul>
            </div>

        </div>

    </div>
    <a class="slidetop-toggle" href="#"><!-- toggle button --></a>
</div>

<!-- wrapper -->
<div id="wrapper">

    <div id="header" class="navbar-toggleable-md sticky clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="logo float-right" href="<?=Yii::$app->homeUrl?>">
                    <img src="sitetheme/images/_smarty/logo_dark.png" alt="">
                </a>
                <div class="navbar-collapse collapse float-left nav-main-collapse">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                                <!-- HOME -->
                                <a class="dropdown-toggle" href="#">
                                    خانه
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown ">
                                        <a class="dropdown" href="<?=Yii::$app->homeUrl?>">صفحه‌اصلی</a>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown" href="<?=Yii::$app->homeUrl?>#solutions">راهکارها</a>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown" href="<?=Yii::$app->homeUrl?>#Alphadine&amp;numbers">آلفادین و اعداد</a>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown" href="<?=Yii::$app->homeUrl?>#aboutus">درباره ما</a>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown" href="<?=Yii::$app->homeUrl?>#footer">تماس با ما</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="dropdown mega-menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                                <!-- PORTFOLIO -->
                                <a class="dropdown-toggle" href="#">
                                    خدمات
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">


                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>تضمین کیفیت</span></li>
                                                    <!--	/projects/WrapBootstrap_-_Smarty_v2.3.0_-_Website_-_Admin_-_RTL_-_WB02DSN1B/HTML_BS4/portfolio-single-slider.html-->
                                                    <li><a href="exploratory">ایرادیابی</a></li>
                                                    <li><a href="loadtest">آزمون بار</a></li>
                                                    <li><a href="regression">تست مجدد رفع ایراد</a></li>
                                                    <li><a href="structured">تست محدود</a></li>
                                                    <li><a href="cardsorting"> تست نحوه چیدمان</a></li>
                                                    <li><a href="testcase">تست مسیر مشخص</a></li>


                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>تجربه و روابط کاربری</span></li>
                                                    <li><a href="usability">استفاده پذیری</a></li>
                                                    <li><a href="competitor">تحلیل رقبا</a></li>
                                                    <li><a href="comparison">تحلیل مقایسه ای</a></li>
                                                    <li><a href="prototype">بررسی نمونه اولیه</a></li>
                                                    <li><a href="survey">نظرسنجی اختصاصی</a></li>

                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                                <!-- FEATURES -->
                                <a class="dropdown-toggle" href="#">
                                    آزمونگران
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown" href="<?=Yii::$app->urlManager->createUrl('signup-as-tester')?>">
                                            ثبت نام آزمونگر
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown" href="<?=Yii::$app->urlManager->createUrl('login')?>">
                                            ورود آزمونگر
                                        </a>
                                    </li>


                                </ul>
                            </li>
<!--                            <li class="dropdown nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">-->
<!--                                <a class="dropdown-toggle" href="#">-->
<!--                                    صاحبان مشاغل-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li class="dropdown">-->
<!--                                        <a class="dropdown" href="index-landing-5.html">-->
<!--                                            ورود به پنل-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="dropdown">-->
<!--                                        <a class="dropdown" href="index-landing-4.html">-->
<!--                                            ثبت درخواست-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
                        </ul>

                    </nav>
                </div>
            </div>
        </header>
    </div>
    <?= $content ?>
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-4 text-right">
                    <img class="footer-logo" src="~/sitetheme/images/_smarty/logo-footer.png" alt=""/>
                    <p>با ما در ارتباط باشید</p>
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                ایران ، تهران<br>
                                پاسداران اختیاریه کوچه رشیدی پلاک 2<br>

                            </li>
                            <li class="footer-sprite phone">
                                تلفن: 22569417-021
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:support@yourname.com">support@alphadin.com</a>
                            </li>
                        </ul>
                    </address>
                </div>

                <div class="col-md-4 text-right">
                    <h4 class="letter-spacing-1">فایل های راهنمایی</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <i class="fas fa-file-pdf"></i>
                            <h8>شرایط استخدام آزمونگر</h8>

                        </li>
                        <li>
                            <i class="fas fa-file-pdf"></i>
                            <h8>شرایط و نحوه تست پروژه‌ها</h8>
                        </li>
                        <li>
                            <i class="fas fa-file-pdf"></i>
                            <h8>قوانین و مقررات</h8>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-4 text-right">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">با ما در تماس باشید</h4>
                    <p>شماره تلفن خود راوارد کنید و با ما در ارتباط باشید</p>

                    <form class="validate" action="" method="post"
                          data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-rotate-45"></i></span>
                            <input type="email" id="email" name="email" class="form-control required"
                                   placeholder="شماره خود را وارد کنید">
                            <span class="input-group-btn">
										<button class="btn btn-success" type="submit">اشتراک</button>
									</span>
                        </div>
                    </form>
                    <!-- /Newsletter Form -->

                    <!-- Social Icons -->
                    <div class="mt-20">
                        <a href="#" class="social-icon social-icon-border social-telegram float-left"
                           data-toggle="tooltip" data-placement="top" title="فیسبوک">

                            <i class="icon-telegram"></i>
                            <i class="icon-telegram"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter float-left"
                           data-toggle="tooltip" data-placement="top" title="توییتر">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon social-icon-border social-linkedin float-left"
                           data-toggle="tooltip" data-placement="top" title="لینکیدن">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                        <a href="#" class="social-icon social-icon-border social-instagram float-left"
                           data-toggle="tooltip" data-placement="top" title="خبرنامه">
                            <i class="icon-instagram2"></i>
                            <i class="icon-instagram2"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container text-center">
                <ul class="float-right m-0 list-inline mobile-block">
                </ul>
                &copy; تمامی حقوق این وبسایت متعلق به آلفادین می باشد
            </div>
        </div>
    </footer>
</div>
<a href="#" id="toTop"></a>
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<script>var plugin_path = 'public/sitetheme/plugins/';</script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
