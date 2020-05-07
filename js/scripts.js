$(document).ready(function() {
    /* If Product Page, attach trust badget next to price */

    var isProduct = $("body.product-template-default");
    var badge = $(".trust-badges");
    var productMeta = $(".product_meta");

    if (isProduct) {
        $(".trust-badges").addClass("attached-to-prod");
        $(productMeta).append(badge);
    }
});

/* Calculate Savings */

function calcSavings() {
    var theprice = document.querySelector(".single-product .price");
    if (theprice) {
        var startPrice = document.querySelector(".price del");
        startPrice = startPrice.textContent.split("$")[1];

        var discountPrice = document.querySelector(".price ins");
        discountPrice = discountPrice.textContent.split("$")[1];

        var savings = startPrice - discountPrice;
        var priceElement = document.createElement("div");

        priceElement.classList.add("you-save");
        priceElement.innerHTML = "You Save $<span>" + savings + "</span>";
        theprice.append(priceElement);
    }
}

calcSavings();
