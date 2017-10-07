<?php
namespace Mage2\ArgumentsReplacement\Model;

class Device implements DeviceInterface
{
    /**
     * @var array $devices
     */
    public $devices;

    /**
     * Device constructor.
     * @param array $devices
     */
    public function __construct(array $devices=[])
    {
        $this->devices = $devices;
    }

    /**
     * Get devices list
     *
     * @return array
     */
    public function getDevicesList()
    {
        return $this->devices;
    }
}