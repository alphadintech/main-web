<?php
use yii\helpers\Html;
?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3>تست محدود در <span>آلفادین</span> چیست ؟ </h3>

                    </div>
                    <h7> در دنیای دیجیتال هیچ جایی برای خطا وجود ندارد. </h7>
                </br>
                    <h7> کاربران از محصول دیگری که به سهولت در دسترس است و ایراد کمتری دارد استفاده خواهد کرد. </h7>
                </br>
                    <h7> اگر به کارایی بخشی از محصول خود اطمینان ندارید فقط آن بخش را تست کنید و هزینه خود را مدیریت کنید. </h7>
                </div>
                <div class="col-md-4 col-sm-4 text-right">

                    <div class="card card-default">

                        <div class="card-block">
                            <a href="index-landing-4.html">
                                <h9 class="font-lato fs-18">سفارش آزمون محدود</h9>
                            </a>

                        </div>


                        <?=
                        $this->render('_card_footer')
                        ?>


                    </div>

                </div>
                <div class="col-md-12" style="text-align: justify;">
                    <h4>چالش: تست کردن باشگاه مشتریان </h4>
                    <h7>باشگاه مشتریانی که به تازگی به پروژه اضافه کرده اید ممکن است دارای ایراداتی باشد و نیاز است که به جای تست کردن کامل برنامه فقط ین بخش مورد تمرکز آزمونگران باشد.</h7>
                    <h6>آلفادین در کنار شماست</h6>
                </div>


            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>