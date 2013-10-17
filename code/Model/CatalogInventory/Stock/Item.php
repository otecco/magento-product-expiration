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

class Shopix_ProductExpiration_Model_CatalogInventory_Stock_Item extends Mage_CatalogInventory_Model_Stock_Item
{
    public function checkQty($qty)
    {  
        if ($product = $this->getProduct()) {
            if (Mage::helper('productexpiration')->getProductTimeLeft($product) < 0)
                return false;
        }

        return parent::checkQty($qty);
    }
}

