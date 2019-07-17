<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-global',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
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
                'login'=>'auth/login',
                'logout'=>'auth/logout',
                'signup-as-tester'=>'auth/signup-as-tester',
                'signup-as-supervisor'=>'auth/signup-as-supervisor',
                'exploratory'=>'site/exploratory',
                'comparison'=>'site/comparison',
                'competitor'=>'site/competitor',
                'regression'=>'site/regression',
                'usability'=>'site/usability',
                'survey'=>'site/survey',
                'testcase'=>'site/testcase',
                'prototype'=>'site/prototype',
                'cardsorting'=>'site/cardsorting',
                'loadtest'=>'site/loadtest',
                'structured'=>'site/structured',
                'testrequest'=>'site/testrequest',
//                '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],

        ],
        'urlManagerTester' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'yii\web\UrlManager',
            'baseUrl' =>  '../public/tester',
        ],
        'urlManagerSupervisor' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'yii\web\UrlManager',
            'baseUrl' =>  '../public/supervisor',
        ],

    ],
    'params' => $params,
];
