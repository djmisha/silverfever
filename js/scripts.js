

$(document).ready(function () {

	/* If Product Page, attach trust badget next to price */

	var isProduct = $('body.product-template-default');
	var badge = $('.trust-badges');
	var productMeta = $('.product_meta');
	if (isProduct) {
		$('.trust-badges').addClass('attached-to-prod');
		$(productMeta).append(badge);
	}

	// 	function calcSavings(){
	//   var startPrice = 30;
	//   var discountPrice = 25;

	//   var savings = startPrice - discountPrice;  
	//   var priceElement = document.createElement('div');
	//   priceElement.classList.add('you-save');
	//   priceElement.innerHTML = 'You Save: ' + savings; 
	//   return priceElement;
	// }

	// calcSavings();


});

