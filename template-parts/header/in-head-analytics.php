<?php $analyticsloop = new \WP_Query( array( 'post_type' => 'analytics', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
<?php while( $analyticsloop->have_posts() ) : $analyticsloop->the_post();
$extra_tracking_scripts	= get_field('extra_tracking_scripts');
?>
<?php if ($extra_tracking_script != null): ?>
	<?php while (have_rows('extra_tracking_scripts')) : the_row();
// vars
$extra_tracking_script = get_sub_field('extra_tracking_script');
?>
	<?php echo $trigger_selector; ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
