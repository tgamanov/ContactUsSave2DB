<?php

class Taras_Contacts_Block_Adminhtml_Contacts extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // The blockGroup must match the first half of how we call the block, and controller matches the second half
        // ie. foo_bar/adminhtml_baz
        $this->_blockGroup = 'taras_contacts';
        $this->_controller = 'adminhtml_contacts';
        $this->_headerText = $this->__('Contacts');

        parent::__construct();
    }
}