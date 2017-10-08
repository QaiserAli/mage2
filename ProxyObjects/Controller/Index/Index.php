<?php
namespace Mage2\ProxyObjects\Controller\Index;

use Mage2\ProxyObjects\Model\FastLoading;
use Mage2\ProxyObjects\Model\SlowLoading;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\ObjectManagerInterface;

class Index extends Action
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var FastLoading
     */
    protected $fastLoading;

    /**
     * @var SlowLoading
     */
    protected $slowLoading;

    /**
     * Index constructor.
     * @param Context $context
     * @param FastLoading $fastLoading
     * @param SlowLoading $slowLoading
     */
    public function __construct(
        Context $context,
        FastLoading $fastLoading,
        SlowLoading $slowLoading
    ) {
        $this->objectManager = $context->getObjectManager();
        $this->fastLoading = $fastLoading;
        $this->slowLoading = $slowLoading;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return string
     */
    public function execute()
    {
        /*$time = microtime(true);
        $this->objectManager->get('Mage2\ProxyObjects\Model\FastLoading');
        $loadTime = microtime(true) - $time;
        echo 'load time of fastLoading object = ' . round($loadTime * 1000, 4) . 'ms';

        echo "<br /> .................................<br />";
        $time = microtime(true);
        $this->objectManager->get('Mage2\ProxyObjects\Model\SlowLoading');
        $loadTime = microtime(true) - $time;
        echo 'load time of slowLoading object = ' . round($loadTime * 1000, 4) . 'ms'; */

        /**
        $time = microtime(true);
        echo $this->slowLoading->getMessage();
        $loadTime = microtime(true) - $time;
        echo '<br />load time of fastLoading object = ' . round($loadTime * 1000, 4) . 'ms';
        **/
    }
}