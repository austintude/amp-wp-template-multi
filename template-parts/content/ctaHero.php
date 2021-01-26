<?php
/**
 * Template part for ctaHero
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<?php $ctalinksloop2 = new \WP_Query( array( 'post_type' => 'cta_links', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $ctalinksloop2->have_posts() ) : $ctalinksloop2->the_post();
$cta_in_hero	= get_field('cta_in_hero');
?>
<?php  if( $cta_in_hero = 1 ): {
	$cta_hero_x = 1;
}
endif;
?>

<?php endwhile; wp_reset_query(); ?>
<?php  if( $cta_hero_x >= 1 ): { ?>
<div class="heroButtons <?php echo get_theme_mod( 'hero_cta_grid_area', '' ); ?>Hero">
<?php }
else : ?>
<div class="oneHeroButton">
	<?php
endif;
?>
<?php $ctalinksloop = new \WP_Query( array( 'post_type' => 'cta_links', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $ctalinksloop->have_posts() ) : $ctalinksloop->the_post();
$cta_text_color = '#fff';
$ctahero_cta_text	= get_field('ctahero_cta_text');
$ctahero_cta_url	= get_field('ctahero_cta_url');
$cta_loading_image	= get_field('cta_loading_image');
$cta_in_hero	= get_field('cta_in_hero');
$cta_color	= get_field('cta_color');
$cta_text_color	= get_field('cta_text_color');
$cta_unique_id	= get_field('cta_unique_id');
$cta_lightbox_toggle	= get_field('cta_lightbox_toggle');
$cta_count = 0;
$custom_button_border_radius	= get_field('custom_button_border_radius');
$button_border_radius_top	= get_field('button_border_radius_top');
$button_border_radius_right	= get_field('button_border_radius_right');
$button_border_radius_bottom	= get_field('button_border_radius_bottom');
$button_border_radius_left	= get_field('button_border_radius_left');
$custom_id = 'customAdjustments-' . get_the_ID();

?>
<?php  if( $cta_in_hero != '0' ): { ?>

	<div class="ctaHero">
<div class="ctaButtonLink">

<?php  if( $cta_lightbox_toggle != 0 ): { ?>
			<button class="btn btn-lg btn-danger" on="tap:my-lightbox<?php echo $cta_unique_id; ?>" role="button" tabindex="0" style="background:<?php echo $cta_color; ?>; color:<?php echo $cta_text_color; ?>;<?php if (null != $custom_button_border_radius) : echo 'border-radius:'; echo $button_border_radius_top; echo 'rem '; echo $button_border_radius_right; echo 'rem '; echo $button_border_radius_bottom; echo 'rem '; echo $button_border_radius_left; echo 'rem;'; endif; ?>"><?php echo $ctahero_cta_text; ?> »</button>
			<amp-lightbox id="my-lightbox<?php echo $cta_unique_id; ?>" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox<?php echo $cta_unique_id; ?>.close" role="button" tabindex="0">

      <amp-iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $ctahero_cta_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <?php }
else : ?>
<?php
$custom_margins_toggle =  get_field('custom_margins_toggle');
$custom_padding_toggle =  get_field('custom_padding_toggle');
$font_adjustment_toggle =  get_field('font_adjustment_toggle');
if ((null != $custom_margins_toggle) || (null != $custom_padding_toggle) || (null != $font_adjustment_toggle)) : {
include get_template_directory() . ('/template-parts/block/acf-style-fields.php'); ?>
<style scoped>
<?php include get_template_directory() . ('/template-parts/block/acf-style-fields/custom-margins-by-class.php'); ?>
	<?php include get_template_directory() . ('/template-parts/block/acf-style-fields/custom-font-adjustments-by-class.php'); ?>
	</style>
<?php } endif;?>
			<button class="btn btn-lg btn-danger noLightBox" role="button" tabindex="0" style="background:<?php echo $cta_color; ?>; color:<?php echo $cta_text_color; ?>;<?php if (null != $custom_button_border_radius) : echo 'border-radius:'; echo $button_border_radius_top; echo 'rem '; echo $button_border_radius_right; echo 'rem '; echo $button_border_radius_bottom; echo 'rem '; echo $button_border_radius_left; echo 'rem;'; endif; ?>" >
			<a href="<?php echo $ctahero_cta_url; ?>" id="<?php echo $custom_id; ?>" style="color:<?php echo $cta_text_color; ?>;"><?php echo $ctahero_cta_text; ?> »</a></button>
<?php
endif;
?>
		</div><!-- ctaButtonLink -->
</div> <!-- ctaHero -->
		<?php
}
endif;
?>
		<?php endwhile; wp_reset_query(); ?>
</div><!-- close oneHeroButton / heroButtons -->


