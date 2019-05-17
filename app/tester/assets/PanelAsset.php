<?php

namespace tester\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */

class PanelAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        '../theme/assets/global/css/IRAN-SANS-Family-Typeface/IRAN Sans (Webfonts)/style.css',
        '../theme/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        '../theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        '../theme/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
        '../theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
        '../theme/assets/global/css/components-md-rtl.min.css',
        '../theme/assets/global/css/plugins-md-rtl.min.css',
        '../theme/assets/layouts/layout/css/layout-rtl.min.css',
        '../theme/assets/layouts/layout/css/themes/darkblue-rtl.min.css',
        '../theme/assets/layouts/layout/css/custom-rtl.min.css',
    ];
    public $js = [
        "../theme/assets/global/plugins/respond.min.js",
        "../theme/assets/global/plugins/excanvas.min.js",
        "../theme/assets/global/plugins/jquery.min.js",
        "../theme/assets/global/plugins/bootstrap/js/bootstrap.min.js",
        "../theme/assets/global/plugins/js.cookie.min.js",
        "../theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js",
        "../theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js",
        "../theme/assets/global/plugins/jquery.blockui.min.js",
        "../theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
        "../theme/assets/global/scripts/app.min.js",
        "../theme/assets//layouts/layout/scripts/layout.min.js",
        "../theme/assets//layouts/layout/scripts/demo.min.js",
        "../theme/assets//layouts/global/scripts/quick-sidebar.min.js",

        "../tester/js/jquery-ui.min.js",
//        "../tester/js/form-builder.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
