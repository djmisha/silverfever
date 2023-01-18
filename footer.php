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
<div class="trust-badges">
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-ship.svg" alt="30-Days No-Questions Return Policy"> </div>
        <div>
            <p> <strong>30-Days No-Questions Return Policy</strong><br /> If you are not completely satisfied with your
                purchase, you can claim a 100% refund. Only shipping and delivery costs will be retained. </p>
        </div>
    </div>
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-return.svg" alt="Easy Exchange Policy"> </div>
        <div>
            <p> <strong>Easy Exchange Policy</strong><br /> We welcome exchanges, if you prefer an exchange,
                please feel free to choose another color, size or item from our offerings. </p>
        </div>
    </div>
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-ssl.svg" alt="Safe Shopping, Secure Payments"> </div>
        <div>
            <p> <strong>Safe Shopping, Secure Payments</strong> <br />SSL Enabled Secure Checkout. You can shop safe and secure with us. </p>
        </div>
    </div>
    <div class="trust-badge">
        <div class="badge-image"> <img src="<?php echo $url ?>/images/icon-family.svg" alt="Family Owned & Opperated"> </div>
        <div>
            <p> <strong>Family Owned & Opperated</strong> <br />Silver Fever is a family owned and opperated business from San Diego, California </p>
        </div>
    </div>
</div>
<?php endif; ?>

<?php do_action('storefront_before_footer'); ?>

<div class="order-questions"> 
    <p>
       Questions about your order? Contact Liliya <br> 
       Text or Call <a href="tel+1(858)9227535">(858) 922-7535 </a>
       email <a href="mailto:info@silverfever.com">info@silverfever.com</a>
       <br />
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
        <div class="copyright">&copy; 2002 - <?=date("Y")?> Silver Fever, LLC </div>
    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->


<!-- 
    <div class="splide">
	<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<img src="https://silverfever.com/wordpress/wp-content/uploads/2021/01/slide-4.jpg" alt="slide-homepage" />
			</li>
			<li class="splide__slide">
				<img src="https://silverfever.com/wordpress/wp-content/uploads/2021/01/slide-2.jpg" alt="slide-homepage" />
			</li>
			<li class="splide__slide">
				<img src="https://silverfever.com/wordpress/wp-content/uploads/2021/01/slide-3.jpg" alt="slide-homepage" />
			</li>
            <li class="splide__slide">
				<img src="https://silverfever.com/wordpress/wp-content/uploads/2021/01/slide-1.jpg" alt="slide-homepage" />
			</li>
		</ul>
	</div>
</div>
 -->





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

<!-- slideshow scripts

<?php if (is_front_page()): ?>
    <link rel="stylesheet" href="<?php echo $url ?>/js/splide/css/splide.min.css">
    <script src="<?php echo $url ?>/js/splide/js/splide.min.js"></script>
    <script>
        new Splide( '.splide', {
            type  : 'fade',
            rewind: true,
            lazyLoad: 'nearby',
            autoplay: true,
        } ).mount();
    </script>
<?php endif; ?>
 -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="<?php echo $url ?>/js/priority-nav.js"></script>
<script src="<?php echo $url ?>/js/scripts.js"></script>





<?php wp_footer(); ?>


<?php /* Only show Browser Sync on Local Install*/
    $browserSync 			= 'http://silverfever.local';
    $browserSyncHdrs 		= @get_headers($browserSync);
    if ($browserSyncHdrs):
?>

<script id="__bs_script__">
    //<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    //]]>
</script>

<?php endif; ?>

</body>

</html>
