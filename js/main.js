(function($) {

	$(document).ready(function($) {

		// Get real window width
		function getWindowWidth() {
			var windowWidth = 0;
			if (typeof(window.innerWidth) == 'number') {
				windowWidth = window.innerWidth;
			}
			else {
				if (document.documentElement && document.documentElement.clientWidth) {
					windowWidth = document.documentElement.clientWidth;
				}
				else {
					if (document.body && document.body.clientWidth) {
						windowWidth = document.body.clientWidth;
					}
				}
			}
			return windowWidth;
		}

		// Responsive issues.
		var isMobile = function() {
			var ww = getWindowWidth();
			if (ww < 768) {
				return true;
			}
			else if (ww >= 768) {
				return false;
			}
		}

		is_Mobile = isMobile();

	  	// Scroll to top animation.
	  	$("#scroll-top").on('click', function(e){
	        e.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: 0
	        }, 500);
		});

	});

})(jQuery);
