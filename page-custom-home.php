<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Custom Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<h2>Anushka Handbags</h2>
		<h2>Liquid Metal Jewerly</h2>
		<h2>Karma Good Charma Bracelents</h2>
		<h2>Footnotes</h2>

		<ul class="products">
			<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 3,
					'category' => 143,
					// 'tax_query'             => array(
					//         array(
					//             'taxonomy'  => 'product_category',
					//             'field'     => 'term_id',
					//             'terms'     => array('156'),
					//             'operator'  => 'IN',
					//         )
					//    )
					);
				$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
				} else {
					echo __( 'No products found' );
				}
				wp_reset_postdata();

			?>
		</ul><!--/.products-->


		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
