<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'sitetheme/fonts/IRAN-SANS/Typeface/IRAN_Sans_Webfonts/style.css',
        'sitetheme/plugins/bootstrap/css/bootstrap.min.css',
        'sitetheme/css/essentials.css',
        'sitetheme/css/layout.css',
        'sitetheme/css/header-1.css',
        'sitetheme/css/color_scheme/green.css',
        'sitetheme/plugins/bootstrap/RTL/bootstrap-rtl-merged.min.css',
        ['sitetheme/css/layout-RTL.css','id' => "rtl_ltr"],
//        ['https://use.fontawesome.com/releases/v5.8.1/css/all.css','integrity'=>"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf",'crossorigin'=>'anonymous']


    ];
    public $js = [
//        'sitetheme/plugins/jquery/jquery-3.3.1.min.js',
        'sitetheme/js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
