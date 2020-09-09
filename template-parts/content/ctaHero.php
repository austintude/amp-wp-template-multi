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
$ctahero_cta_text	= get_field('ctahero_cta_text');
$ctahero_cta_url	= get_field('ctahero_cta_url');
$cta_loading_image	= get_field('cta_loading_image');
$cta_in_hero	= get_field('cta_in_hero');
$cta_color	= get_field('cta_color');
$cta_text_color	= get_field('cta_text_color');
$cta_unique_id	= get_field('cta_unique_id');
$cta_count = 0;
?>
<?php  if( $cta_in_hero != '0' ): { ?>

	<div class="ctaHero">
<div class="ctaButtonLink">


			<button class="btn btn-lg btn-danger" on="tap:my-lightbox<?php echo $cta_unique_id; ?>" role="button" tabindex="0" style="background:<?php echo $cta_color; ?>; color:<?php echo $cta_text_color; ?>;"><?php echo $ctahero_cta_text; ?> »</button>
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
		</div><!-- ctaButton -->
</div> <!-- ctaHero -->
		<?php
}
endif;
?>
		<?php endwhile; wp_reset_query(); ?>
</div><!-- close oneHeroButton / heroButtons -->


