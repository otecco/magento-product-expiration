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

