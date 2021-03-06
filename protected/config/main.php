<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
    Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
    return array(
            'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
            'name' => 'local มอบู ดอทคอม ',
            // preloading 'log' component
            'preload' => array('log'),
            // autoloading model and component classes
            'import' => array(
                    'application.extensions.esearch.*',
                    'application.models.*',
                    'application.modules.article.models.*',
                    'application.modules.member.models.*',
                    'application.components.*',
            ),
            'modules' => array(
                    // uncomment the following to enable the Gii tool
                    'myadmin',
                    'article',
                    'member',
                    'setting',
                    'gii' => array(
                            'class' => 'system.gii.GiiModule',
                            'password' => '123456',
                            // If removed, Gii defaults to localhost only. Edit carefully to taste.
                            'ipFilters' => array('127.0.0.1', '::1'),
                            'generatorPaths' => array(
                                    'bootstrap.gii',
                            ),
                    ),
            ),
            // application components
            'components' => array(
                    'formatday' => array(
                            'class' => 'application.components.FormatDateTime',
                    ),
                    'user' => array(
                            // enable cookie-based authentication
                            'allowAutoLogin' => true,
                    ),
                    'bootstrap' => array(
                            'class' => 'bootstrap.components.Bootstrap',
                    ),
                    // uncomment the following to enable URLs in path-format
                    'urlManager' => array(
                            'urlFormat' => 'path',
                            'showScriptName' => false,
                            'rules' => array(
                                    '/<id:\d+>-(.*)' => 'site/view',
                                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                            ),
                    ),
//        'db' => array(
//            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
//        ),
                    // uncomment the following to use a MySQL database
                    'db' => array(
                            'connectionString' => 'mysql:host=localhost;dbname=smt',
                            'emulatePrepare' => true,
                            'username' => 'root',
                            'password' => '',
                            'charset' => 'utf8',
                    ),
//        'db' => array(
//            'connectionString' => 'mysql:host=localhost;dbname=smtravel_yii',
//            'emulatePrepare' => true,
//            'username' => 'smtravel_user',
//            'password' => 'smiletravel@@',
//            'charset' => 'utf8',
//        ),
                    'errorHandler' => array(
                            // use 'site/error' action to display errors
                            'errorAction' => 'site/error',
                    ),
                    'log' => array(
                            'class' => 'CLogRouter',
                            'routes' => array(
                                    array(
                                            'class' => 'CFileLogRoute',
                                            'levels' => 'error, warning',
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
            'params' => array(
                    // this is used in contact page
                    'adminEmail' => 'webmaster@example.com',
                    'day' => array("วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัส", "วันศุกร์", "วันเสาร์"),
                    'month' => array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"),
            ),
            'theme' => 'morbuu2014',
            'language' => 'en',
    );