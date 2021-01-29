/* Priority Navigation */

var nav = priorityNav.init({
    mainNavWrapper: ".primary-navigation", // mainnav wrapper selector (must be direct parent from mainNav)
    mainNav: "#menu-main-navigation", // mainnav selector. (must be inline-block)
    navDropdownLabel: " More &darr;",
    navDropdownClassName: "nav__dropdown", // class used for the dropdown.
    navDropdownToggleClassName: "nav__dropdown-toggle", // class used for the dropdown toggle.
});

/* Javascript Helper Function */

/* Select an Element in the DOM */
function get(selector) {
    return document.querySelector(selector);
}

/* Create Marup for an element with classes and content */
function createMarkUp(elementType, classList, content) {
    element = document.createElement(elementType);
    if (classList.length > 0) {
        element.classList = classList.join(" ");
    }
    if (content) {
        element.innerHTML = content;
    }
    return element;
}

$(document).ready(function() {
    /* run Product page Functions */
    var isProduct = get(".single-product");
    if (isProduct) {
        moveElements();
        trustBadges();
        calcSavings();
        // attachTextToRegisterCTA();
    }

    /* If Product Page, attach trust badget next to price */
    function trustBadges() {
        var badge = $(".trust-badges");
        var productMeta = $(".product_meta");
        $(".trust-badges").addClass("attached-to-prod");
        // $(productMeta).append(badge);
    }

    /* Move Single Product Elements around for Mobile */
    function moveElements() {
        width = $(window).width();
        if (width < 768) {
            var prodTitle = get(".product_title");
            prodTitle.classList.add("product-moved-title");
            var prodSlide = get(".woocommerce-notices-wrapper");
            prodSlide.prepend(prodTitle);

            var prodSale = get(".onsale");
            if (prodSale) {
                prodSale.classList.add("moved-sale");
                var prodPrice = get(".price");
                prodPrice.prepend(prodSale);
            }
        }
    }
});

/* Calculate Savings */

function calcSavings() {
    var onSale = get(".single-product .onsale");
    if (onSale) {
        var theprice = get(".single-product .price");
        var startPrice = get(".price del");
        startPrice = startPrice.textContent.split("$")[1];

        var discountPrice = get(".price ins");
        discountPrice = discountPrice.textContent.split("$")[1];

        var savings = Math.floor(startPrice - discountPrice);
        saveContent = "You Save $<span>" + savings + "</span>";

        priceElement = createMarkUp("div", ["you-save"], saveContent);
        theprice.append(priceElement);
    }
}

/* attachTextToRegisterCTA  */

// function attachTextToRegisterCTA() {
//     var theTextToAttach = document.querySelector(".discount-text");
//     if (theTextToAttach) {
//         var attachElement = document.querySelector(
//             ".woocommerce-notices-wrapper .u-column2.col-2 h2"
//         );
//         attachElement.appendChild(theTextToAttach);
//     }
// }


function attachCategoriesHigheronPage() {
    var isHome = document.querySelector('.home');
    if (isHome) {
        var catSection = document.querySelector('section.storefront-product-section.storefront-product-categories');
        var attachElement = document.querySelector('.home-cats-holder');
        catSection.firstChild.innerHTML = "Our Collections";
        attachElement.appendChild(catSection);
    }
}

attachCategoriesHigheronPage();