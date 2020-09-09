<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
	<main id="primary" class="site-main">
	<?php echo get_theme_mod( 'sample_default_textarea', 'blah' ); ?>
	<?php the_content(); ?>
	<?php
			get_template_part( 'template-parts/content/blocka' );
		?>
	<!-- <?php $specialloop = new \WP_Query( array( 'post_type' => 'specials', 'orderby' => 'post_id', 'order' => 'ASC' ) );
 $specialloop->the_post();
$special_title	= get_field('special_title');
?>
<?php if( $special_title ): ?>
	<?php
			get_template_part( 'template-parts/content/block4' );
		?>
		<?php endif; ?> -->
	<?php
			get_template_part( 'template-parts/content/block2' );
		?>
	<?php
			get_template_part( 'template-parts/content/block1' );
		?>

		<?php
			get_template_part( 'template-parts/content/block3a' );
		?>
	</main><!-- #primary -->
<?php
get_footer();
