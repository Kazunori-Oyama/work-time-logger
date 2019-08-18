<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php $author_name = get_the_author();?>
		
		<tr>
		<td class="date">
		<?php $date = get_the_date('Ymj')?>
		<?php the_time('Y/n/j'); ?>
			<?php echo '<p><a href="'.get_home_url().'/?post_type=post&m='.$date.'" style="display:inline; text-align:right;">';?>
			<?php the_field('startTime');?>
			<span>~</span>
			<?php the_field('endTime');?>
			<?php echo '<i class="far fa-file-alt" title="この日のレポートを見る"></i></a>';?>
		</td>
		<!-- <td class="startTime"></td>
		<td class="endTime"></td> -->
		<td>実働時間：<span class="workTime"><?php the_field('worktime');?></span>min</td>
		<td>予想時間：<?php the_field('preestimate');?>min</td>
		<td class="in-charge"><a href="<?php echo home_url();?>/?post_type=logs&author=<?php echo the_author_meta('ID');?>"><?php echo $author_name;?></a></td>
		<td class="project"><?php echo get_the_term_list($post->ID,'project');?></td>
		<td class="step"><?php echo get_the_term_list($post->ID,'step');?></td>
		<td colspan="4" class="tasks"><?php the_field('todaysTask');?></td>
		<td class="memos"><?php the_field('comment');?></td>
		<!-- <td class=""><?php the_field('progress');?>%</td> -->
		<!-- <td class=""><?php wp_bootstrap_starter_entry_footer(); ?></td> -->
		</tr>
		
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif;?>
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

	
		
	
