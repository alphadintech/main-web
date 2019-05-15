<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-tester',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'tester\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-global',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-user', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the tester
            'name' => $params['session_name'],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'dashboard'=>'site/index'
            ],
        ],
        'urlManagerFrontend' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'yii\web\UrlManager',
//            'hostInfo' =>'http://localhost/yii2/test/public/tester',
            'baseUrl' =>  '../',

        ],

    ],
    'params' => $params,
];
