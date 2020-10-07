<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$hero_tagline_grid_area = get_theme_mod( 'hero_tagline_grid_area');
$hero_title_grid_area = get_theme_mod( 'hero_title_grid_area');
?>

<div class="site-branding <?php echo get_theme_mod( 'secondary_top_bar_toggle', '' ); ?>">
<?php if (null != get_theme_mod( 'secondary_top_bar_toggle') ) : { ?>
<div id="secondary-top-bar" style="background:<?php echo get_theme_mod( 'top_bar_background_color', '#333' ); ?>; color: <?php echo get_theme_mod( 'top_bar_text_color', '#fff' ); ?>;">
        &nbsp;
	</div>
<?php } endif; ?>
<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div class="titleTagWrapper heroText<?php echo get_theme_mod( 'hero_text_grid_toggle', '' ); ?>">
<?php if( $hero_tagline_grid_area == $hero_title_grid_area ): { ?>
<div class="<?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>gridHero">
<?php } endif; ?>

<h1 class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo get_theme_mod( 'hero_text_color', '#fff' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;">
		<?php the_title(); ?>
	</h1>
	<h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo get_theme_mod( 'hero_tagline_text_color', '#f7f7f7' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;">
	<?php echo $tagline; ?>
	</h2>
		<?php if(  $hero_tagline_grid_area == $hero_title_grid_area ): { ?>
</div>
<?php } endif; ?>
		<?php
					get_template_part( 'template-parts/content/ctaHero' );
			?>
</div>
</div><!-- .site-branding -->
