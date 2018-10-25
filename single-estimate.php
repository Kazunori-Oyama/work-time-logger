<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="container-fluid">
		<main id="main" class="site-main" role="main">
        <table class="table">
        <tr><th>項目</th><th>人日</th><th>数量</th><th>合計</th></tr>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-estimate', get_post_format() );


		endwhile; // End of the loop.
		?>
            </table>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
