<?php
/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">صفحه اصلی</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>ناحیه کاربری</span>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="submit" class="btn red">خروج از حساب کاربری</button>
        </div>
    </div>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> اطلاعات کاربری
    <small>تکمیل - ویرایش اطلاعات</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> مهرداد پدرام </div>
                    <div class="profile-usertitle-job"> سرپرست دوم </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="tester_profile.html">
                                <i class="icon-settings"></i> تکمیل - ویرایش </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 337 </div>
                        <div class="uppercase profile-stat-text"> امتیاز </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 51 </div>
                        <div class="uppercase profile-stat-text"> تست </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 61 </div>
                        <div class="uppercase profile-stat-text"> باگ </div>
                    </div>
                </div>
                <!-- END STAT -->
                <div>
                    <h4 class="profile-desc-title">علاقه مند به</h4>
                    <span class="profile-desc-text"> موسیقی ، برنامه نویسی ، وبلاگ نویسی ، فیلم ، بازیگری </span>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-twitter"></i>
                        <a href="http://www.twitter.com/keenthemes/">@khachoghchi</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-facebook"></i>
                        <a href="http://www.facebook.com/keenthemes/">mehrdad-pedram</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-paper-plane-o"></i>
                        <a href="http://www.facebook.com/keenthemes/">@pedram</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-camera"></i>
                        <a href="http://www.facebook.com/keenthemes/">@mehdad</a>
                    </div>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">

            <div class="row">
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-transgender"></i> اطلاعات فردی
                            </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <?php $form = ActiveForm::begin([

                                'class' => 'form-horizontal',
                            ]); ?>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">نام</label>
                                        <div class="col-md-9">
                                            <input type="text" name="Individual[name]" class="form-control" placeholder="نام خود را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">نام خانوادگی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="Individual[family]"
                                                   placeholder="نام خانوادگی خود را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">کد ملی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="Individual[nationality_code]"
                                                   placeholder="کد ملی خود را وارد کنید">
                                        </div>
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-md-3 control-label">تاریخ تولد</label>-->
<!--                                        <div class="col-md-9">-->
<!--                                            <input type="text" class="form-control"-->
<!--                                                   placeholder="تاریخ تولد خود را وارد کنید">-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">جنسیت</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="Individual[gender]">
                                                <option value="10" >زن</option>
                                                <option value="20" >مرد</option>
                                                <option value="30" >دیگر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">تاهل</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="Individual[gender]">
                                                <option  value="10" >مجرد</option>
                                                <option  value="20" >متاهل</option>
                                                <option  value="30" >در رابطه</option>
                                                <option  value="40" >جدا شده</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <?= Html::submitButton('ثبت اطلاعات', ['class' => 'btn green pull-right', 'name' => 'save']) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>

                <div class="col-lg-6">


                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-phone"></i> راه های تماس
                            </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" >

                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ایمیل</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="ایمیل خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">تلفن ثابت</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="تلفن ثابت را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">تلفن همراه</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="تلفن همراه خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">کد پستی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="کد پستی خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">شهر</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="شهر خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">استان</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="استان خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->



                </div>
                <div class="col-md-12">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-language"></i> زبان های خارجی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <form class="form-horizontal" role="form">
                                <div class="row">
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">زبان 1</label>
                                            <div class="col-md-9">

                                                <select class="form-control">

                                                    <option>انتخاب کنید</option>
                                                    <option>انگلیسی English</option>
                                                    <option>ساجده адыгэбзэ (آدیگِبزه)</option>
                                                    <option>آستوری Asturianu</option>
                                                    <option>آسی Ирон (ایرون)</option>
                                                    <option>آفریکانس Afrikaans</option>
                                                    <option>آلبانیایی Shqip</option>
                                                    <option>آلمانی Deutsch (دویچ)</option>
                                                    <option>آمهاری</option>
                                                    <option>اردو اردو</option>
                                                    <option>ارمنی Հայերեն (هایرن)</option>
                                                    <option>ازبکی uzbekcha</option>
                                                    <option>اسپانیایی Español (اسپانیول)</option>
                                                    <option>اسپرانتو Esperanto (اِسپِرانتو)</option>
                                                    <option>استونیایی Eesti</option>
                                                    <option>اسلواکیایی Slovenčina</option>
                                                    <option>اسلوونیایی Slovenščina</option>
                                                    <option>اندونزیایی Bahasa Indonesia</option>
                                                    <option>اوکراینی Українська (اوکرائینسکا)</option>
                                                    <option>اویغوری</option>
                                                    <option>ایتالیایی Italiano</option>
                                                    <option>ایرلندی Gaeilge</option>
                                                    <option>ایسلندی Íslenska</option>
                                                    <option>باسکی Euskara</option>
                                                    <option>بختیاری Bakhteyari</option>
                                                    <option>بلاروسی Беларуская (بلاروسکایا)</option>
                                                    <option>بلغاری Български (بلگارسکی)</option>
                                                    <option>بلوچی Baloochi</option>
                                                    <option>بنگالی</option>
                                                    <option>بوسنیایی Bosanski</option>
                                                    <option>براهویی</option>
                                                    <option>پرتغالی Português</option>
                                                    <option>پشتو پښتو</option>
                                                    <option>تاتاری Tatarça</option>
                                                    <option>تاتی تاتی زوان</option>
                                                    <option>تالشی تالشی زوون</option>
                                                    <option>تاگالوگ</option>
                                                    <option>تایلندی ภาษาไทย</option>
                                                    <option>ترکی آذربایجانی Azərbaycan dili(آذربایجان دیلی)</option>
                                                    <option>ترکی استانبولی Türkçe</option>
                                                    <option>ترکمنی</option>
                                                    <option>ترکی خراسانی</option>
                                                    <option>جاوه‌ای Basa Jawa</option>
                                                    <option>چکی Česká</option>
                                                    <option>چواش Чӑваш (چواش)</option>
                                                    <option>چینی 中文</option>
                                                    <option>دری فارسی</option>
                                                    <option>دانمارکی Dansk</option>
                                                    <option>روسی Русский (روسکی)</option>
                                                    <option>رومانیایی Română</option>
                                                    <option>ژاپنی 日本語 (نی هون گُ)</option>
                                                    <option>ساکسونی جنوبی Plattdüütsch</option>
                                                    <option>سانسکریت संस्कृतम्</option>
                                                    <option>سومالی af Soomaali</option>
                                                    <option>سوئدی Svenska</option>
                                                    <option>سواحیلی Kiswahili</option>
                                                    <option>سیسیلی Sicilianu</option>
                                                    <option>سینهالی Sinhalese</option>
                                                    <option>صربی Српски (سرپسکی)</option>
                                                    <option>عبری עברית (ایوْریت)</option>
                                                    <option>عربی العربیة</option>
                                                    <option>فارسی دری (پارسی)</option>
                                                    <option>فرانسوی Français (فِرانسه)</option>
                                                    <option>فریزی غربی Frysk</option>
                                                    <option>فنلاندی Suomi</option>
                                                    <option>قرقیزی</option>
                                                    <option>قزاقی</option>
                                                    <option>کاتالان Català</option>
                                                    <option>کردی سورانی Kurdî Soranî</option>
                                                    <option>کردی کرمانجی Kurdî Kurmancî</option>
                                                    <option>کردی کرمانشاهی Kurdî Kermanshahî</option>
                                                    <option>کرواتی Hrvatski</option>
                                                    <option>کره‌ای 한국어</option>
                                                    <option>گیلکی گيلٚکي</option>
                                                    <option>گِیلیک اسکاتلندی Galego</option>
                                                    <option>گرجی ქართული</option>
                                                    <option>گالیسی Gàidhlig</option>
                                                    <option>لاتین Latina</option>
                                                    <option>لتلندی Latviešu</option>
                                                    <option>لری Luri</option>
                                                    <option>لوکزامبورگی Lëtzebuergesch</option>
                                                    <option>لهستانی Polski</option>
                                                    <option>لیتوانیایی Lietuvių</option>
                                                    <option>لکی Laki</option>
                                                    <option>ماراتی मराठी</option>
                                                    <option>مازندرانی یا طبری (مازرونی یا تبری)</option>
                                                    <option>مالایی Bahasa Melayu</option>
                                                    <option>ماندارین</option>
                                                    <option>مجاری Magyar</option>
                                                    <option>مغولی Монгол (مونگول)</option>
                                                    <option>مین جنوبی Bân-lâm-gú</option>
                                                    <option>لاری Lari</option>
                                                    <option>نپالی</option>
                                                    <option>نروژی Norsk</option>
                                                    <option>نروژی نو Nynorsk (نونورسک)</option>
                                                    <option>والونی Walon</option>
                                                    <option>ولزی Cymraeg</option>
                                                    <option>ویتنامی Tiếng Việt</option>
                                                    <option>هلندی Nederlands</option>
                                                    <option>هندی हिन्दी</option>
                                                    <option>یونانی Ελληνικά (اِلینیکا)</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">خواندن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">نوشتن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body col-md-3">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">مکالمه</label>
                                            <div class="col-md-9">

                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">زبان 2</label>
                                            <div class="col-md-9">


                                                <select class="form-control">

                                                    <option>انتخاب کنید</option>
                                                    <option>انگلیسی English</option>
                                                    <option>ساجده адыгэбзэ (آدیگِبزه)</option>
                                                    <option>آستوری Asturianu</option>
                                                    <option>آسی Ирон (ایرون)</option>
                                                    <option>آفریکانس Afrikaans</option>
                                                    <option>آلبانیایی Shqip</option>
                                                    <option>آلمانی Deutsch (دویچ)</option>
                                                    <option>آمهاری</option>
                                                    <option>اردو اردو</option>
                                                    <option>ارمنی Հայերեն (هایرن)</option>
                                                    <option>ازبکی uzbekcha</option>
                                                    <option>اسپانیایی Español (اسپانیول)</option>
                                                    <option>اسپرانتو Esperanto (اِسپِرانتو)</option>
                                                    <option>استونیایی Eesti</option>
                                                    <option>اسلواکیایی Slovenčina</option>
                                                    <option>اسلوونیایی Slovenščina</option>
                                                    <option>اندونزیایی Bahasa Indonesia</option>
                                                    <option>اوکراینی Українська (اوکرائینسکا)</option>
                                                    <option>اویغوری</option>
                                                    <option>ایتالیایی Italiano</option>
                                                    <option>ایرلندی Gaeilge</option>
                                                    <option>ایسلندی Íslenska</option>
                                                    <option>باسکی Euskara</option>
                                                    <option>بختیاری Bakhteyari</option>
                                                    <option>بلاروسی Беларуская (بلاروسکایا)</option>
                                                    <option>بلغاری Български (بلگارسکی)</option>
                                                    <option>بلوچی Baloochi</option>
                                                    <option>بنگالی</option>
                                                    <option>بوسنیایی Bosanski</option>
                                                    <option>براهویی</option>
                                                    <option>پرتغالی Português</option>
                                                    <option>پشتو پښتو</option>
                                                    <option>تاتاری Tatarça</option>
                                                    <option>تاتی تاتی زوان</option>
                                                    <option>تالشی تالشی زوون</option>
                                                    <option>تاگالوگ</option>
                                                    <option>تایلندی ภาษาไทย</option>
                                                    <option>ترکی آذربایجانی Azərbaycan dili(آذربایجان دیلی)</option>
                                                    <option>ترکی استانبولی Türkçe</option>
                                                    <option>ترکمنی</option>
                                                    <option>ترکی خراسانی</option>
                                                    <option>جاوه‌ای Basa Jawa</option>
                                                    <option>چکی Česká</option>
                                                    <option>چواش Чӑваш (چواش)</option>
                                                    <option>چینی 中文</option>
                                                    <option>دری فارسی</option>
                                                    <option>دانمارکی Dansk</option>
                                                    <option>روسی Русский (روسکی)</option>
                                                    <option>رومانیایی Română</option>
                                                    <option>ژاپنی 日本語 (نی هون گُ)</option>
                                                    <option>ساکسونی جنوبی Plattdüütsch</option>
                                                    <option>سانسکریت संस्कृतम्</option>
                                                    <option>سومالی af Soomaali</option>
                                                    <option>سوئدی Svenska</option>
                                                    <option>سواحیلی Kiswahili</option>
                                                    <option>سیسیلی Sicilianu</option>
                                                    <option>سینهالی Sinhalese</option>
                                                    <option>صربی Српски (سرپسکی)</option>
                                                    <option>عبری עברית (ایوْریت)</option>
                                                    <option>عربی العربیة</option>
                                                    <option>فارسی دری (پارسی)</option>
                                                    <option>فرانسوی Français (فِرانسه)</option>
                                                    <option>فریزی غربی Frysk</option>
                                                    <option>فنلاندی Suomi</option>
                                                    <option>قرقیزی</option>
                                                    <option>قزاقی</option>
                                                    <option>کاتالان Català</option>
                                                    <option>کردی سورانی Kurdî Soranî</option>
                                                    <option>کردی کرمانجی Kurdî Kurmancî</option>
                                                    <option>کردی کرمانشاهی Kurdî Kermanshahî</option>
                                                    <option>کرواتی Hrvatski</option>
                                                    <option>کره‌ای 한국어</option>
                                                    <option>گیلکی گيلٚکي</option>
                                                    <option>گِیلیک اسکاتلندی Galego</option>
                                                    <option>گرجی ქართული</option>
                                                    <option>گالیسی Gàidhlig</option>
                                                    <option>لاتین Latina</option>
                                                    <option>لتلندی Latviešu</option>
                                                    <option>لری Luri</option>
                                                    <option>لوکزامبورگی Lëtzebuergesch</option>
                                                    <option>لهستانی Polski</option>
                                                    <option>لیتوانیایی Lietuvių</option>
                                                    <option>لکی Laki</option>
                                                    <option>ماراتی मराठी</option>
                                                    <option>مازندرانی یا طبری (مازرونی یا تبری)</option>
                                                    <option>مالایی Bahasa Melayu</option>
                                                    <option>ماندارین</option>
                                                    <option>مجاری Magyar</option>
                                                    <option>مغولی Монгол (مونگول)</option>
                                                    <option>مین جنوبی Bân-lâm-gú</option>
                                                    <option>لاری Lari</option>
                                                    <option>نپالی</option>
                                                    <option>نروژی Norsk</option>
                                                    <option>نروژی نو Nynorsk (نونورسک)</option>
                                                    <option>والونی Walon</option>
                                                    <option>ولزی Cymraeg</option>
                                                    <option>ویتنامی Tiếng Việt</option>
                                                    <option>هلندی Nederlands</option>
                                                    <option>هندی हिन्दी</option>
                                                    <option>یونانی Ελληνικά (اِلینیکا)</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">خواندن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">نوشتن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body col-md-3">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">مکالمه</label>
                                            <div class="col-md-9">

                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">زبان 3</label>
                                            <div class="col-md-9">

                                                <select class="form-control">

                                                    <option>انتخاب کنید</option>
                                                    <option>انگلیسی English</option>
                                                    <option>ساجده адыгэбзэ (آدیگِبزه)</option>
                                                    <option>آستوری Asturianu</option>
                                                    <option>آسی Ирон (ایرون)</option>
                                                    <option>آفریکانس Afrikaans</option>
                                                    <option>آلبانیایی Shqip</option>
                                                    <option>آلمانی Deutsch (دویچ)</option>
                                                    <option>آمهاری</option>
                                                    <option>اردو اردو</option>
                                                    <option>ارمنی Հայերեն (هایرن)</option>
                                                    <option>ازبکی uzbekcha</option>
                                                    <option>اسپانیایی Español (اسپانیول)</option>
                                                    <option>اسپرانتو Esperanto (اِسپِرانتو)</option>
                                                    <option>استونیایی Eesti</option>
                                                    <option>اسلواکیایی Slovenčina</option>
                                                    <option>اسلوونیایی Slovenščina</option>
                                                    <option>اندونزیایی Bahasa Indonesia</option>
                                                    <option>اوکراینی Українська (اوکرائینسکا)</option>
                                                    <option>اویغوری</option>
                                                    <option>ایتالیایی Italiano</option>
                                                    <option>ایرلندی Gaeilge</option>
                                                    <option>ایسلندی Íslenska</option>
                                                    <option>باسکی Euskara</option>
                                                    <option>بختیاری Bakhteyari</option>
                                                    <option>بلاروسی Беларуская (بلاروسکایا)</option>
                                                    <option>بلغاری Български (بلگارسکی)</option>
                                                    <option>بلوچی Baloochi</option>
                                                    <option>بنگالی</option>
                                                    <option>بوسنیایی Bosanski</option>
                                                    <option>براهویی</option>
                                                    <option>پرتغالی Português</option>
                                                    <option>پشتو پښتو</option>
                                                    <option>تاتاری Tatarça</option>
                                                    <option>تاتی تاتی زوان</option>
                                                    <option>تالشی تالشی زوون</option>
                                                    <option>تاگالوگ</option>
                                                    <option>تایلندی ภาษาไทย</option>
                                                    <option>ترکی آذربایجانی Azərbaycan dili(آذربایجان دیلی)</option>
                                                    <option>ترکی استانبولی Türkçe</option>
                                                    <option>ترکمنی</option>
                                                    <option>ترکی خراسانی</option>
                                                    <option>جاوه‌ای Basa Jawa</option>
                                                    <option>چکی Česká</option>
                                                    <option>چواش Чӑваш (چواش)</option>
                                                    <option>چینی 中文</option>
                                                    <option>دری فارسی</option>
                                                    <option>دانمارکی Dansk</option>
                                                    <option>روسی Русский (روسکی)</option>
                                                    <option>رومانیایی Română</option>
                                                    <option>ژاپنی 日本語 (نی هون گُ)</option>
                                                    <option>ساکسونی جنوبی Plattdüütsch</option>
                                                    <option>سانسکریت संस्कृतम्</option>
                                                    <option>سومالی af Soomaali</option>
                                                    <option>سوئدی Svenska</option>
                                                    <option>سواحیلی Kiswahili</option>
                                                    <option>سیسیلی Sicilianu</option>
                                                    <option>سینهالی Sinhalese</option>
                                                    <option>صربی Српски (سرپسکی)</option>
                                                    <option>عبری עברית (ایوْریت)</option>
                                                    <option>عربی العربیة</option>
                                                    <option>فارسی دری (پارسی)</option>
                                                    <option>فرانسوی Français (فِرانسه)</option>
                                                    <option>فریزی غربی Frysk</option>
                                                    <option>فنلاندی Suomi</option>
                                                    <option>قرقیزی</option>
                                                    <option>قزاقی</option>
                                                    <option>کاتالان Català</option>
                                                    <option>کردی سورانی Kurdî Soranî</option>
                                                    <option>کردی کرمانجی Kurdî Kurmancî</option>
                                                    <option>کردی کرمانشاهی Kurdî Kermanshahî</option>
                                                    <option>کرواتی Hrvatski</option>
                                                    <option>کره‌ای 한국어</option>
                                                    <option>گیلکی گيلٚکي</option>
                                                    <option>گِیلیک اسکاتلندی Galego</option>
                                                    <option>گرجی ქართული</option>
                                                    <option>گالیسی Gàidhlig</option>
                                                    <option>لاتین Latina</option>
                                                    <option>لتلندی Latviešu</option>
                                                    <option>لری Luri</option>
                                                    <option>لوکزامبورگی Lëtzebuergesch</option>
                                                    <option>لهستانی Polski</option>
                                                    <option>لیتوانیایی Lietuvių</option>
                                                    <option>لکی Laki</option>
                                                    <option>ماراتی मराठी</option>
                                                    <option>مازندرانی یا طبری (مازرونی یا تبری)</option>
                                                    <option>مالایی Bahasa Melayu</option>
                                                    <option>ماندارین</option>
                                                    <option>مجاری Magyar</option>
                                                    <option>مغولی Монгол (مونگول)</option>
                                                    <option>مین جنوبی Bân-lâm-gú</option>
                                                    <option>لاری Lari</option>
                                                    <option>نپالی</option>
                                                    <option>نروژی Norsk</option>
                                                    <option>نروژی نو Nynorsk (نونورسک)</option>
                                                    <option>والونی Walon</option>
                                                    <option>ولزی Cymraeg</option>
                                                    <option>ویتنامی Tiếng Việt</option>
                                                    <option>هلندی Nederlands</option>
                                                    <option>هندی हिन्दी</option>
                                                    <option>یونانی Ελληνικά (اِلینیکا)</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">خواندن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body col-md-3">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">نوشتن</label>
                                            <div class="col-md-9">
                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body col-md-3">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">مکالمه</label>
                                            <div class="col-md-9">

                                                <select class="form-control">

                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <div class="col-md-6">


                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-graduation-cap"></i> اطلاعات تحصیلی و شغلی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">تحصیلات</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>کارشناسی</option>
                                                <option>کارشناسی ارشد</option>
                                                <option>دانشجو</option>
                                                <option>دکترا</option>
                                                <option>سیکل</option>
                                                <option>پرفسر</option>
                                                <option>دیپلم</option>
                                                <option>بدون تحصیلات</option>
                                                <option>دیگر</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">رشته تحصیلی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="رشته تحصیلی خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">وضعیت استخدام</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>کارمند</option>
                                                <option>به دنبال کار</option>
                                                <option>دانشجو/دانش آموز</option>
                                                <option>بازنشسته</option>
                                                <option>خویش فرما</option>
                                                <option>کارآفرین</option>
                                                <option>خانه دار</option>
                                                <option>دیگر</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">مرحله شغلی</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>در حال کسب درجه(انترن،دانشجو،..)</option>
                                                <option>مدیر میانی</option>
                                                <option>سرپرست</option>
                                                <option>مدیر ارشد</option>
                                                <option>با تجربه</option>
                                                <option>سرپرست بخش</option>
                                                <option>کاراموز</option>
                                                <option>کارمند</option>
                                                <option>سایر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">مقیاس شرکت</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>تنها</option>
                                                <option>1-10</option>
                                                <option>11-50</option>
                                                <option>50-200</option>
                                                <option>201-500</option>
                                                <option>501-1000</option>
                                                <option>بیش از 1000</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">درامد ماهیانه</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="درامد ماهیانه خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">عنوان شغلی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="عنوان شغلی خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">توضیح شغلی</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="کوتاه در مورد کاری که انجام میدهید توضیح دهید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-certificate"></i> مدارک و درجات
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->


                </div>
                <div class="col-md-6">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-home"></i> اطلاعات خانه و اطراف
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <form class="form-horizontal" role="form">


                                <div class="form-group">
                                    <label class="col-md-3 control-label">گواهی نامه رانندگی</label>
                                    <div class="col-md-2">
                                        <div class="mt-checkbox-list">
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox">الف 2
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox">الف 3
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-checkbox-list">
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox">ب 1
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox">ب 2
                                                <span></span>
                                            </label>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="mt-checkbox-list">
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox">پ 1
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox">پ 2
                                                <span></span>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-checkbox-list">

                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox">ت 1
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox">ت 2
                                                <span></span>
                                            </label>

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label">خودرو</label>
                                    <div class="col-md-2">
                                        <div class="mt-checkbox-list">
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox"> خودرو شخصی دارم
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline ">
                                                <input type="checkbox">رانندگی میکنم
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label">حیوان خانگی</label>
                                    <div class="col-md-9">
                                        <div class="mt-radio-inline">
                                            <label class="mt-radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios25"
                                                       value="option1">
                                                ندارم
                                                <span></span>
                                            </label>
                                            <label class="mt-radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios26"
                                                       value="option2">
                                                یکی
                                                <span></span>
                                            </label>
                                            <label class="mt-radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios27"
                                                       value="option2">
                                                دوتا
                                                <span></span>
                                            </label>
                                            <label class="mt-radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios28"
                                                       value="option2">
                                                بیشتر
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-bicycle"></i> اوقات فراغت
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <form class="form-horizontal" role="form">
                                <div class="form-body">


                                    <div class="form-group">
                                        <label class="col-md-3 control-label">علاقه مندی</label>
                                        <div class="col-md-9">

                                            <div class="input-group select2-bootstrap-prepend">
                                                <select id="select1-button"
                                                        class="form-control select2-multiple" multiple>

                                                    <option> هنر</option>
                                                    <option> خواندن</option>
                                                    <option> بازی های مرورگر</option>
                                                    <option> ماشین ها</option>
                                                    <option> خیریه / کار داوطلب</option>
                                                    <option> سینما</option>
                                                    <option> جمع آوری</option>
                                                    <option> آشپزی</option>
                                                    <option> رقص</option>
                                                    <option> الکترونیک</option>
                                                    <option> روش</option>
                                                    <option> دارایی، مالیه، سرمایه گذاری</option>
                                                    <option> تناسب اندام</option>
                                                    <option> باغبانی</option>
                                                    <option> هنر دستی</option>
                                                    <option> اینترنت</option>
                                                    <option> زبان ها</option>
                                                    <option> مدلسازی</option>
                                                    <option> موسیقی</option>
                                                    <option> نقاشی / طراحی</option>
                                                    <option> عکاسی</option>
                                                    <option> ابزارهای بازی</option>
                                                    <option> برنامه نويسي</option>
                                                    <option> انجمن های مذهبی</option>
                                                    <option> خودمراقبتی</option>
                                                    <option> خريد كردن</option>
                                                    <option> شبکه های اجتماعی</option>
                                                    <option> ورزش ها</option>
                                                    <option> بازرگانی سهام</option>
                                                    <option> مسافرت رفتن</option>
                                                    <option> تلویزیون</option>
                                                    <option> بازی های ویدئویی</option>
                                                    <option> نوشتن (شعر، داستان کوتاه و غیره)</option>
                                                    <option> دیگر</option>
                                                    <option> هیچ یک</option>
                                                    <option> شکار</option>
                                                    <option> موتورسیکلت</option>
                                                    <option> خانه بهبود / DIY</option>
                                                    <option> بازی های تخته ای</option>
                                                    <option> شطرنج</option>
                                                    <option> قمار</option>
                                                    <option> شرط بندی</option>
                                                    <option> وبلاگ نویسی</option>
                                                    <option> فیلم سازی</option>
                                                    <option> درام / بازیگری</option>
                                                    <option> فوتبال</option>
                                                    <option> قلاب دوزی / گلدوزی / بافندگی</option>
                                                    <option> شعبده بازي</option>
                                                    <option> اوریگامی</option>
                                                    <option> معماها / امتحانات</option>
                                                    <option> صید ماهی</option>
                                                    <option> جغرافیایی</option>
                                                    <option> بازی های رایانه ای</option>
                                                    <option> پختن</option>
                                                    <option> زمینشناسی آماتوری</option>
                                                    <option> رادیو آماتوری</option>
                                                    <option> انیمیشن / مانگا</option>
                                                    <option> طراحی برنامه</option>
                                                    <option> بازی های آنلاین</option>
                                                    <option> ستاره شناسی</option>
                                                    <option> تخته نرد</option>
                                                    <option> کباب کردن</option>
                                                    <option> ضرب و شتم بوکس</option>
                                                    <option> زیبایی (آرایش، مو، ناخن)</option>
                                                    <option> زنبورداری</option>
                                                    <option> تماشای پرندگان</option>
                                                    <option> پل (بازی کارت)</option>
                                                    <option> خوشنویسی</option>
                                                    <option> چادر زدن</option>
                                                    <option> بازی های کارتی</option>
                                                    <option> سرامیک / سفال</option>
                                                    <option> ساخت کوکتل</option>
                                                    <option> پختن قهوه</option>
                                                    <option> کتاب های کمیک</option>
                                                    <option> خانه برنج (آبجو، ماد و غیره)</option>
                                                    <option> مناظره</option>
                                                    <option> دی جی</option>
                                                    <option> ورزشهای فانتزی</option>
                                                    <option> گل آرایی</option>
                                                    <option> طراحی گرافیک</option>
                                                    <option> طراحی داخلی / خانه</option>
                                                    <option> ساخت جواهرات</option>
                                                    <option> مراقبه</option>
                                                    <option> موسیقی / ساختار</option>
                                                    <option> مراقبت از حیوانات خانگی (نظافت، پیاده روی)</option>
                                                    <option> پوکر</option>
                                                    <option> اسباب بازی</option>
                                                    <option> نقش بازی تاریخی</option>
                                                    <option> رزرو ضایعات</option>
                                                    <option> مجله گلوله</option>
                                                    <option> خیاطی / ساخت لباس</option>
                                                    <option> آواز / کارائوکه</option>
                                                    <option> ساخت صابون / شمع</option>
                                                    <option> آهنگسازی</option>
                                                    <option> ایستادن کمدی</option>
                                                    <option> عملکرد خیابانی</option>
                                                    <option> تئاتر / موزیکال / اپرا</option>
                                                    <option> اکتشافات شهری</option>
                                                    <option> چوب یا فلز کار / مجسمه سازی</option>
                                                    <option> ورزش ها</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ورزش</label>
                                        <div class="col-md-9">

                                            <div class="input-group select2-bootstrap-prepend">
                                                <select id="select2-button" class="form-control select2-multiple"
                                                        multiple>

                                                    <option> بدمینتون</option>
                                                    <option> بسکتبال</option>
                                                    <option> سنگ نوردی</option>
                                                    <option> دوچرخه سواری / دوچرخه سواری</option>
                                                    <option> غواصی</option>
                                                    <option> تناسب اندام</option>
                                                    <option> گلف</option>
                                                    <option> هندبال</option>
                                                    <option> هاکی روی چمن</option>
                                                    <option> اسب سواری</option>
                                                    <option> اسکیت ریلی</option>
                                                    <option> هنرهای رزمی</option>
                                                    <option> قایقرانی</option>
                                                    <option> رانندگی</option>
                                                    <option> کشتیرانی</option>
                                                    <option> اسکیت بورد</option>
                                                    <option> اسکیپ</option>
                                                    <option> اسنوبرد</option>
                                                    <option> فوتبال</option>
                                                    <option> موج سواری</option>
                                                    <option> شنا کردن</option>
                                                    <option> تنیس روی میز</option>
                                                    <option> تنیس</option>
                                                    <option> والیبال</option>
                                                    <option> موتورسواری</option>
                                                    <option> اسکی روی یخ</option>
                                                    <option> هاکی روی یخ</option>
                                                    <option> تیراندازی کردن</option>
                                                    <option> یوگا</option>
                                                    <option> پیاده روی</option>
                                                    <option> فوتبال آمریکایی</option>
                                                    <option> راگبی</option>
                                                    <option> هواپیما</option>
                                                    <option> موج سواری</option>
                                                    <option> ورزش زیر آب</option>
                                                    <option> ورزشهای آبی</option>
                                                    <option> ورزش های زمستانی</option>
                                                    <option> ایروبیک</option>
                                                    <option> تیر اندازی</option>
                                                    <option> تیراندازی با کمان</option>
                                                    <option> باله / جاز / شیر رقص</option>
                                                    <option> رقص سالن رقص و رقص لاتین</option>
                                                    <option> پرش</option>
                                                    <option> بیسبال</option>
                                                    <option> اسنوکر / بیلیارد / استخر</option>
                                                    <option> بدنسازی</option>
                                                    <option> بولینگ</option>
                                                    <option> مشت زنی</option>
                                                    <option> برک دنس</option>
                                                    <option> رزمی</option>
                                                    <option> کشور / میدان / چرخش رقص</option>
                                                    <option> کریکت</option>
                                                    <option> کرلینگ</option>
                                                    <option> رقص</option>
                                                    <option> دارت</option>
                                                    <option> شمشیربازی</option>
                                                    <option> میدان ورزشی</option>
                                                    <option> پرچم فوتبال</option>
                                                    <option> فوتبال دستی</option>
                                                    <option> بدنسازی</option>
                                                    <option> ژیمناستیک</option>
                                                    <option> هلیکوپتر</option>
                                                    <option> هیپ هاپ / رقص معاصر</option>
                                                    <option> اسکی روی یخ / شکل اسکیپ</option>
                                                    <option> پیاده روی</option>
                                                    <option> مسابقه قایق اژدها</option>
                                                    <option> کایت گشت و گذار</option>
                                                    <option> کنگفو</option>
                                                    <option> لیز تگ</option>
                                                    <option> دوچرخه سواری در کوهستان</option>
                                                    <option> کوهنورد</option>
                                                    <option> موی تای تایلندی</option>
                                                    <option> پینت بال</option>
                                                    <option> پارکور</option>
                                                    <option> پیلاتس</option>
                                                    <option> چوگان</option>
                                                    <option> پرواز</option>
                                                    <option> رقص</option>
                                                    <option> استوبرد</option>
                                                    <option> غواصی</option>
                                                    <option> بندبازی</option>
                                                    <option> اسکواش / راکتبال</option>
                                                    <option> واکبوردینگ / وکسرفینگ</option>
                                                    <option> وزنه برداری</option>
                                                    <option> موج سواری</option>
                                                    <option> کشتی گیری</option>
                                                    <option> زومبا</option>
                                                    <option> دیگر</option>
                                                    <option> هیچ یک</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->


                </div>

                <div class="col-md-12">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-tv"></i> رسانه
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <form class="form-horizontal" role="form">

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">شبکه های اجتماعی</label>
                                        <div class="col-md-6">

                                            <div class="input-group select2-bootstrap-prepend">
                                                <select id="select2-buttons" class="form-control select2-multiple"
                                                        multiple>

                                                    <option> Instagram</option>
                                                    <option> Telegram</option>
                                                    <option> Twitter</option>
                                                    <option> WhatsApp</option>
                                                    <option> Facebook</option>
                                                    <option> Flickr</option>
                                                    <option> slack</option>
                                                    <option> YouTube</option>
                                                    <option> Xing</option>
                                                    <option> StudiVZ</option>
                                                    <option> LinkedIn</option>
                                                    <option> Pinterest</option>
                                                    <option> VK.com</option>
                                                    <option> Tumblr</option>
                                                    <option> Hi5</option>
                                                    <option> Github</option>
                                                    <option> MySpace</option>
                                                    <option> Orkut</option>
                                                    <option> Reddit</option>
                                                    <option> Ello</option>
                                                    <option> Plag</option>
                                                    <option> WeChat</option>
                                                    <option> Google+</option>
                                                </select>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">چه مقدار از زمان خود را در روز به شبکه های
                                            اجتماعی اختصاص می‌دهید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>0 تا 1 ساعت</option>
                                                <option>1 تا 3 ساعت</option>
                                                <option>3 تا 5 ساعت</option>
                                                <option>5 تا 8 ساعت</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">چه مقدار از زمان خود را در روز به تماشای
                                            تلویزیون اختصاص می‌دهید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>0 تا 1 ساعت</option>
                                                <option>1 تا 3 ساعت</option>
                                                <option>3 تا 5 ساعت</option>
                                                <option>5 تا 8 ساعت</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">چه مقدار از زمان خود را در روز به تلفن
                                            همراه
                                            اختصاص می‌دهید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>0 تا 1 ساعت</option>
                                                <option>1 تا 3 ساعت</option>
                                                <option>3 تا 5 ساعت</option>
                                                <option>5 تا 8 ساعت</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">چه مقدار از زمان خود را در روز به کامپیوتر
                                            اختصاص می‌دهید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>0 تا 1 ساعت</option>
                                                <option>1 تا 3 ساعت</option>
                                                <option>3 تا 5 ساعت</option>
                                                <option>5 تا 8 ساعت</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">چه مقدار از زمان خود را در روز به سایت های
                                            اینترنتی اختصاص می‌دهید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>0 تا 1 ساعت</option>
                                                <option>1 تا 3 ساعت</option>
                                                <option>3 تا 5 ساعت</option>
                                                <option>5 تا 8 ساعت</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">برای اپلیکیشن های موبایل چقدر هزینه
                                            می‌کنید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>1 تا 10 هزار تومان در سال</option>
                                                <option>10 تا 100 هزار تومان در سال</option>
                                                <option>100 تا 500 هزار تومان در سال</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">به میانگین ماهیانه چند اپلیکیشن جدید نصب
                                            می‌کنید</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>هیچ</option>
                                                <option>1 یا 2 اپلیکیشن در ماه</option>
                                                <option>3 تا 5 اپلیکیشن در ماه</option>
                                                <option>6 تا 10 اپلیکیشن در ماه</option>
                                                <option>بیشتر</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="col-md-6 control-label">هدف شما از پیگیری شبکه های اجتماعی
                                            چیست</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                   placeholder="آشنایی با رویداد های جدید ...">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
                <div class="col-md-6">


                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box grey-salt ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-credit-card"></i> اطلاعات بانکی
                            </div>
                            <div class="tools">
                                <a href="" class="expand"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: none;">


                            <form class="form-horizontal" role="form">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">شماره حساب</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="شماره حساب خود را وارد کنید">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">شماره شبا</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="شماره شبا حساب خود را وارد کنید">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">نام بانک</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   placeholder="نام بانک حساب خود را وارد کنید">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green pull-right">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>