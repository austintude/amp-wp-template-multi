


 <!-- ## Autoplay -->
  <!-- The `autoplay` attribute (`type="slides"` only) advances the slide to the next slide without user interaction, by default it will advance a slide in 5000 millisecond intervals (5 seconds) and can be overridden by the `delay` attribute.  -->
  <amp-carousel width="1600" height="1200" layout="intrinsic" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_h1 = get_field('hero_carousel_h1');
$hero_carousel_h2 = get_field('hero_carousel_h2');
$hero_carousel_button_text = get_field('hero_carousel_button_text');
$hero_carousel_button_color = get_field('hero_carousel_button_color');
$hero_carousel_button_text_color = get_field('hero_carousel_button_text_color');
$hero_carousel_button_link = get_field('hero_carousel_button_link');
$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
?>
  <div>
	<h1  class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	<?php echo $hero_carousel_h1; ?>
	  </h1>
	  <h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	  <?php echo $hero_carousel_h2; ?>
	</h2>
	  </div>
	  <?php endwhile; wp_reset_query(); ?>
	</amp-carousel>

	<!-- </div>
</amp-carousel> -->
