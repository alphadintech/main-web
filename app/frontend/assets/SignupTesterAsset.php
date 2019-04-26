<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SignupTesterAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'theme/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'theme/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
        'theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
        'theme/assets/global/plugins/select2/css/select2.min.css',
        'theme/assets/global/plugins/select2/css/select2-bootstrap.min.css',
        'theme/assets/global/css/components-md-rtl.min.css',
        'theme/assets/global/css/plugins-md-rtl.min.css',
        'theme/assets/pages/css/login-5-rtl.min.css',
//        'css/site.css',
    ];
    public $js = [
        'theme/assets/global/plugins/respond.min.js',
        'theme/assets/global/plugins/excanvas.min.js',
//        'theme/assets/global/plugins/jquery.min.js',
        'theme/assets/global/plugins/js.cookie.min.js',
        'theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'theme/assets/global/plugins/jquery.blockui.min.js',
        'theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
        'theme/assets/global/plugins/jquery-validation/js/additional-methods.min.js',
        'theme/assets/global/plugins/select2/js/select2.full.min.js',
        'theme/assets/global/plugins/backstretch/jquery.backstretch.min.js',
        'theme/assets/pages/scripts/login-5.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
