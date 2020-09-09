<?php
/**
 * Template part for displaying a post's content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="entry-content">
<?php
	if ( ! is_singular( get_post_type() ) && get_theme_mod( 'archives_use_excerpt' ) ) {
		the_excerpt();
	} else {
		the_content(
			// Same arguments as before.
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-rig' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				get_the_title()
			)
		);
	}

	// Same code as before.
	wp_link_pages(
		[
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-rig' ),
			'after'  => '</div>',
		]
	);
	?>


</div><!-- .entry-content -->
