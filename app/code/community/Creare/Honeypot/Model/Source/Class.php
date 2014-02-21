<?php

class Creare_Honeypot_Model_Source_Class
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'chp_field_hide', 'label'=>Mage::helper('adminhtml')->__('Hide with display:none')),
            array('value' => 'chp_field_abs', 'label'=>Mage::helper('adminhtml')->__('Absolute Position Away')),
        );
    }
    
}
