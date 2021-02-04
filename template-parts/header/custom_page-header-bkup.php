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
<?php if (null != get_theme_mod( 'hero_background_color')) : { ?>
<style scoped>
	.header-image {
		background: <?php echo get_theme_mod( 'hero_background_color'); ?>;
	}
	</style>
<?php } endif;?>
<?php if( get_theme_mod( 'hero_clip_select') < 4 ): { ?>
<figure class="header-image no_clip">

<?php }
else : ?>
<figure class="header-image">

	<?php  ?>
	<?php endif; ?>
	<?php if( get_theme_mod( 'hero_video_select') > 4 ): { ?>


		<div class="heroVideo">
		<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_theme_mod( 'hero_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php
	}
	else { ?>

		<amp-youtube width="480" height="270" layout="responsive" data-videoid="<?php echo get_theme_mod( 'hero_video'); ?>" autoplay>
  </amp-youtube>
<?php }  ?>
</div>


<?php if ( get_theme_mod( 'hero_video_select') > 7 ): {  ?>
<div class="heroImg">
<?php the_post_thumbnail(); ?>
		</div>
		<?php }
endif; ?>
<?php }
else : {?>
<div class="heroImg">
		<?php the_header_image_tag(); ?>
		</div>
		<?php }
endif; ?>

</figure><!-- .header-image -->
