<?php

class Taras_Contacts_Block_Adminhtml_Contacts_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'taras_contacts';
        $this->_controller = 'adminhtml_contacts';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Contact'));
        $this->_updateButton('delete', 'label', $this->__('Delete Contact'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('taras_contacts')->getId()) {
            return $this->__('Edit Contact');
        }
        else {
            return $this->__('New Contact');
        }
    }
}