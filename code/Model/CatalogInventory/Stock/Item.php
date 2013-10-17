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

