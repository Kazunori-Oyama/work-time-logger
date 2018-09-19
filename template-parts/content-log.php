<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
		<tr><th>開始時刻</th><th>終了時刻</th><th>作業時間</th><th>作業者</th><th>案件</th><th>作業分類</th><th>作業内容</th><th>Todays Task</th><th>進捗コメント</th><th>達成率</th></tr>
		<tr><td><?php the_field('startTime');?></td><td><?php the_field('endTime');?></td></tr>
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif;?>
	<tr>
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</tr><!-- .entry-content -->

	
		<?php wp_bootstrap_starter_entry_footer(); ?>
	
</article><!-- #post-## -->
