<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

$url = get_stylesheet_directory_uri();

?>

</div><!-- .col-full -->
</div><!-- #content -->

 

<!-- if(is_product() || is_front_page() || is_archive()):  -->
<?php if (is_product()): ?>
<span class="trust-title">Safe Shopping, Secure Payments</span>
<div class="trust-badges">
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-ship.svg" alt="ship"> </div>
        <div>
            <p> <strong>30-Days No-Questions Return Policy</strong><br /> If you are not completely satisfied with your
                purchase, you can claim a 100% refund. Only shipping and delivery costs will be retained. </p>
        </div>
    </div>
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-return.svg" alt="return"> </div>
        <div>
            <p> <strong>Easy Exchange Policy</strong><br /> We welcome exchanges, if you prefer an exchange,
                please choose another color/size/item from our offerings. </p>
        </div>
    </div>
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-ssl.svg" alt="ssl"> </div>
        <div>
            <p> <strong>Secure Checkout</strong> <br />SSL Enabled Secure Checkout. You can shop safely with us. </p>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (!is_user_logged_in()) { ?>
<div class="register-for-discount">
    <?php echo do_shortcode('[woocommerce_my_account]'); ?>
    <p class="discount-text">Discount coupon code will be send to your email address.</p>
</div>
<?php } ?>

<?php do_action('storefront_before_footer'); ?>

<div class="order-questions"> 
    <p>
       Questions about your order? Contact Liliya <br> 
       Text or Call <a href="tel+1(858) 922-7535">(858) 922-7535 </a>
       email <a href="mailto:info@silverfever.com">info@silverfever.com</a>
    </p>
</div>




<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

        <?php
            /**
             * Functions hooked in to storefront_footer action
             *
             * @hooked storefront_footer_widgets - 10
             * @hooked storefront_credit         - 20
             */
            do_action('storefront_footer');
            ?>
        <div class="copyright">&copy; <?=date("Y")?> Silver Fever, LLC </div>
    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->


<!-- <div class="cats-menu-trigger">
    <a id="my-button">Menu</a>
</div> -->


<style>
    /* li.hidden {
        display: none;
    }
    @media screen and (min-width: 48.25em) {
        body:after {
            content: 'large';
            display: none;
        }
    } */
</style>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="<?php echo $url ?>/js/priority-nav.js"></script>
<script src="<?php echo $url ?>/js/scripts.js"></script>

<!-- mmenu scripts -->

<!-- <link rel="stylesheet" href="<?php echo $url ?>/js/mmenu.css">
<script src="<?php echo $url ?>/js/mmenu.polyfills.js"></script>
<script src="<?php echo $url ?>/js/mmenu.js"></script>  

<script>
    var catsMenu = document.querySelector("#woocommerce_product_categories-4");

    if (catsMenu) {
        catsMenu.firstChild.remove();
    }

    var theMenu = new Mmenu(catsMenu.firstElementChild, {
        "extensions": [
            // "pagedim-black",
            "theme-dark"
        ],
        "counters": true
    });

    /* Button Trigger */
    $("#my-button").click(function() {
        theMenu.open();
      });
    
</script>
-->

<?php wp_footer(); ?>


<?php /* Only show Browser Sync on Local Install*/
    $browserSync 			= 'http://silverfever.local';
    $browserSyncHdrs 		= @get_headers($browserSync);
    if ($browserSyncHdrs):
?>

<script id="__bs_script__">
//<![CDATA[
document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace(
    "HOST", location.hostname));
//]]>
</script>

<?php endif; ?>

</body>

</html>