<?php
namespace ApplicationTest;

use Application\Service\FirstService;

class TestTest extends UnitTest
{
    /**
     *
     * @var FirstService
     */
    private $service;

    protected function setUp()
    {
        parent::setUp();
        $this->service = $this->sm->get('FirstService');
    }

    public function testTest()
    {
        $this->assertInstanceOf('Zend\ServiceManager\ServiceManager', $this->sm);
    }

    public function testGetConfig()
    {
        $config = $this->sm->get('config');

        $this->assertArrayHasKey('my-app', $config);
    }

    public function testCreateFirstService()
    {
        $sl = $this->service ->getServiceLocator();

        $this->assertInstanceOf('Application\Service\FirstService', $this->service);
        $this->assertInstanceOf('Zend\ServiceManager\ServiceManager', $sl);

        $this->assertEquals('Hello World', $this->service->helloService());
    }

    public function testCreateServiceTwo()
    {
        $service = $this->sm->get('ServiceTwo');
        $this->assertInstanceOf('Application\Service\ServiceTwo', $service);
        $this->assertInstanceOf('Application\Service\FirstService', $service->getService());
    }
}
