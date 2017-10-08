<?php
namespace Mage2\Magento2Plugin\Model;

class Device implements DeviceInterface
{
    /**
     * @return array
     */
    public function getDevicesList()
    {
        return [
          'Iphone 7 Black',
          'Samsungs Glaxy 5s'
        ];
    }
}