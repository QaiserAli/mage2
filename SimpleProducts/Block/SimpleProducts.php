<?php
namespace Mage2\SimpleProducts\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\FilterGroupBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\View\Element\Template;

class SimpleProducts extends Template
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var FilterBuilder
     */
    protected $filterBuilder;

    /**
     * @var FilterGroupBuilder
     */
    protected $filterGroupBuilder;

    /**
     * @var SortOrder
     */
    protected $sortOrder;

    /**
     * Main constructor.
     * @param Template\Context $context
     * @param ProductRepository $productRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param FilterBuilder $filterBuilder
     * @param FilterGroupBuilder $filterGroupBuilder
     * @param SortOrder $sortOrder
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        FilterBuilder $filterBuilder,
        FilterGroupBuilder $filterGroupBuilder,
        SortOrder $sortOrder,
        array $data = []
    ) {
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->filterGroupBuilder = $filterGroupBuilder;
        $this->sortOrder = $sortOrder;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
    }

    /**
     * @return object
     */
    public function getSimpleProducts()
    {
        $this->searchCriteriaBuilder->setCurrentPage(1);
        $this->searchCriteriaBuilder->setPageSize(10);

        $filters = $this->filterBuilder
            ->setField('type_id')
            ->setConditionType('eq')
            ->setValue(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
            ->create();

        $filterGroup = $this->filterGroupBuilder
            ->addFilter($filters)
            ->create();

        $searchCriteria = $this->searchCriteriaBuilder->setFilterGroups([$filterGroup])->create();

        $sortOrder = $this->sortOrder->setField('updated_at')->setDirection(SortOrder::SORT_ASC);
        $this->searchCriteriaBuilder->setSortOrders([$sortOrder]);

        $products = $this->productRepository->getList($searchCriteria)->getItems();
        return $products;
    }
}