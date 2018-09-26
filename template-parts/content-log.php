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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<tr>
		<td class="date">
		<?php $date = get_the_date('Ymj')?>
		<?php the_time('Y/n/j'); ?>
			<?php echo '<p><a href="'.get_home_url().'/?post_type=post&m='.$date.'" style="display:inline; text-align:right;">';?>
			
			<?php echo '<i class="far fa-file-alt" title="この日のレポートを見る"></i></a>';?>
		</td>
		<td class="startTime"><?php the_field('startTime');?></td>
		<td class="endTime"><?php the_field('endTime');?></td>
		<td><span class="workTime"><?php the_field('worktime');?></span>min</td>
		<td class="in-charge"><a href="<?php echo home_url();?>/?post_type=logs&author=<?php echo the_author_meta('ID');?>"><?php echo $author_name;?></a></td>
		<td class="project"><?php echo get_the_term_list($post->ID,'project');?></td>
		<td class="step"><?php echo get_the_term_list($post->ID,'step');?></td>
		<td class=""><?php the_field('todaysTask');?></td>
		<td class=""><?php the_field('comment');?></td>
		<td class=""><?php the_field('progress');?>%</td>
		<td></td>
		<td class=""><?php wp_bootstrap_starter_entry_footer(); ?></td>
		</tr>
		<tr>
		<td>予測値</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
		<td>仮データ</td>
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

	
		
	
</article><!-- #post-## -->
