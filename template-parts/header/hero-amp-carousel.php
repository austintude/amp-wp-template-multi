
<!-- <amp-carousel height="600"
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">



	<div> -->
	<!-- <img src="<?php echo get_theme_mod('carousel_img_settings'); ?>" /> -->
 <!-- ## Autoplay -->
  <!-- The `autoplay` attribute (`type="slides"` only) advances the slide to the next slide without user interaction, by default it will advance a slide in 5000 millisecond intervals (5 seconds) and can be overridden by the `delay` attribute.  -->
  <amp-carousel width="1600" height="1200" layout="intrinsic" type="slides" autoplay delay="2000" role="region" aria-label="Carousel with autoplay">
	<div><img amp-fx="fade-in" data-duration="1200ms" src="<?php echo get_theme_mod('carousel_img_settings'); ?>" />
	<h3 class="blue-box">
        This is a blue box.
      </h3>
	  </div>
	<img amp-fx="fade-in" data-duration="1200ms" src="<?php echo get_theme_mod('carousel_img_settings'); ?>" />
	<img amp-fx="fade-in" data-duration="1200ms" src="<?php echo get_theme_mod('carousel_img_settings'); ?>" />
	</amp-carousel>
	<!-- </div>
</amp-carousel> -->
