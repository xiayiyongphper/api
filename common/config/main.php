<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' =>'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager'=>[
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'=>[
                '<controller:[\w+(-)?]+>/<action:[\w+(-)?]+>'=>'<controller>/<action>',
            ],
        ],
    ],
];
