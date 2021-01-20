<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

?>


<nav id="site-navigation" tabindex="0" class="main-navigation nav--toggle-sub nav--toggle-small <?php echo get_theme_mod( 'secondary_top_bar_toggle', '' ); ?>" aria-label="<?php esc_attr_e( 'Main menu', 'wp-rig' ); ?>"
	<?php
	if ( wp_rig()->is_amp() ) {
		?>
		[class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small <?php echo get_theme_mod( "secondary_top_bar_toggle", "" ); ?>' "
		<?php
	}
	?>
>
	<?php
	if ( wp_rig()->is_amp() ) {
		?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
		<?php
	}
	?>


	<button class="menu-toggle menuBottom" aria-label="<?php esc_attr_e( 'Open menu', 'wp-rig' ); ?>" aria-controls="primary-menu" aria-expanded="false"
		<?php
		if ( wp_rig()->is_amp() ) {
			?>
			on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
			[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
			<?php
		}
		?>
	>

		<?php esc_html_e( 'Menu', 'wp-rig' ); ?>

	</button>


	<?php if (null != get_theme_mod( 'secondary_top_bar_toggle') ) : { ?>
<div class="secondary-menu-container" style="color:<?php echo get_theme_mod( 'top_bar_anchor_text_color', '#fff' ); ?>; ">
<?php $contact_items_loop = new \WP_Query( array( 'post_type' => 'contact_items', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $contact_items_loop->have_posts() ) : $contact_items_loop->the_post();
$contact_us_phone	= get_field('contact_us_phone');
$contact_us_phone_link	= get_field('contact_us_phone_link');
$contact_us_street	= get_field('contact_us_street');
$contact_us_street_suite	= get_field('contact_us_street_suite');
$contact_us_city	= get_field('contact_us_city');
$contact_us_zip	= get_field('contact_us_zip');
$contact_us_state	= get_field('contact_us_state');
$social_link_dets	= get_field('social_link_dets');
?>

<ul id="leftRow" >
<?php  if( $contact_us_phone != null ):  { ?>
	<li>
		<a href="tel:<?php echo $contact_us_phone_link; ?>">
					<!-- <span class="strong" property="telephone"> -->
			<?php echo $contact_us_phone; ?>
			<!-- </span> -->
		</a>
	</li>
<?php }
endif;
?>
	<li>
		<!-- <span class="strong" property="address" typeof="PostalAddress"> -->
			<!-- <span property="streetAddress"> -->
				<?php echo $contact_us_street; ?>
				<?php  if( $contact_us_phone != null ):  { ?> <?php echo $contact_us_street_suite; ?> <?php } endif; ?>
			<!-- </span> -->
			<!-- <span property="addressLocality"> -->
				<?php echo $contact_us_city; ?>
			<!-- </span> -->
			,
			<!-- <span property="addressRegion"> -->
				<?php echo $contact_us_state; ?>
			<!-- </span> -->
				<?php echo $contact_us_zip; ?>
		<!-- </span> -->
	</li>
</ul>
<?php  if( $social_link_dets != null ):  { ?>
<ul id="rightRow">
<?php while (have_rows('social_link_dets')) : the_row();

// vars
$social_link = get_sub_field('social_link');
$social_icon = get_sub_field('social_icon');
$social_label = get_sub_field('social_label');
?>
	<li>
		<a href="<?php echo $social_link; ?>" target="_blank" rel="noopener" arial-label="<?php echo $social_label; ?>">
		<?php  if( $social_icon == null ):  { ?>
			<?php  if( $social_label != null ):  { ?><?php echo $social_label; ?><?php } endif; ?>
		<?php } endif; ?>
		<?php  if( $social_icon != null ):  { ?><img src="<?php echo $social_icon['url']; ?>" layout="intrinsic" alt="<?php echo $social_icon['alt']; ?>" aria-label="<?php echo $social_link; ?>"><?php } endif; ?>
		</a>
	</li>
	<?php endwhile; ?>
</ul>
<?php } endif; ?>
<?php endwhile; wp_reset_query(); ?>
	</div>
	<!-- end .secondary-menu-container -->
	<?php } endif; ?>
	<div class="primary-menu-container">
		<div class="closeX" role="button" tabindex="10" on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
			[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'" >
			X
	</div>
		<?php wp_rig()->display_primary_nav_menu( [ 'menu_id' => 'primary-menu' ] ); ?>
	</div>
</nav><!-- #site-navigation -->
