<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! has_header_image() ) {
	return;
}

?>
<?php if (null != get_theme_mod( 'hero_background_color')) : { ?>
<style scoped>
	.header-image {
		background: <?php echo get_theme_mod( 'hero_background_color'); ?>;
	}
	</style>
<?php } endif;?>
<figure class="header-image">
<?php the_header_image_tag(); ?>
</figure><!-- .header-image -->
