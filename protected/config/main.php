<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'language'=>'zh_cn',
	'preload'=>array('log','bootstrap'),
	'name'=>'',
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
	'modules'=>array(
		'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'rootroot',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters'=>false,
		'generatorPaths'=>array(
				'bootstrap.gii',
			),
		),
	),
	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=youtubedb',
			'emulatePrepare' => true,
			'username' => 'hive',
			'password' => '123456',
			'charset' => 'utf8',
		),

		'bootstrap'=>array(
			'class'=>'bootstrap.components.Bootstrap',
		),
	),
);

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'数据可视化网',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'rootroot',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>false,
			//'ipFilters'=>array('127.0.0.1','192.168.1.170','192.168.2.111'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/schema.mysql.sql',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=192.168.1.170;dbname=youtubedb',
			'emulatePrepare' => true,
			'username' => 'hive',
			'password' => '123456',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'liuzhipeng197@163.com',
	),
);
