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
<div id="mobileTopBar" <?php if (null != get_theme_mod( 'nav_bar_background_color') ) : { ?>style="background:<?php echo get_theme_mod( 'nav_bar_background_color', '' ); ?>;"<?php } endif; ?>>
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div class="titleTagWrapper
<?php if (null != get_theme_mod( 'hero_carousel_toggle') ) : { ?>
	heroTextno_grid
<?php } else : ?>
	heroText<?php echo get_theme_mod( 'hero_text_grid_toggle', '' ); ?>
<?php endif; ?>">
	<?php if( $hero_tagline_grid_area == $hero_title_grid_area ): { ?>
		<div class="<?php echo get_theme_mod( 'hero_title_grid_area', 'center' ); ?>gridHero">
	<?php } endif; ?>
	<?php if (null != get_theme_mod( 'hero_carousel_toggle') ) : { ?>
		<?php
			get_template_part( 'template-parts/header/hero-amp-carousel-hero-text' );
		?>
		<?php echo get_theme_mod( 'hero_clip_select'); ?>

		<?php } else : ?>
			<h1 class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo get_theme_mod( 'hero_text_color', '#fff' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo get_theme_mod( 'hero_tagline_text_color', '#f7f7f7' ); ?>; text-shadow: 1px 1px <?php echo get_theme_mod( 'hero_shadow_color', '#000' ); ?>;"><?php bloginfo( 'description' ); ?></h2>

	<?php endif; ?>

	<?php if(  $hero_tagline_grid_area == $hero_title_grid_area ): { ?>
		</div>
	<?php } endif; ?>
	<?php if (null != get_theme_mod( 'hero_carousel_toggle') ) : { ?>

		<?php } else : ?>
	<?php
					get_template_part( 'template-parts/content/ctaHero' );
			?>
			<?php endif; ?>
	</div>
</div><!-- .site-branding -->
