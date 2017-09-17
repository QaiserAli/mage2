<?php
namespace Mage2\HelloMagento2\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    /**
     * @inheritdoc
     *
     */
    protected function _prepareLayout()
    {
        return $this->setMessage('Hello Magento2 from the block');
    }

    /**
     *
     * @return $this
     */
    public function getWelcomeMessage()
    {
        return 'Getting welcome message from block';
    }
}