<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<?php get_template_part( 'template-parts/searchfunction');?>
	<section id="primary" class="col-sm-12 col-lg-8">
	<?php

					$curURL = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
					$curURL = $curURL.'&post_type=log';
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					echo '<p><a href="'.$curURL.'" style="display:inline; text-align:right;">この日のログを見る　</a></p>';
					the_archive_description( '<h3 class="archive-description">', '</h3>' );

				?>
		<main id="main" class="site-main" role="main">
			
		<?php
		if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
