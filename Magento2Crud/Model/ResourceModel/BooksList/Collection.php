<?php
namespace Mage2\Magento2Crud\Model\ResourceModel\BooksList;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @return $this
     */
    protected function _construct()
    {
        $this->_init('Mage2\Magento2Crud\Model\BooksList', 'Mage2\Magento2Crud\Model\ResourceModel\BooksList');
    }
}