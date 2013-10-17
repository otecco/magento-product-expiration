<?php

$installer = $this;

$entities = array(
    'catalog_product',
);

$attributes = array(
    'expiry_date' => array(
        'type' => 'datetime',
        'label' => 'Product Expiration Date',
        'group' => 'General',
        'input' => 'date',
        'visible' => true,
        'required' => false,
        'used_in_product_listing' => true,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    ),
    'expiry_time' => array(
        'type' => 'int',
        'label' => 'Product Expiration Time',
        'group' => 'General',
        'input' => 'select',
        'visible' => true,
        'required' => false,
        'used_in_product_listing' => true,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
        'option' => array(
            'values' => array(
                 0 => '12 am',
                 1 => '01 am',
                 2 => '02 am',
                 3 => '03 am',
                 4 => '04 am',
                 5 => '05 am',
                 6 => '06 am',
                 7 => '07 am',
                 8 => '08 am',
                 9 => '09 am',
                10 => '10 am',
                11 => '11 am',
                12 => '12 pm',
                13 => '01 pm',
                14 => '02 pm',
                15 => '03 pm',
                16 => '04 pm',
                17 => '05 pm',
                18 => '06 pm',
                19 => '07 pm',
                20 => '08 pm',
                21 => '09 pm',
                22 => '10 pm',
                23 => '11 pm',
            ),
        ),
    ),
);

foreach ($entities as $entity) {
    foreach ($attributes as $attribute => $options) {
        $installer->addAttribute($entity, $attribute, $options);
    }
}

$installer->endSetup();

