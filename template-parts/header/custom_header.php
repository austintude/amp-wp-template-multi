<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! has_header_image() ) {
	return;
}

?>

<?php if( get_theme_mod( 'hero_clip_select') < 4 ): { ?>
<figure class="header-image no_clip heroImage<?php echo get_theme_mod( 'hero_placement_select'); ?>">

<?php }
elseif ( get_theme_mod( 'hero_clip_select') < 6 )  : { ?>
<figure class="header-image wave heroImage<?php echo get_theme_mod( 'hero_placement_select'); ?>">
<?php }
else : ?>
<figure class="header-image polygon heroImage<?php echo get_theme_mod( 'hero_placement_select'); ?>">
	<?php  ?>
	<?php endif; ?>
	<?php if( get_theme_mod( 'hero_video_select') > 4 ): { ?>


		<div class="heroVideo">
		<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_theme_mod( 'hero_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; " allowfullscreen></iframe>
<?php
	}
	else { ?>

		<amp-youtube width="480" height="270" layout="responsive" data-videoid="<?php echo get_theme_mod( 'hero_video'); ?>" loop=1 data-param-modestbranding="1" data-param-rel="1" autoplay>
  </amp-youtube>
<?php }  ?>
</div>


<?php if ( get_theme_mod( 'hero_video_select') > 7 ): {  ?>
<div class="heroImg">
<?php if( get_theme_mod( 'hero_placement_select') < 10 ): { ?>
		<?php the_header_image_tag(); ?>
<?php } else : ?>
	<?php the_post_thumbnail(); ?>
<?php endif; ?>
		</div>
		<?php }
endif; ?>
<?php }
else : {?>
<div class="heroImg">
<?php if( get_theme_mod( 'hero_placement_select') < 6 ): { ?>
		<?php the_header_image_tag(); ?>
<?php } else : ?>
	<?php the_post_thumbnail(); ?>
<?php endif; ?>
		</div>
		<?php }
endif; ?>

</figure><!-- .header-image -->
