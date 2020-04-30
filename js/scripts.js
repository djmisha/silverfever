

 
$(document).ready(function() {
	
	var badge = $('.trust-badges');
	console.log(badge);


	// function calcWidth() {
	// 	var navwidth = 0;
	// 	var morewidth = $('#main .more').outerWidth(true);
	// 	$('#main > li:not(.more)').each(function() {
	// 		navwidth += $(this).outerWidth( true );
	// 	});
	// 	var availablespace = $('nav').outerWidth(true) - morewidth;
		
	// 	if (navwidth > availablespace) {
	// 		var lastItem = $('#main > li:not(.more)').last();
	// 		lastItem.attr('data-width', lastItem.outerWidth(true));
	// 		lastItem.prependTo($('#main .more ul'));
	// 		calcWidth();
	// 	} else {
	// 		var firstMoreElement = $('#main li.more li').first();
	// 		if (navwidth + firstMoreElement.data('width') < availablespace) {
	// 			firstMoreElement.insertBefore($('#main .more'));
	// 		}
	// 	}
		
	// 	if ($('.more li').length > 0) {
	// 		$('.more').css('display','inline-block');
	// 	} else {
	// 		$('.more').css('display','none');
	// 	}
	// }
	// $(window).on('resize load',function(){
	// 	calcWidth();
	// });


	// console.log('working');
	// var $menu = $('#site-navigation'),
	// $menuList = $('#menu-main-navigation'),
	// bp = window.getComputedStyle(document.body,':after').getPropertyValue('content'),
	// $toggler;

	// console.log($menuList);
	// console.log(bp);
	// console.log($toggler);

	
	
	// if(!$('#toggler').length) {
	// 	$('<li class="priority" id="toggler"><a href="#">More+</a></li>').appendTo($menuList);
	// 	$toggler = $('#toggler');
	// }
	
	
	// function checkSize() {
	// 	if(bp=='large') {
	// 		showNav();
	// 	} else {
	// 		hideNav();
	// 		$toggler.text('More +');
	// 	}
	// }
	
	// function showNav() {
	// 	$menu.find('li:not(.priority)').removeClass('hidden');
	// }
	
	// function hideNav() {
	// 	$menu.find('li:not(.priority)').addClass('hidden');
		
	// }
	
	// function changeNavLabel() {
	// 	$toggler.toggleClass('active');
	// 	if($toggler.hasClass('active')) {
	// 		$toggler.text('Less-');
	// 		showNav();
	// 	} else {
	// 		$toggler.text('More+');
	// 		hideNav();
	// 	}
	// }
	
	// $menu.on("click", "#toggler", function(e){ //Clicking toggle
	// 	e.preventDefault();
	// 	changeNavLabel();
	// });
	
	// $(window).resize(function() { //On Window resize
	// 	bp = window.getComputedStyle(document.body,':after').getPropertyValue('content');
	// 	checkSize();
	// 	togglerVisibility();
	// });
	
	// checkSize();
	// togglerVisibility();
			
		});

