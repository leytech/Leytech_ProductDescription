<?php
/**
 * @package    Leytech_ProductDescription
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2018 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_ProductDescription_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED = 'leytech_product_description/settings/enabled';
    const XML_PATH_REMOVE_FIELDS = 'leytech_product_description/settings/remove_fields';

    /**
     * Get whether the extension is enabled
     *
     * @return bool
     */
    public function isEnabled() {
        return (bool) Mage::getStoreConfigFlag(self::XML_PATH_ENABLED);
    }

    /**
     * Get the color picker to use
     *
     * @return mixed
     */
    public function getRemoveFields() {
        return (bool) Mage::getStoreConfig(self::XML_PATH_REMOVE_FIELDS);
    }

}
