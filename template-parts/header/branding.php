<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div class="titleTagWrapper">
		<h1 class="site-title" style="color: <?php echo get_theme_mod( 'hero_text_color', '#fff' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="tagline" style="color: <?php echo get_theme_mod( 'hero_tagline_text_color', '#f7f7f7' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;"><?php bloginfo( 'description' ); ?></h2>
		<?php
					get_template_part( 'template-parts/content/ctaHero' );
			?>
</div>
</div><!-- .site-branding -->
