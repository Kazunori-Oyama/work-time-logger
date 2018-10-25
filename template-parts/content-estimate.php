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
		
<?php if(have_rows('estimate_table')): ?>
<?php while(have_rows('estimate_table')): the_row(); ?>
<?php $unit_name = get_sub_field('unit');
$unit_obj = get_term_by('id',$unit_name,'step');?>
<tr class="unit_row 
<?php $parent_name = get_term_by('id',$unit_obj->parent,'step') ;?> <?php if($parent_name->slug){echo $parent_name->slug;}else{echo 'parent';};?> <?php echo $unit_obj->slug;?>">

	<td class="unit_name"><?php echo $unit_obj->name;?></td>
	<td class="unit_costs"><?php the_sub_field('costs'); ?></td>
	<td class="unit_quantity"><?php the_sub_field('quantity'); ?></td>
	<td class="total_costs"></td>
</tr>

<?php endwhile; ?>
<?php endif; ?>
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
