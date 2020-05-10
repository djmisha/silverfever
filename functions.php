<?php
/*
    Silverfever Child Theme 
*/

/**
 * Loads parent and child themes' style.css
 */
function child_theme_enqueue_styles() {
    $parent_style = 'ochild_theme_parent_style';
    $parent_base_dir = 'storefront';

    wp_enqueue_style( $parent_style,
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( $parent_base_dir ) ? wp_get_theme( $parent_base_dir )->get('Version') : ''
    );

    wp_enqueue_style( $parent_style . '_child_style',
        get_stylesheet_directory_uri() . '/style.css?v=423',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


/* Google Analytics */

function hook_analytics() {
    ?>
       <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-5551508-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-5551508-1');
    </script>
    <?php
}

add_action('wp_head', 'hook_analytics');



/* Product Pages Infinite Scroll */

function hook_infinite_scroll() {
    ?>
    
    <!-- <script async src="https://silverfever.com/wordpress/wp-content/themes/storefront-child-theme/scripts/infinite-scroll.pkgd.min.js"></script> -->

    <script>
    //  (function($) {
//        $(function() {//

//          $('.archive .products').infiniteScroll({
//            path: '.next',
//            append: '.products',
//            history: false,
//          });//

//        }); 
//      })(jQuery);
    </script>
  
    <?php
}

add_action('wp_footer', 'hook_infinite_scroll');



/*==========================================================
=            Disable the WordPress Core Emoji's            =
==========================================================*/

function disable_emojis_and_scrips() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	wp_deregister_script( 'wp-embed' ); // Disable wp-embed.js   
  remove_action( 'homepage', 'storefront_featured_products', 40 );
  

  wp_deregister_script( 'wp-embed' ); // Disable wp-embed.js   

  /*CONTROLL HOMEPAGE SECTIONS*/

  // remove_action( 'homepage', 'storefront_homepage_content', 10 );
  // remove_action( 'homepage', 'storefront_product_categories', 20 );
  // remove_action( 'homepage', 'storefront_recent_products', 30 );
  // remove_action( 'homepage', 'storefront_featured_products', 40 );
  remove_action( 'homepage', 'storefront_popular_products', 50 );
  remove_action( 'homepage', 'storefront_on_sale_products', 60 );
  // remove_action( 'homepage', 'storefront_best_selling_products', 70 );

}

add_action( 'init', 'disable_emojis_and_scrips' );


// MODIFIED HEADERS

function cyb_add_last_modified_header($headers) {

    //Check if we are in a single post of any type (archive pages has not modified date)
    if( is_singular() || is_page() ) {
        $post_id = get_queried_object_id();
        if( $post_id ) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id) );
        }
    }
}

add_action('template_redirect', 'cyb_add_last_modified_header');


/* Homepage Controll */
/* Homepage Controll */
/* Homepage Controll */


// remove_action( 'homepage', 'storefront_recent_products', 50 );

if ( ! function_exists( 'storefront_product_categories' ) ) {
    /**
     * Display Product Categories
     * Hooked into the `homepage` action in the homepage template
     *
     * @since  1.0.0
     * @param array $args the product section args.
     * @return void
     */
    function storefront_product_categories( $args ) {

        if ( storefront_is_woocommerce_activated() ) {

            $args = apply_filters( 'storefront_product_categories_args', array(
                'limit'             => 18,
                'columns'           => 6,
                'child_categories'  => 0,
                'orderby'           => 'name',
                'title'             => __( 'Shop by Category', 'storefront' ),
            ) );

            $shortcode_content = storefront_do_shortcode( 'product_categories', apply_filters( 'storefront_product_categories_shortcode_args', array(
                'number'  => intval( $args['limit'] ),
                'columns' => intval( $args['columns'] ),
                'orderby' => esc_attr( $args['orderby'] ),
                'parent'  => esc_attr( $args['child_categories'] ),
            ) ) );

            /**
             * Only display the section if the shortcode returns product categories
             */
            if ( false !== strpos( $shortcode_content, 'product-category' ) ) {

                echo '<section class="storefront-product-section storefront-product-categories" aria-label="' . esc_attr__( 'Product Categories', 'storefront' ) . '">';

                do_action( 'storefront_homepage_before_product_categories' );

                echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

                do_action( 'storefront_homepage_after_product_categories_title' );

                echo $shortcode_content;

                do_action( 'storefront_homepage_after_product_categories' );

                echo '</section>';

            }
        }
    }
}


