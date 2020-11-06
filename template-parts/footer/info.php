<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="footer-info" style="background:<?php echo get_theme_mod( 'footer_background_color', '#333' ); ?>; color: <?php echo get_theme_mod( 'footer_text_color', '#fff' ); ?>;">

<?php if( get_theme_mod( 'footer_text_select') < 4 ): { ?>
	<div class="baseBlock" style="background:<?php echo get_theme_mod( 'footer_background_color', '#333' ); ?>; color: <?php echo get_theme_mod( 'footer_text_color', '#fff' ); ?>;">


	<?php if( get_theme_mod( 'footer_map_toggle') != null ): { ?>
	<?php $contactfooterloop = new \WP_Query( array( 'post_type' => 'contact_items', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $contactfooterloop->have_posts() ) : $contactfooterloop->the_post();

			$business_name			= get_field('business_name');
			$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_street_suite			= get_field('contact_us_street_suite');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_datetime_extra			= get_field('contact_us_open_datetime_extra');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_open_days_times_extra			= get_field('contact_us_open_days_times_extra');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$google_map			= get_field('google_map');
			$social_link_dets	= get_field('social_link_dets');
			$contact_footer_background_color	= get_field('contact_footer_background_color');
			$contact_footer_text_color	= get_field('contact_footer_text_color');
			$contact_footer_link_color	= get_field('contact_footer_link_color');
			$left_footer_grid_title	= get_field('left_footer_grid_title');
			$middle_footer_grid_title	= get_field('middle_footer_grid_title');
			$right_footer_grid_title	= get_field('right_footer_grid_title');
			?>


	<div class="topBlock desktopPadding<?php echo get_theme_mod( 'main_margins', '0' ); ?>" style="background:<?php echo $contact_footer_background_color; '#333';?>; color: <?php echo $contact_footer_text_color; '#fff' ?>; a {color: <?php echo $contact_footer_link_color; '#fff'; ?>;}">
		<div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
			<div class="softBlock">
		<div class="blockTitle">
		<h4><?php echo $left_footer_grid_title; ?></h4>
</div>


        <div id="googleMap">
        <iframe width="600" height="450" layout="responsive"
			  sandbox="allow-scripts allow-same-origin allow-popups"
			  frameborder="0"
			  title="Google Map"
              src="<?php echo $google_map; ?>">

  </iframe>
</div>
</div>
<div class="softBlock">

</div>
</div>
<div class="middleBlock">
	<div class="blockTitle">
		<h4><?php echo $middle_footer_grid_title; ?></h4>
</div>

<div class="blockImages">
<section id="physical">

<div id="address">
	<address property="address" typeof="PostalAddress">
	<h5>
	<?php echo $business_name; ?>
	<br>
	<span property="streetAddress"><?php echo $contact_us_street; ?>
<br>
<?php echo $contact_us_street_suite; ?></span>

	<span property="addressLocality"><?php echo $contact_us_city; ?></span>,

	<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?>
</h5>
</address>
</div>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>" style="color: <?php echo $contact_footer_link_color; '#fff'; ?>;"><?php echo $contact_us_phone; ?></a></span>
		</div>
</section>
<div id="hours">

			<h5>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime; ?>"><?php echo $contact_us_open_days_times; ?></time>
				<br>
				<?php if ($contact_us_open_datetime_extra != null) { ?>

				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime_extra; ?>"><?php echo $contact_us_open_days_times_extra; ?></time>
				<br>
				<?php } ?>
				<?php if( $contact_us_closed != null ): { ?>

				 <?php echo $contact_us_closed; ?> - Closed
				</h5>
				<?php } endif;?>

        </div>



</div>
</div>
<div class="rightBlock">
<div class="blockTitle">
		<h4><?php echo $right_footer_grid_title; ?></h4>
</div>
<div class="blockImages">
<?php  if( $social_link_dets != null ):  { ?>
	<div id="businessSocial">
<?php while (have_rows('social_link_dets')) : the_row();

// vars
$social_link = get_sub_field('social_link');
$social_icon = get_sub_field('social_icon');
$social_label = get_sub_field('social_label');
?>

		<div id="socialIcon<?php echo $social_label; ?>">
		<a href="<?php echo $social_link; ?>" target="_blank" rel="noopener" arial-label="<?php echo $social_label; ?>" style="color: <?php echo $contact_footer_link_color; '#fff'; ?>;">
		<?php  if( $social_icon == null ):  { ?>
			<?php  if( $social_label != null ):  { ?><?php echo $social_label; ?><?php } endif; ?>
		<?php } endif; ?>
		<?php  if( $social_icon != null ):  { ?><img src="<?php echo $social_icon['url']; ?>" layout="intrinsic" alt="<?php echo $social_icon['alt']; ?>" aria-label="<?php echo $social_link; ?>"><?php } endif; ?>
		</a>
		</div>
		<?php endwhile; wp_reset_query(); ?>
		</div>
<?php } endif; ?>

</div>
<?php endwhile;  wp_reset_query(); ?>
		</div>
<?php } endif; ?>

</div>


		<div id="themeLogo" aria-label="custom logo link">
		<img src="<?php echo get_theme_mod( 'footer_url_setting', '' ); ?>">
	</div>
	<div class="builtBy" style="body {font-size:auto} .builtBy {font-size:<?php echo get_theme_mod( 'footer_text_size', '.8' ); ?>rem;} .builtBy a{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} .builtBy a:hover {color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} .builtBy a:active{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} .builtBy a:focus{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} .builtBy a:visited{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} ">
		<?php echo get_theme_mod( 'footer_text_setting', '' ); ?>
	</div>
</div>
<?php }
else : ?>

	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>" rel="noopener">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Theme Proudly powered by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Theme: %s by the AMP Like A Pro &amp; Free AMP Templates.', 'wp-rig' ), '<a href="' . esc_url( 'https://free-amp-templates.github.io/' ) . '">AMP Like A Pro</a>' );

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
	<?php  ?>
	<?php endif; ?>

</div><!-- .site-info -->
