<?php
/**
 * Template Name: Custom Page Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('custom-page');

wp_rig()->print_styles( 'wp-rig-content' );

?>

<main id="primary" class="site-main _mobileMargin<?php echo get_theme_mod( 'main_margins_mobile', '0' ); ?> _desktopMargin<?php echo get_theme_mod( 'main_margins', '0' ); ?>">
		<?php

		while ( have_posts() ) {
			the_post();

			the_content();
		}

		?>
	</main><!-- #primary -->

<?php
get_footer();
