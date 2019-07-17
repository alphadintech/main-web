<?php

use yii\helpers\Html;

?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3> بررسی مجدد رفع ایراد در <span>آلفادین</span> چیست ؟ </h3>

                    </div>
                    <h7> توسعه نرم افزار کنونی همیشه با چالش های زیادی روبرو بوده که یکی از این چالش ها ایجاد خطا در بخش
                        های وابسته است
                    </h7>
                    <h7>رفع یک خطا ممکن است خطای دیگری در همان بخش از پروژه یا بخش های دیگر ایجاد کند</h7>

                </div>
                <div class="col-md-4 col-sm-4 text-right">

                    <div class="card card-default">
                        <div class="card-block">
                            <a href="testrequest">
                                <h9 class="font-lato fs-18">سفارش بررسی مجدد رفع ایراد</h9>
                            </a>
                        </div>
                        <?=
                        $this->render('_card_footer')
                        ?>


                    </div>

                </div>
                <div class="col-md-12" style="text-align: justify;">
                    <h4>چالش: آیا ایراد گزارش شده بعد از تصحیح به طور کامل رفع گردید ؟ </h4>
                    <h7>نمایش عدد کیف پول کاربر در یک اپلیکیشن به صورت null بوده ،
                        </br>پس از گزارش این موضوع ، توسعه دهنده مقدار اولیه آن را 0 قرار داده است.
                        </br>این عمل در صفحه خرید محصول باعث شده تا امکان پرداخت از کیف پول همیشه فعال باشد زیرا null بودن آن چک شده است.</h7>
                    <h6>آزمونگران آلفادین پس از تصحیح یک مورد از ایرادات گزارش شده ابتدا رفع ایراد را بررسی می کنند و سپس دیگر بخش هایی که ممکن است دچار مشکل شوند.</h6>
                </div>


            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>