/*
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
*/
;(function($) {
    $(document).ready( function(e) {
        //Clock timer js
        if( $('.timer').length > 0 ){

                function setexpire() {
                        $(this).html('<span class="expired">Expired</span>');
                }

                $('.timer').each(function(index, element) {
                        var dealtimer = new Date();
                        var sethours = parseFloat($(this).attr('data-hour'));
                        var setmin = parseFloat($(this).attr('data-min'));
                        var setsecond = parseFloat($(this).attr('data-sec'));
                        dealtimer.setHours(dealtimer.getHours() +  sethours);
                        dealtimer.setMinutes(dealtimer.getMinutes() +  setmin );
                        dealtimer.setSeconds(dealtimer.getSeconds() +  setsecond );
                        $(this).countdown({until: dealtimer, format: 'HMS', compact: true, description: '', onExpiry: setexpire});
                });
        }
    });
})(jQuery);

