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
$tagline			= get_field('tagline');

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'none';">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://cdn.ampproject.org">
	<!-- AMP Analytics --><script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>


	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Begin "Facebook Pixel for AMP" || Help center -->
<!-- Insert in Settings->HTML/CSS->Body -->
<!-- IN:20200120-09-3 -->
<amp-analytics type="facebookpixel" id="facebook-pixel">
<script type="application/json">
{
    "vars": {
        "pixelId": "570168077230923"
    },
    "triggers": {
        "trackPageview": {
            "on": "visible",
            "request": "pageview"
        },
        "formSubmit": {
            "on": "amp-form-submit-success",
            "request": "event",
            "vars": {
            "eventName": "form-submission"
            }
        },
        "buttonClick1": {
        "selector":".ctaButton",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "Learn More X button click"
            }
		},
		"buttonClick2": {
        "selector":".asideListItem",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "List Item in Aside ServicesTestimonialsPortfolioFindUs button click"
            }
        },
		"buttonClick3": {
        "selector":".btn-lg",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "lets do this button click"
            }
        },
		"buttonClick4": {
        "selector":".amp-wp-enforced-sizes",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "Footer image click"
            }
        }
    }
}
</script>
</amp-analytics>
<!-- End "Facebook Pixel for AMP" || Help center -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
	<?php get_template_part( 'template-parts/header/custom_page-header' ); ?>
		<?php get_template_part( 'template-parts/header/custom-page-branding' ); ?>


		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
