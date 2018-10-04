<?php
/**
 * @package    Leytech_ProductDescription
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2018 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

$installer = $this;
$installer->startSetup();

// Add "Product Description" attribute group to all attribute sets
$entityTypeId = $installer->getEntityTypeId('catalog_product');
foreach($installer->getAllAttributeSetIds('catalog_product') as $id) {
    $installer->addAttributeGroup($entityTypeId, $id, "Product Description", 99);
}

// Generate these using magerun:
// magerun dev:setup:script:attribute catalog_product attribute_code
$image = array (
    'attribute_model' => NULL,
    'backend' => 'jvs_fileattribute/attribute_backend_file',
    'type' => 'varchar',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'jvs_file',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => 'Use optimised JPG or PNG, suggested width 1280 pixels for 1 image or 640 pixels for 2 images',
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '1',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                ),
        ),
);

$image_background_position = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'varchar',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'text',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => 'center center',
    'unique' => '0',
    'note' => 'This affects which portion of the image is zoomed at responsive widths. Use a valid CSS background-position syntax without any quotes. Reference: https://developer.mozilla.org/en-US/docs/Web/CSS/background-position',
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '1',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                ),
        ),
);

$title = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'varchar',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'text',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '1',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                ),
        ),
);

$subtitle = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'varchar',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'text',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '1',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                ),
        ),
);

$text_position = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'int',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'select',
    'frontend_class' => NULL,
    'source' => 'eav/entity_attribute_source_table',
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '0',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                    0 => 'Top',
                    1 => 'Bottom',
                    2 => 'Left',
                    3 => 'Right',
                    4 => 'Stack Top',
                ),
        ),
);

$colour = array (
    'attribute_model' => NULL,
    'backend' => 'leytech_colorattribute/attribute_backend_color',
    'type' => 'varchar',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'leytech_color',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '1',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                ),
        ),
);

$text_position_mobile = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'int',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'select',
    'frontend_class' => NULL,
    'source' => 'eav/entity_attribute_source_table',
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '0',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                    0 => 'Overlay',
                    1 => 'Stack Top',
                    2 => 'Hide',
                ),
        ),
);

$subtitle_mobile = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'int',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'select',
    'frontend_class' => NULL,
    'source' => 'eav/entity_attribute_source_table',
    'required' => '0',
    'user_defined' => '1',
    'default' => NULL,
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '0',
    'filterable' => '0',
    'comparable' => '0',
    'visible_on_front' => '0',
    'is_html_allowed_on_front' => '0',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '0',
    'apply_to' => NULL,
    'visible_in_advanced_search' => '0',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'option' =>
        array (
            'values' =>
                array (
                    0 => 'Visible',
                    1 => 'Hidden',
                ),
        ),
);

// We need 10 of each of these attributes
for ($i = 1; $i < 11; $i++) {
    $rows[] = [
        [
            'code'      => 'lt_row_' . $i . '_image',
            'label'     => 'Row ' . $i . ' Image',
            'attribute' => $image
        ],
        [
            'code'      => 'lt_row_' . $i . '_image_bg_position',
            'label'     => 'Row ' . $i . ' Image Background Position',
            'attribute' => $image_background_position
        ],
        [
            'code'      => 'lt_row_' . $i . '_image2',
            'label'     => 'Row ' . $i . ' Image 2',
            'attribute' => $image
        ],
        [
            'code'      => 'lt_row_' . $i . '_background_colour',
            'label'     => 'Row ' . $i . ' Background Colour',
            'attribute' => $colour
        ],
        [
            'code'      => 'lt_row_' . $i . '_title',
            'label'     => 'Row ' . $i . ' Title',
            'attribute' => $title
        ],
        [
            'code'      => 'lt_row_' . $i . '_subtitle',
            'label'     => 'Row ' . $i . ' Subtitle',
            'attribute' => $subtitle
        ],
        [
            'code'      => 'lt_row_' . $i . '_subtitle_mobile',
            'label'     => 'Row ' . $i . ' Subtitle Mobile',
            'attribute' => $subtitle_mobile
        ],
        [
            'code'      => 'lt_row_' . $i . '_text_position',
            'label'     => 'Row ' . $i . ' Text Position',
            'attribute' => $text_position
        ],
        [
            'code'      => 'lt_row_' . $i . '_text_position_mob',
            'label'     => 'Row ' . $i . ' Text Position Mobile',
            'attribute' => $text_position_mobile
        ],
        [
            'code'      => 'lt_row_' . $i . '_text_bg_colour',
            'label'     => 'Row ' . $i . ' Text Background Colour',
            'attribute' => $colour
        ],
        [
            'code'      => 'lt_row_' . $i . '_text_colour',
            'label'     => 'Row ' . $i . ' Text Colour',
            'attribute' => $colour
        ],
    ];
}

// Loop the rows and create the attributes
foreach ($rows as $row) {
    foreach ($row as $attr) {
        // Add the correct label and then create the attribute
        $attr['attribute']['label'] = $attr['label'];
//        $installer->removeAttribute('catalog_product', $attr['code']);
        $installer->addAttribute('catalog_product', $attr['code'], $attr['attribute']);

        // Assign the attributes to the "Product Description" tab for all attribute sets
        $attributeId = $installer->getAttributeId('catalog_product', $attr['code']);
        foreach($installer->getAllAttributeSetIds('catalog_product') as $id) {
            $attributeGroupId = $installer->getAttributeGroupId('catalog_product', $id, "Product Description");
            $installer->addAttributeToSet('catalog_product', $id, $attributeGroupId, $attributeId);
        }
    }
}

$installer->endSetup();