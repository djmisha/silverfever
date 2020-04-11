<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>
			<div class="copyright">&copy; <?=date("Y")?> Silver Fever, LLC <div class="ssl"><i class="fas fa-lock"></i> Secure SSL Encryption</div></div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

	
</div><!-- #page -->


<style>
	li.hidden {
	  display: none;
	}
	/*.menu li a {
	  display: block;
	  padding: 1em 0.5em;
	}
	*/

	@media screen and (min-width: 48.25em) {
	  body:after {
	        content: 'large';
	        display: none;
	    }
	    #toggler {
	      /*display: none;*/
	    }
	}
</style>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script src="wp-content/themes/storefront-child-theme/scripts/scripts.js"></script>

<?php wp_footer(); ?>


<?php /* Only show Browser Sync on Local Install*/
	$browserSync 			= 'http://silverfever.local';
	$browserSyncHdrs 		= @get_headers($browserSync);
	if($browserSyncHdrs):
?>
		
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

<? endif; ?>




</body>
</html>
