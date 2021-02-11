


 <!-- ## Autoplay -->
  <!-- The `autoplay` attribute (`type="slides"` only) advances the slide to the next slide without user interaction, by default it will advance a slide in 5000 millisecond intervals (5 seconds) and can be overridden by the `delay` attribute.  -->
  <amp-carousel width="1600" height="1200" layout="responsive" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_image = get_field('hero_carousel_image');
?>
<?php

/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 */

function awesome_acf_responsive_image($hero_carousel_image,$image_size,$max_width){

	// check the image ID is not blank
	if($hero_carousel_image != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $hero_carousel_image, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $hero_carousel_image, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}

?>
  <div><img data-hero layout="intrinsic" <?php awesome_acf_responsive_image(get_field( 'image_1' ),'thumb-640','640px'); ?> alt="<?php echo $hero_carousel_image['alt']; ?>"/>

	  </div>
	  <?php endwhile; wp_reset_query(); ?>
	</amp-carousel>

	<!-- </div>
</amp-carousel> -->
