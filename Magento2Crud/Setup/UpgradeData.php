<?php
namespace Mage2\Magento2Crud\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2') < 0) {
            $tableName = $setup->getTable('books_list');

            if ($setup->getConnection()->isTableExists($tableName) == true) {
                $data = [
                    [
                        'book_id' => 1,
                        'book_title' => 'C++',
                        'date_read' => '2016-04-10'
                    ],
                    [
                        'book_id' => 2,
                        'book_title' => 'Java',
                        'date_read' => '2016-06-12'
                    ],
                    [
                        'book_id' => 3,
                        'book_title' => 'PHP 7',
                        'date_read' => '2016-08-18'
                    ],
                    [
                        'book_id' => 4,
                        'book_title' => 'JavaScript',
                        'date_read' => '2017-01-13'
                    ],
                    [
                        'book_id' => 5,
                        'book_title' => 'Scala',
                        'date_read' => '2017-02-13'
                    ]
                ];

                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        }
        $setup->endSetup();
    }
}