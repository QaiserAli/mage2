<?php
namespace Mage2\HelloMagento2Admin\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Index constructor.
     * @param Action\Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $pageObject = $this->pageFactory->create();
        $pageObject->setActiveMenu('Mage2_HelloMagento2Admin::custom_menu');
        $pageObject->getConfig()->getTitle()->prepend('Hello Magento2');
        return $pageObject;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return true;
    }
}