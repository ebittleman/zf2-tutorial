<?php
namespace Application\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

class FirstService implements ServiceLocatorAwareInterface
{

    use ServiceLocatorAwareTrait;

    public function __construct()
    {

    }

    public static function newService()
    {
        $service = new FirstService();
    }

    public function helloService()
    {
        return 'Hello World';
    }
}
