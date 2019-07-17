<?php

use yii\helpers\Html;

?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3>آزمون بار در <span>آلفادین</span> چیست ؟ </h3>

                    </div>
                    <h7>سطح بالایی از عملکرد ضروری است. سیستم های ناکارآمد می توانند پیامدهای قابل توجهی برای هر شرکت ایجاد کنند. تست بار و عملکرد ضروری است تا اطمینان حاصل شود که نرم افزار شما قادر به مدیریت تعداد زیادی از کاربران است.</h7>
                </div>
                <div class="col-md-4 col-sm-4 text-right">

                    <div class="card card-default">
                        <div class="card-block">
                            <a href="testrequest">
                                <h9 class="font-lato fs-18">سفارش آزمون بار</h9>
                            </a>

                        </div>


                        <?=
                        $this->render('_card_footer')
                        ?>


                    </div>

                </div>
                <div class="col-md-12" style="text-align: justify;">
                    <h4>چالش: پروژه توان پاسخگویی به چه تعداد کاربر همزمان را دارد</h4>
                    <h7>راه های مختلفی برای بررسی حداکثر توان پاسخگویی وجود دارد اما در هنگام بار حد اکثر کاربر استفاده کننده با چه شرایطی روبرو خواهد شد و چه تجربه ای خواهد داشت؟</h7>
                    <h6>برای پاسخ به این سوالات آلفادین به شما کمک خواهد کرد</h6>
                </div>


            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>