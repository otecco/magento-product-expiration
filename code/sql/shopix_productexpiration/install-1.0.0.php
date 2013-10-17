<?php /*
    Shopix_ProductExpiration - Make product unavailable after a configured date and time
    Copyright (C) 2013 Shopix Pty Ltd (http://www.shopix.com.au)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ ?>
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

