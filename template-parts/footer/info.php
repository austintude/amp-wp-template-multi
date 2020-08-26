<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="footer-info" style="background:<?php echo get_theme_mod( 'footer_background_color', '#333' ); ?>; color: <?php echo get_theme_mod( 'footer_text_color', '#fff' ); ?>; a: <?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>; a:hover : <?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>; a:active : <?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>; a:focus : <?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>; a:visited : <?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>; ">
<?php if( get_theme_mod( 'footer_text_select') < 4 ): { ?>
<div class="customFooter<?php echo get_theme_mod( 'footer_url_setting', '' ); ?>">
	<div class="footer<?php echo get_theme_mod( 'footer_url_setting', '' ); ?>">
		<img src="<?php echo get_theme_mod( 'footer_url_setting', '' ); ?>">
	</div>
	<div class="footerText footerTextColor" style="a{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} a:hover {color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} a:active{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} a:focus{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} a:visited{color:<?php echo get_theme_mod( 'footer_anchor_text_color', '#fff' ); ?>;} ">
		<?php echo get_theme_mod( 'footer_text_setting', '' ); ?>
	</div>
</div>
<?php }
else : ?>

	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
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
