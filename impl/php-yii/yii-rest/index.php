<?php

$yii=dirname(__FILE__).'/../framework/yii.php';
$config = array(
    'basePath' => dirname(__FILE__).'/protected',
    'name' => 'Yii Restful Test',
    'components' => array(
	'urlManager' => array(
	    'urlFormat' => 'path',
	    'rules' => array(
		'power/<base:\d+>/<exp:\d+>' => 'power/main',
	    ),
	),
	'log' => false,
    ),
);

require_once($yii);
Yii::createWebApplication($config)->run();
