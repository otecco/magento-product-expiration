<?php

class Shopix_ProductExpiration_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getProductTimeLeft($product, $asArray = false)
    {  
        $d = strptime($product->getExpiryDate(), "%Y-%m-%d");
        $t = strptime($product->getAttributeText('expiry_time'), "%I:%M %p");
        $expiry = mktime($t['tm_hour'], $t['tm_min'], 0, $d['tm_mon'] + 1, $d['tm_mday'], $d['tm_year'] + 1900);

        $now = Mage::getModel('core/date')->timestamp(time());
        $time_left = $expiry - $now;

        if ($asArray) {
            return array(
                'expired' => $time_left < 0,
                'hour' => (int) ($time_left / (60 * 60)),
                'min' => (int) (($time_left % (60 * 60)) / 60),
                'sec' => (int) ($time_left % 60)
            );
        } else
            return $time_left;
    }
}

