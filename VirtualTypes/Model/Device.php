<?php
namespace Mage2\VirtualTypes\Model;

class Device implements DeviceInterface
{
    /**
     * @var Apple
     */
    protected $apple;

    /**
     * Device constructor.
     * @param Apple $apple
     */
    public function __construct(Apple $apple)
    {
        $this->apple = $apple;
    }

    /**
     * @return Apple
     */
    public function getDevicesList()
    {
        return $this->apple->getList();
    }
}