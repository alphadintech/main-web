<?php
/* @var $this yii\web\View */
?>
<h1> آزمونگران </h1>
<hr>




    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">نمودار تراکم جنسیت کاربران</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>در این آزمون از 14 آزمونگر آقا و 11 آزمونگر خانم کمک گرفته شده</h4>
                    <div id="pie_chart_8" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase">نمودار سن آزمونگران</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>برای این آزمون محدودیت سنی اعمال نشده است</h4>
                    <div id="donut" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red bold uppercase">ورژن اندروید مورد نیاز</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>کمینه اندروید مورد نیاز api level 18 تنها فیلتر اعمال شده میباشد</h4>
                    <div id="interactive" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PIE CHART PORTLET-->


<?php
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.resize.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.categories.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.pie.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.stack.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.crosshair.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/global/plugins/flot/jquery.flot.axislabels.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'http://localhost:90/main-web/public/theme/assets/pages/scripts/charts-flotcharts.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

