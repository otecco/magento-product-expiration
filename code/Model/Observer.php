<?php

class Shopix_ProductExpiration_Model_Observer
{
    public function catalogProductIsSalableAfter($observer)
    {  
        $salable = $observer->getSalable();

        $salable->is_salable = (Mage::helper('productexpiration')->getProductTimeLeft($salable->product) > 0);
    }
}

