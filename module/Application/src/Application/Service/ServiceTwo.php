<?php
namespace Application\Service;

class ServiceTwo
{
    /**
     *
     * @var FirstService
     */
    private $service;

    public function __construct(FirstService $first)
    {
        $this->service = $first;
    }


    public function getService()
    {
        return $this->service;
    }
}
