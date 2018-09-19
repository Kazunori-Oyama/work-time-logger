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
		
		<tr>
		<td><?php the_field('startTime');?></td>
		<td><?php the_field('endTime');?></td>
		<td>あとでJS書いて計算</td>
		<td><?php the_author();?></td>
		<td><?php the_tags(); ?></td>
		<td>親カテゴリ？</td>
		<td><?php the_category(' '); ?></td>
		<td><?php the_field('todaysTask');?></td>
		<td><?php the_field('comment');?></td>
		<td><?php the_field('progress');?>%</td>
		</tr>
		
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
