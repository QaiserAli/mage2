<?php
namespace Mage2\Magento2Plugin\Model;

class Plugin
{
    /**
     * @param $subject
     * @param $result
     *
     * @return array
     */
    public function afterGetDevicesList($subject, $result)
    {
        array_push($result, 'Iphone 8 Silver', 'Note III');
        return $result;
    }
}