<?php
namespace Mage2\Magento2Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BooksList extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('books_list', 'book_id');
    }
}