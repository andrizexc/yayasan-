(function ($) {
    'use strict';

    var confer_window = $(window);
    
	
	// Active Wowo Js //
	
	 if (confer_window.width() > 767) {
        new WOW().init();
    }

    // Active jarallax //
    
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.5
        });
    }
})(jQuery);