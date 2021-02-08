<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>


	<?php $analyticsloop = new \WP_Query( array( 'post_type' => 'analytics', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

	<?php while( $analyticsloop->have_posts() ) : $analyticsloop->the_post();
$google_tag_manager_id	= get_field('google_tag_manager_id');
$facebook_pixel_id	= get_field('facebook_pixel_id');
?>
<?php if ($google_tag_manager_id != null || $facebook_pixel_id != null) : ?>
<!-- Google Tag Manager -->
	<script src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js" async="" custom-element="amp-analytics"></script>
	<!-- End Google Tag Manager -->
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
<?php if (null != get_theme_mod( 'site_font_selection_google_toggle')) : { ?>
<link crossorigin="anonymous" rel="stylesheet" id="ampwpmulti-fonts-css" href="https://fonts.googleapis.com/css?family=<?php echo get_theme_mod( 'site_font_selection_1') ?>:ital,wght@1,100..700&family=<?php echo get_theme_mod( 'site_font_selection_2') ?>:400,400i,600,600i&amp;display=swap" type="text/css" media="all">
<?php } endif; ?>
<?php get_template_part( 'template-parts/content/modified_styles' ); ?>
<?php get_template_part( 'template-parts/content/schema' ); ?>
<?php get_template_part( 'template-parts/header/in-head-analytics' ); ?>
<link rel="preload" href="<?php the_header_image_tag(); ?>" as="image">
</head>

<body <?php body_class(); ?>>
<?php	/**
	 * Gets the header images uploaded for the current theme.
	 *
	 * @since 3.2.0
	 *
	 * @return array
	 */
	function get_uploaded_header_images() {
	        $header_images = array();

	        // @todo Caching.
	        $headers = get_posts(
	                array(
	                        'post_type'  => 'attachment',
	                        'meta_key'   => '_wp_attachment_is_custom_header',
	                        'meta_value' => get_option( 'stylesheet' ),
	                        'orderby'    => 'none',
	                        'nopaging'   => true,
	                )
	        );

	        if ( empty( $headers ) ) {
	                return array();
	        }

	        foreach ( (array) $headers as $header ) {
					$url          = esc_url_raw( wp_get_attachment_url( $header->ID ) ); ?>
					<div> <?php
					echo $url;
					?>
					</div>
					<?php
	        }

	        return $header_images;
	}
	?>
<?php get_template_part( 'template-parts/content/analytics' ); ?>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<div>
		<?php echo the_header_image_tag(); ?>
	</div>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- mzani -->


		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
