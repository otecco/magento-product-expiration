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
class Shopix_ProductExpiration_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getProductTimeLeft($product, $asArray = false)
    {  
        if (! $product->hasExpiryDate())
            return null;

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

