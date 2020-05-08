/* Helper Function */

/* Get Elements on Page */
function get(element) {
    element = document.querySelector(element);
    return element;
}

/* Create a Div with classes and content */
// function create(element, cssclass, content) {
//     element = document.createElement("div");
//     element.classList.add(cssclass);
//     element.innerHTML = content;
//     return element;
// }

$(document).ready(function() {
    /* run Product page Functions */
    var isProduct = get(".single-product");
    if (isProduct) {
        moveElements();
        trustBadges();
    }

    /* If Product Page, attach trust badget next to price */
    function trustBadges() {
        var badge = $(".trust-badges");
        var productMeta = $(".product_meta");
        $(".trust-badges").addClass("attached-to-prod");
        $(productMeta).append(badge);
    }

    /* Move Single Product Elements around for Mobile */
    function moveElements() {
        width = $(window).width();
        if (width < 768) {
            var prodTitle = get(".product_title");
            var prodSlide = get(".woocommerce-notices-wrapper");
            prodSlide.prepend(prodTitle);

            var prodSale = get(".onsale");
            prodSale.classList.add("moved-sale");
            var prodPrice = get(".price");
            prodPrice.prepend(prodSale);
        }
    }
});

/* Calculate Savings */

function calcSavings() {
    var theprice = get(".single-product .price");
    var onSale = get(".single-product .onsale");
    if (onSale) {
        var startPrice = get(".price del");
        startPrice = startPrice.textContent.split("$")[1];

        var discountPrice = get(".price ins");
        discountPrice = discountPrice.textContent.split("$")[1];

        var savings = startPrice - discountPrice;
        var savings = Math.floor(savings);

        var priceElement = document.createElement("div");
        priceElement.classList.add("you-save");
        priceElement.innerHTML = "You Save $<span>" + savings + "</span>";
        theprice.append(priceElement);
    }
}

calcSavings();
