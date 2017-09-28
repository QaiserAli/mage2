<?php
namespace Mage2\StackExchange\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{

    protected $customerRepositoryInterface;
    protected $addressInterface;

    public function __construct(
        Context $context,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
        ) {
        $this->customerRepositoryInterface = $customerRepositoryInterface;
        parent::__construct($context);
    }

    public function execute()
    {
        $customer = $this->customerRepositoryInterface->getById(1);
        $email = $customer->getEmail();
        $addresses = $customer->getDefaultBilling();
        echo "<pre>"; print_r($email); echo "</pre>"; exit;
    }
}