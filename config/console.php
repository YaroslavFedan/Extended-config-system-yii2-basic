<?php
Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$config = [
    'id' => 'app-console',
    //'basePath' => dirname(__DIR__),
    'bootstrap' => ['gii'],
    'controllerNamespace' => 'app\commands',
    'modules' =>[
        'gii' => 'yii\gii\Module',
    ]

];


return $config;
