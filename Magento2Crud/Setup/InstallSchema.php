<?php
namespace Mage2\Magento2Crud\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var SchemaSetupInterface
     */
    protected $installer;

    /**
     * Create table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->installer = $setup;
        $this->installer->startSetup();

        if (!$this->installer->tableExists('books_list')) {
            $table = $this->installer->getConnection()->newTable(
                $this->installer->getTable('books_list')
            )
            ->addColumn(
                'book_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary' => true,
                    'unsigned' => true
                ],
                'Book Id'
            )
            ->addColumn(
                'book_title',
                Table::TYPE_TEXT,
                255,
                [],
                'Book Title'
            )
            ->addColumn(
                'date_read',
                Table::TYPE_DATE,
                null,
                [],
                'Reading Date'
            )
            ->setComment('Books list table');

        }

        $this->installer->endSetup();
        $this->installer->getConnection()->createTable($table);
    }
}