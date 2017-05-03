<?php
class Taras_Contacts_Model_Mysql4_Contacts_Collection extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
		$this->_init('contacts/contacts');
    }
}