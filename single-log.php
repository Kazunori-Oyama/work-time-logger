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
        <table>
        <tr><th>開始時刻</th><th>終了時刻</th><th>作業時間</th><th>作業者</th><th>案件</th><th>作業分類</th><th>作業内容</th><th>Todays Task</th><th>進捗コメント</th><th>達成率</th></tr>

        

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-log', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            </table>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
