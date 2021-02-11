


 <!-- ## Autoplay -->
  <!-- The `autoplay` attribute (`type="slides"` only) advances the slide to the next slide without user interaction, by default it will advance a slide in 5000 millisecond intervals (5 seconds) and can be overridden by the `delay` attribute.  -->
  <amp-carousel width="1600" height="1200" layout="responsive" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_image = get_field('hero_carousel_image');
?>
  <div><img data-hero layout="intrinsic" src="<?php echo $hero_carousel_image['url']; ?>" alt="<?php echo $hero_carousel_image['alt']; ?>"/>

	  </div>
	  <?php endwhile; wp_reset_query(); ?>
	</amp-carousel>

	<!-- </div>
</amp-carousel> -->
