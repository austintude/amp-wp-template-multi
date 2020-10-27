<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>

<!-- <div class="titleTagWrapper">
	<h1 class="site-title">
		<?php the_title(); ?>
	</h1>
	<h2 class="tagline">
	</h2>
</div> -->

<div class="titleTagWrapper">
	<div class="heroText">
	<!-- <img src="<?php echo $kwvh_logo['url']; ?>" alt="<?php echo $kwvh_logo['alt']; ?>"/> -->
	<h1 class="site-title">
		<?php the_title(); ?>
	</h1>
</div><!-- heroText -->

<?php $hero_information = new \WP_Query( array( 'post_type' => 'hero_information', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $hero_information->have_posts() ) : $hero_information->the_post();
		$kwvh_logo	= get_field('kwvh_logo');
		// $site_title	= get_field('site_title');
		// $site_title_background_image	= get_field('site_title_background_image');
		// $call_letters	= get_field('call_letters');
		// $call_number	= get_field('call_number');
		// $call_number_plus	= get_field('call_number_plus');
		// $call_number_background_image	= get_field('call_number_background_image');
		?>

	<div class="heroButtons">
	<?php $listenliveloop = new \WP_Query( array( 'post_type' => 'listen_live', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

	<?php while( $listenliveloop->have_posts() ) : $listenliveloop->the_post();
$listen_live_tx			= get_field('listen_live_tx');
$listen_live_link			= get_field('listen_live_link');
$donate_txt			= get_field('donate_txt');
$donate_link			= get_field('donate_link');
$listen_live_x			= get_field('listen_live_x');
$listen_live_x_link			= get_field('listen_live_x_link');
$listen_live_x_onoff			= get_field('listen_live_x_onoff');

			?>
		<div class="listenLive">
			<button>
				<a href="<?php echo $listen_live_link; ?>" target="_blank" rel=”noreferrer”>
			<?php echo $listen_live_tx; ?>
</a>
			</button>
			</div><!-- listenLive -->
			<?php if ($listen_live_x_onoff == 1) { ?>
			<div class="listenLive kwvhX">
			<button>
				<a href="<?php echo $listen_live_x_link; ?>" target="_blank" rel=”noreferrer”>
			<?php echo $listen_live_x; ?>
</a>
			</button>

</div><!-- listenLive -->
			<?php } ?>
<?php endwhile;  wp_reset_query(); ?>

<div class="donateNow">
	<button>
	<a href="<?php echo $donate_link; ?>">
			<?php echo $donate_txt; ?>
</a>
	</button>

</div><!-- donateNow -->
</div>
</div>
<?php endwhile;  wp_reset_query(); ?>


</div><!-- .site-branding -->
