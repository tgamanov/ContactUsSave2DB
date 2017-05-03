<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 02.05.17
 * Time: 10:43
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
if ($installer->getConnection()->isTableExists("contact_us_records") != true) {
    $table = $installer->getConnection()
        ->newTable($installer->getTable('contact_us_records'))
        ->addColumn('contacts_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
        ), 'Contacts ID')
        ->addColumn('contact_us_name', Varien_Db_Ddl_Table::TYPE_TEXT, 20, array(
            'nullable' => false,
        ), 'Name of the customer from contactus us form')
        ->addColumn('contact_us_email', Varien_Db_Ddl_Table::TYPE_TEXT, 20, array(), 'Email of the customer from contactus us form')
        ->addColumn('contact_us_phone', Varien_Db_Ddl_Table::TYPE_TEXT, 15, array(
            'nullable' => true,
        ), 'Phone number of the customer from contactus us form')
        ->addColumn('contact_us_comment', Varien_Db_Ddl_Table::TYPE_TEXT, 1000, array(
            'nullable' => false,
        ), 'Comment of the customer from contactus us form');
    $installer->getConnection()->createTable($table);
}
$installer->endSetup();