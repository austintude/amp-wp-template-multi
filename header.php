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

</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/content/analytics' ); ?>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- mzani -->


		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
