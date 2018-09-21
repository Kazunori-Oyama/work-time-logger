<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="Wordpress Technical Support" alt="Bootstrap Wordpress Theme"><?php echo esc_html__('Bootstrap Wordpress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>

			var array = [];
			var sum = 0;
			var workTimes = jQuery('.workTime');
			for (i=0; i<workTimes.length; i++){
				workTimes[i] = workTimes[i].innerHTML;
				workTimes[i] = Number(workTimes[i]);
				sum = sum+workTimes[i];
			};
			console.log(sum);
			// sum = toString(sum);
			document.getElementById('totalTime').innerHTML = sum+"min";
			
			var totalAmount = sum*80;

			document.getElementById('totalAmount').innerHTML = totalAmount.toLocaleString()+"円";

			


</script>
</body>
</html>