<?php
namespace ApplicationTest;

use Zend\ServiceManager\ServiceManager;
abstract class UnitTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var ServiceManager
     */
    protected $sm;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->sm = Bootstrap::$sm;
    }
}
