/*
 * ==============
 *	Navigation menu toggle
 * ==============
 */
var mobileNav, navToggle;

jQuery(document).ready(function($) { 
	mobileNav = $('.site-nav');
	navToggle = $('#toggle-nav');

	navToggle.click(function(event) {
		if (mobileNav.hasClass('visible')) {
			mobileNav.removeClass('visible');
		} else {
			mobileNav.addClass('visible');
		}
	});
});

jQuery(document).mouseup(function(event) {
    var container = jQuery('.site-nav');

    if (!container.is(event.target) && container.has(event.target).length === 0) {
    	mobileNav.removeClass('visible');
    }
});



/*
 * ==============
 *	Accordion menu toggle
 * ==============
 */
 jQuery(document).ready(function($) {
 	$('.accordion-title').click(function(){
 		$(this).parent('li').toggleClass('visible');
 	});
 });

 
/*
 * ==============
 *	Countdown on homepage
 * ==============
 */
function initCountDown () {
	jQuery(".countdown.lia time").countdown("2018/01/15", function(event) {
		var $this = jQuery(this).html(event.strftime(''
		    + '<span>%D</span> dagar<br> '
		    + '<span>%H:</span>'
		    + '<span>%M</span> h '
		));
	});

	jQuery(".countdown.graduation time").countdown("2018/05/31", function(event) {
		var $this = jQuery(this).html(event.strftime(''
		    + '<span>%D</span> dagar<br> '
		    + '<span>%H:</span>'
		    + '<span>%M</span> h '
		));
	});
}
initCountDown();
