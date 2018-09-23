<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="container-fluid">
	<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_field( 'estimate' );
				?>
		<main id="main" class="site-main" role="main">
        
			<table class="table table-striped">
			<tr><th>作業日</th><th>開始時刻</th><th>終了時刻</th><th>作業時間</th><th>作業者</th><th>案件</th><th>作業分類</th><th>Todays Task</th><th>進捗コメント</th><th>達成率</th><th></th></tr>
		<?php
		if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while (have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-log', get_post_format() );

			endwhile;

			the_posts_navigation();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		<tr><td colspan="3" class="font-weight-bold">作業時間合計</td><td id="totalTime"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td colspan="3" class="font-weight-bold">総コスト</td><td id="totalAmount"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

			</table>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
