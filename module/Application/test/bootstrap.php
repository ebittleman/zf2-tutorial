<?php
namespace ApplicationTest;

require_once __DIR__. '/UnitTest.php';
require __DIR__ . '/../../../init_autoloader.php';

use Zend\Mvc\Application;
use Zend\ServiceManager\ServiceManager;

class Bootstrap
{
    /**
     *
     * @var ServiceManager
     */
    public static $sm;

    public static function init()
    {
        $appConfig = require __DIR__ . '/../../../config/application.config.php';
        $app = Application::init($appConfig);
        static::$sm = $app->getServiceManager();
    }
}

chdir(__DIR__ . '/../../../');
Bootstrap::init();