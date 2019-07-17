<?php
use yii\helpers\Html;
?>

    <section>
        <div class="container">

            <div class="row m-0">

                <div class="col-md-8 col-sm-8 text-right">

                    <!-- Subtitle -->
                    <div class="heading-title heading-border">
                        <h3>تست مسیر مشخص در <span>آلفادین</span> چیست ؟ </h3>

                    </div>
                    <h7> اگر نرم افزار شما پیچیده است و برای کار نیازمند دانش خاصی است نگران نباشید  </h7>
                    </br>
                    <h7>ما با همکاری شما مواردی که باید انجام شود را تعریف میکنیم تا آزمونگران تست را مطابق با استاندارد های شما پیش ببرند.  </h7>

                </div>
                <div class="col-md-4 col-sm-4 text-right">

                    <div class="card card-default">

                        <div class="card-block">
                            <a href="testrequest">
                                <h9 class="font-lato fs-18">سفارش تست مسیر مشخص</h9>
                            </a>

                        </div>

                        <?=
                        $this->render('_card_footer')
                        ?>


                    </div>

                </div>
                <div class="col-md-12" style="text-align: justify;">
                    <h4>چالش: تست یک نرم افزار پیچیده بانکی </h4>
                    <h7>قالبا آزمونگران دانش استفاده از نرم افزار های پیچیده بانکی را ندارد پس با کمک شما برای آنها تعریف خواهیم کرد که از چه رفتاری انتظار چه نتیجه ای را باید داشته باشند .</h7>
                    <h6>آلفادین برای همه چالش ها راهکار دارد</h6>
                </div>


            </div>

        </div>
    </section>

<?=
$this->render('_services_slider')
?>