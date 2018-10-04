<?php
/**
 * @package    Leytech_ProductDescription
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2018 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */
class Leytech_ProductDescription_Block_Catalog_Product_View_Description extends Mage_Catalog_Block_Product_View_Description
{
    public function getProductDescriptionRows(array $excludeAttr = array())
    {
        $data = array();
        $product = $this->getProduct();
        $attributes = $product->getAttributes();

        // Build array of rows using lt_row_* attributes and values
        foreach ($attributes as $attribute) {
            $code = $attribute->getAttributeCode();
            if (substr($code, 0, 7) === "lt_row_" && !in_array($code, $excludeAttr)) {
                $value = $attribute->getFrontend()->getValue($product);

                // Hacky method because drop-downs with no selected value get assigned "No"
                if($value == 'No') {
                    $value = '';
                }

                $valueBits = explode("_", $code, 4);
                $rowNumber = $valueBits[2];
                $shortCode = $valueBits[3];

                $data[$rowNumber][$shortCode] = array(
                    'label' => $attribute->getStoreLabel(),
                    'value' => $value,
                    'code'  => $code
                );
            }
        }

        // Only return rows that have an image
        foreach ($data as $key => &$value) {
            if (empty($value['image']['value'])) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}
