<?php
/**
 * @package    Leytech_ProductDescription
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2018 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */
class Leytech_ProductDescription_Model_Observer
{
    /**
     * Exclude 'lt_row_*' attributes from standard form generation
     *
     * @param   Varien_Event_Observer $observer
     * @return  Leytech_ProductDescription_Model_Observer
     */
    public function updateExcludedFieldList(Varien_Event_Observer $observer)
    {
        // Do nothing if option to remove fields has not been selected
        if (!Mage::helper('leytech_product_description')->getRemoveFields()) {
            return $this;
        }

        $block = $observer->getEvent()->getObject();
        $list = $block->getFormExcludedFieldList();

        $attributesCollection = Mage::getResourceModel('catalog/product_attribute_collection');
        $attributesCollection->addFieldToFilter('attribute_code', array('like' => 'lt_row_%'));
        foreach($attributesCollection as $attribute) {
            $attributes[] = $attribute->getAttributeCode();
        }
        $list = array_merge($list, array_values($attributes));

        $block->setFormExcludedFieldList($list);

        return $this;
    }

}