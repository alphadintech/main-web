<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require '../app/vendor/autoload.php';
require '../app/vendor/yiisoft/yii2/Yii.php';
require '../app/common/config/bootstrap.php';
require '../app/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require '../app/common/config/main.php',
    require '../app/common/config/main-local.php',
    require '../app/frontend/config/main.php',
    require '../app/frontend/config/main-local.php'
);


(new yii\web\Application($config))->run();
