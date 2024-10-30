(function($) {
  "use strict";

	// ON CLICK WINDOW OPEN
	$(document).on("click", '.cf-btn', function(event){
		var urlOpen = $(this).find('.cf-button').attr('data-open');

		if(urlOpen == "false"){
			var url = $(this).find('.cf-button').attr('data-url');
			var win = window.open(url, '_blank');
			if (win) {
			    //Browser has allowed it to be opened
			    win.focus();
			    $(this).find('.cf-button').attr("data-open", "true");
			} else {
			    //Browser has blocked it
			    alert('Please allow popups for this website');
			}
			$(this).find('.cf-button').css('display', 'none');
			$(this).find('.cf-coupon').css('display', 'block');
		}

		var isDeal = $(this).find('.cf-button-deal').attr('data-deal');
		if( isDeal == "true" ){
			var url = $(this).find('.cf-button-deal').attr('data-url');
			var win = window.open(url, '_blank');
			if (win) {
			    //Browser has allowed it to be opened
			    win.focus();
			} else {
			    //Browser has blocked it
			    alert('Please allow popups for this website');
			}
		}
		
	});

})(jQuery);
