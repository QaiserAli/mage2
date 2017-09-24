<?php
namespace Mage2\Magento2Crud\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    /**
     * @var BooksListFactory
     */
    protected $booksListFactory;

    /**
     * Main constructor.
     * @param Template\Context $context
     * @param array $data
     * @param BooksListFactory $booksListFactory
     *
     * @return $this
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        \Mage2\Magento2Crud\Model\BooksListFactory $booksListFactory
    ) {
        $this->booksListFactory = $booksListFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    public function _prepareLayout()
    {
    }

    /**
     * Get books collection
     *
     * @return array
     */
    public function getBooksCollection()
    {
        $books = $this->booksListFactory->create();
        return $books->getCollection();
    }

    /**
     * @return string
     */
    public function getHeading()
    {
        return 'Books List';
    }
}