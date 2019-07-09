<?php

namespace customer\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */

class PanelAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '../theme/assets/global/css/IRAN-SANS-Family-Typeface/IRAN Sans (Webfonts)/style.css',
        '../theme/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        '../theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
        '../theme/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
        '../theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
        '../theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
        '../theme/assets/global/css/components-md-rtl.min.css',
        '../theme/assets/global/css/plugins-md-rtl.min.css',
        '../theme/assets/pages/css/profile-rtl.min.css',
        '../theme/assets/global/plugins/select2/css/select2.min.css',
        '../theme/assets/global/plugins/select2/css/select2-bootstrap.min.css',
        '../theme/assets/layouts/layout/css/layout-rtl.min.css',
        '../theme/assets/layouts/layout/css/themes/light-rtl.min.css',
        '../theme/assets/layouts/layout/css/custom-rtl.min.css',
    ];
    public $js = [
        "../theme/assets/global/plugins/respond.min.js",
        "../theme/assets/global/plugins/excanvas.min.js",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js",
//        "../theme/assets/global/plugins/jquery.min.js",
//        "../theme/assets/global/plugins/bootstrap/js/bootstrap.min.js",
        "../theme/assets/global/plugins/js.cookie.min.js",
        "../theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js",
        "../theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js",
        "../theme/assets/global/plugins/jquery.blockui.min.js",
        "../theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
        "../theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js",
        "../theme/assets/global/plugins/jquery.sparkline.min.js",
        "../theme/assets/global/plugins/select2/js/select2.full.min.js",
        "../theme/assets/global/scripts/app.min.js",
        "http://www.google.com/jsapi",
        "../theme/assets/pages/scripts/charts-google.js",
        "../theme/assets/pages/scripts/components-select2.js",
        "../theme/assets/pages/scripts/profile.min.js",
        "../theme/assets/layouts/layout/scripts/layout.min.js",
        "../theme/assets/layouts/layout/scripts/demo.min.js",
        "../theme/assets/layouts/global/scripts/quick-sidebar.min.js",


//        "../tester/js/form-builder.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
