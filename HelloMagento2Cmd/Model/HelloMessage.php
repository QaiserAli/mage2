<?php
namespace Mage2\HelloMagento2Cmd\Model;

class HelloMessage implements MessageInterface
{
    /**
     * @return string
     */
    public function getHelloMessage()
    {
        return 'Hello to Magento2 CMD using interface implementation';
    }
}