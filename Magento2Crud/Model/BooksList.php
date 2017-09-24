<?php
namespace Mage2\Magento2Crud\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class BooksList extends AbstractModel implements IdentityInterface, BooksListInterface
{

    const CACHE_TAG = 'mage2_magento2crud_books_list';

    /**
     * @return $this
     */
    protected function _construct()
    {
        $this->_init('Mage2\Magento2Crud\Model\ResourceModel\BooksList');
    }


    /**
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}