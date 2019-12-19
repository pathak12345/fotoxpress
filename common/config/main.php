<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManagerBackEnd' => [
	        'class' => 'yii\web\urlManager',
	        'enablePrettyUrl' => false,
	        'showScriptName' => false,
	        'baseUrl' => '/backend/web',
	    ],

	    'urlManagerFrontEnd' => [
	        'class' => 'yii\web\urlManager',
	        'enablePrettyUrl' => false,
	        'showScriptName' => false,
	        'baseUrl' => '/frontend/web',
	    ],
    ],
];
