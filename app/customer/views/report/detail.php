<?php
/* @var $this yii\web\View */
?>
<?php

$scrip = <<<JS
google.setOnLoadCallback(drawChart);

// GOOGLE COLUMN CHART 1
function drawChart() {

    // PIE CHART
    var gender = google.visualization.arrayToDataTable([
        ['جنسیت', 'تعداد مجموع در تست'],
        ['مرد', 51],
        ['زن', 37],
        ['نامشخص', 2]
    ]);

    var platform = google.visualization.arrayToDataTable([
        ['پلتفرم', 'دستگاه در مجموه آزمون'],
        ['اندروید', 45],
        ['اپل', 37],
        ['مرورگر کامپیوتر', 14],
        ['مرورگر موبایل', 37]
    ]);

    var bugs = google.visualization.arrayToDataTable([
        ['ایرادات', 'تعداد مجموع در تست'],
        ['پر اهمیت', 27],
        ['معمولی', 82],
        ['کم اهمیت', 24]
    ]);

    var options = {};
    
    chart.draw(bugs, options);

    var chart = new google.visualization.PieChart(document.getElementById('gchart_pie_4'));
    chart.draw(bugs, options);

    var chart = new google.visualization.PieChart(document.getElementById('gchart_pie_5'));
    chart.draw(bugs, options);


}


JS;
// $this->registerJs($scrip,);

switch ($id) {
    case "450":
        echo("<h1> جزئیات تست عملکرد کلی اندروید </h1>");
        break;
    case "451":
        echo("<h1> جزئیات تست عملکرد کلی آی او اس </h1>");
        break;
    case "452":
        echo("<h1> جزئیات تست عملکرد کلی وبسایت </h1>");
        break;
}
?>
<hr>

<div class="row ">
    <div class="col-md-12">
        <div class="portlet-body">
            <div class="portlet light portlet-fit bordered">
                <div class="mt-element-step">
                    <div class="row step-background-thin">
                        <a href="<?= Yii::$app->urlManager->createUrl(['report/comments', 'id' => $id]) ?>">
                            <div class="col-md-4 bg-grey-steel mt-step-col">
                                <div class="mt-step-number">1</div>
                                <div class="mt-step-title uppercase font-grey-cascade">Comments</div>
                                <div class="mt-step-content font-grey-cascade">Purchasing the item</div>
                            </div>
                        </a>
                        <a href="<?= Yii::$app->urlManager->createUrl(['report/list', 'id' => $id]) ?>">

                            <div class="col-md-4 bg-grey-steel mt-step-col active">
                                <div class="mt-step-number">2</div>
                                <div class="mt-step-title uppercase font-grey-cascade">Reports List</div>
                                <div class="mt-step-content font-grey-cascade">Complete your payment</div>
                            </div>
                        </a>

                        <a href="<?= Yii::$app->urlManager->createUrl(['report/testers', 'id' => $id]) ?>">

                            <div class="col-md-4 bg-grey-steel mt-step-col error">
                                <div class="mt-step-number">3</div>
                                <div class="mt-step-title uppercase font-grey-cascade">Testers</div>
                                <div class="mt-step-content font-grey-cascade">Receive item integration</div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center>

            <a href="<?= Yii::$app->urlManager->createUrl(['report/analyze', 'id' => $id]) ?>">
                <button class="btn btn-outline yellow-mint  uppercase" data-toggle="confirmation"
                        data-placement="bottom" data-original-title="" title="">Confirmation on bottom
                </button>
            </a>
        </center>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-6">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">نمودار جنسیت آزمونگران</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="gchart_pie_4"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">پلتفرم</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="gchart_pie_5"></div>
            </div>
        </div>
    </div>
</div>
