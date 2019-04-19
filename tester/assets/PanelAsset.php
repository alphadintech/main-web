<?php

namespace app\assets;

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
        'panel/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'panel/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'panel/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
        'panel/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
        'panel/assets/global/css/components-md-rtl.min.css',
        'panel/assets/global/css/plugins-md-rtl.min.css',
        'panel/assets/layouts/layout/css/layout-rtl.min.css',
        'panel/assets/layouts/layout/css/themes/darkblue-rtl.min.css',
        'panel/assets/layouts/layout/css/custom-rtl.min.css',
    ];
    public $js = [
        "panel/assets/global/plugins/respond.min.js",
        "panel/assets/global/plugins/excanvas.min.js",
        "panel/assets/global/plugins/jquery.min.js",
        "panel/assets/global/plugins/bootstrap/js/bootstrap.min.js",
        "panel/assets/global/plugins/js.cookie.min.js",
        "panel/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js",
        "panel/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js",
        "panel/assets/global/plugins/jquery.blockui.min.js",
        "panel/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
        "panel/assets/global/scripts/app.min.js",
        "panel/assets//layouts/layout/scripts/layout.min.js",
        "panel/assets//layouts/layout/scripts/demo.min.js",
        "panel/assets//layouts/global/scripts/quick-sidebar.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
