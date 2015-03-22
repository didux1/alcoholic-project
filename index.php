<?php

require(dirname(__FILE__) . '/yii/framework/YiiBase.php');

class Yii extends YiiBase {
    /**
     * @static
     * @return CWebApplication
     */
    public static function app()
    {
        return parent::app();
    }
}

$config=dirname(__FILE__).'/protected/config/main.php';

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
$app = Yii::createWebApplication($config)->run();