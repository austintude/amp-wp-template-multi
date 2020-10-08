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



<?php if ( get_theme_mod( 'hero_video_select') > 7 ): {  ?>
<div class="heroImg">
<?php if( get_theme_mod( 'hero_placement_select') == 2 || get_theme_mod( 'hero_placement_select') == 1 ) : { ?>
		<?php the_header_image_tag(); ?>
<?php } else : ?>
	<?php the_post_thumbnail(); ?>
<?php endif; ?>
		</div>

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
