<?php
namespace Mage2\Magento2Plugin\Controller\Index;

use Mage2\Magento2Plugin\Model\DeviceInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    /**
     * @var DeviceInterface
     */
    protected $device;

    /**
     * Index constructor.
     * @param Context $context
     * @param DeviceInterface $device
     */
    public function __construct(
        Context $context,
        DeviceInterface $device
    ) {
        $this->device = $device;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return mixed
     */
    public function execute()
    {
        var_dump($this->device->getDevicesList());
    }
}