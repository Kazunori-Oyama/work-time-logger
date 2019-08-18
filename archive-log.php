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
			<table class="table table-striped">
			<tr><td colspan="3" class="font-weight-bold">平均作業時間</td><td id="avgTime"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr><td colspan="3" class="font-weight-bold">作業時間合計</td><td id="totalTime"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			
				<tr <?php if(!(current_user_can('activate_plugins'))){echo 'style="display:none;"';};?>><td colspan="3" class="font-weight-bold">総コスト</td><td id="totalAmount"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr <?php if(!(current_user_can('activate_plugins'))){echo 'style="display:none;"';};?>><th>date</th><th>start</th><th>end</th><th>time</th><th>staff</th><th>project</th><th>category</th><th>Todays Task</th><th>comment</th><th>progress</th><th></th></tr>
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
				get_template_part( 'template-parts/content-log', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		
			</table>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
