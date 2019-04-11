<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class RegisterAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'panel/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'panel/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'panel/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
        'panel/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
        'panel/assets/global/plugins/select2/css/select2.min.css',
        'panel/assets/global/plugins/select2/css/select2-bootstrap.min.css',
        'panel/assets/global/css/components-md-rtl.min.css',
        'panel/assets/global/css/plugins-md-rtl.min.css',
        'panel/assets/pages/css/login-5-rtl.min.css',
//        'css/site.css',
    ];
    public $js = [
        'panel/assets/global/plugins/respond.min.js',
        'panel/assets/global/plugins/excanvas.min.js',
        'panel/assets/global/plugins/jquery.min.js',
        'panel/assets/global/plugins/js.cookie.min.js',
        'panel/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'panel/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'panel/assets/global/plugins/jquery.blockui.min.js',
        'panel/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'panel/assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
        'panel/assets/global/plugins/jquery-validation/js/additional-methods.min.js',
        'panel/assets/global/plugins/select2/js/select2.full.min.js',
        'panel/assets/global/plugins/backstretch/jquery.backstretch.min.js',
        'panel/assets/pages/scripts/login-5.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
