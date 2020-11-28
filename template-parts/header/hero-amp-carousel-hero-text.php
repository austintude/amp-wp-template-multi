


 <!-- ## Autoplay -->
  <!-- The `autoplay` attribute (`type="slides"` only) advances the slide to the next slide without user interaction, by default it will advance a slide in 5000 millisecond intervals (5 seconds) and can be overridden by the `delay` attribute.  -->
  <!-- <div class="showOnDesktop">
	  <h1>Pickle</h1> -->
  <amp-carousel width="1600" height="500" layout="intrinsic" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay" media="(min-width: 48.1em)">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_h1 = get_field('hero_carousel_h1');
$hero_carousel_h2 = get_field('hero_carousel_h2');

$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$hero_carousel_button_text = get_field('hero_carousel_button_text');
$hero_carousel_button_color = get_field('hero_carousel_button_color');
$hero_carousel_button_text_color = get_field('hero_carousel_button_text_color');
$hero_carousel_button_link = get_field('hero_carousel_button_link');
$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$cta_lightbox_toggle	= get_field('cta_lightbox_toggle');
$cta_unique_id	= get_field('cta_unique_id');
?>
  <div>
	<h1  class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	<?php echo $hero_carousel_h1; ?>
	  </h1>
	  <h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	  <?php echo $hero_carousel_h2; ?>
	</h2>


<?php  if( $hero_carousel_button_text != null ): { ?>
	<div class="heroButtons oneHeroButton  <?php echo get_theme_mod( 'hero_cta_grid_area', '' ); ?>Hero">
<div class="ctaHero">
<div class="ctaButtonLink">
<?php  if( $cta_lightbox_toggle != 0 ): { ?>

	<button class="btn btn-lg btn-danger" on="tap:my-lightbox<?php echo $cta_unique_id; ?>" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</button>
			<amp-lightbox id="my-lightbox<?php echo $cta_unique_id; ?>" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox<?php echo $cta_unique_id; ?>.close" role="button" tabindex="0">

      <iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $hero_carousel_button_link; ?>">
     </iframe>
    </div>
  </amp-lightbox>
  <?php }
else : ?>
			<button class="btn btn-lg btn-danger noLightBox" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;" ><a href="<?php echo $hero_carousel_button_link; ?>" style="color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</a></button>
<?php
endif;
?>

		</div>
</div>
</div>
		<?php
}
endif;
?>

	  </div>
	  <?php endwhile; wp_reset_query(); ?>

	</amp-carousel>



	<amp-carousel width="1600" height="500" layout="intrinsic" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay" media="(max-width: 48em) and (min-width: 26.5rem)">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_h1 = get_field('hero_carousel_h1');
$hero_carousel_h2 = get_field('hero_carousel_h2');

$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$hero_carousel_button_text = get_field('hero_carousel_button_text');
$hero_carousel_button_color = get_field('hero_carousel_button_color');
$hero_carousel_button_text_color = get_field('hero_carousel_button_text_color');
$hero_carousel_button_link = get_field('hero_carousel_button_link');
$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$cta_lightbox_toggle	= get_field('cta_lightbox_toggle');
$cta_unique_id	= get_field('cta_unique_id');
?>
  <div>
	<h1  class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	<?php echo $hero_carousel_h1; ?>
	  </h1>
	  <h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	  <?php echo $hero_carousel_h2; ?>
	</h2>


<?php  if( $hero_carousel_button_text != null ): { ?>
	<div class="heroButtons oneHeroButton  <?php echo get_theme_mod( 'hero_cta_grid_area', '' ); ?>Hero">
<div class="ctaHero">
<div class="ctaButtonLink">
<?php  if( $cta_lightbox_toggle != 0 ): { ?>

	<button class="btn btn-lg btn-danger" on="tap:my-lightbox<?php echo $cta_unique_id; ?>" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</button>
			<amp-lightbox id="my-lightbox<?php echo $cta_unique_id; ?>" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox<?php echo $cta_unique_id; ?>.close" role="button" tabindex="0">

      <iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $hero_carousel_button_link; ?>">
     </iframe>
    </div>
  </amp-lightbox>
  <?php }
else : ?>
			<button class="btn btn-lg btn-danger noLightBox" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;" ><a href="<?php echo $hero_carousel_button_link; ?>" style="color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</a></button>
<?php
endif;
?>

		</div><!-- ctaButtonLink -->
</div> <!-- ctaHero -->
</div>
		<?php
}
endif;
?>

	  </div>
	  <?php endwhile; wp_reset_query(); ?>

	</amp-carousel>


	<!-- Show on Mobile -->
	<amp-carousel width="1600" height="1200" layout="intrinsic" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay" media="(max-width: 26.49em)">
  <?php $herocarouselloop = new \WP_Query( array( 'post_type' => 'hero_carousel_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $herocarouselloop->have_posts() ) : $herocarouselloop->the_post();

// vars
$hero_carousel_h1 = get_field('hero_carousel_h1');
$hero_carousel_h2 = get_field('hero_carousel_h2');

$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$hero_carousel_button_text = get_field('hero_carousel_button_text');
$hero_carousel_button_color = get_field('hero_carousel_button_color');
$hero_carousel_button_text_color = get_field('hero_carousel_button_text_color');
$hero_carousel_button_link = get_field('hero_carousel_button_link');
$hero_carousel_text_shadow_color = get_field('hero_carousel_text_shadow_color');
$hero_carousel_text_color = get_field('hero_carousel_text_color');
$cta_lightbox_toggle	= get_field('cta_lightbox_toggle');
$cta_unique_id	= get_field('cta_unique_id');
?>
  <div>
	<h1  class="site-title <?php echo get_theme_mod( 'hero_title_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	<?php echo $hero_carousel_h1; ?>
	  </h1>
	  <h2 class="tagline <?php echo get_theme_mod( 'hero_tagline_grid_area', '' ); ?>Hero" style="color: <?php echo $hero_carousel_text_color, '#fff'; ?>; text-shadow: 1px 1px <?php echo $hero_carousel_text_shadow_color, '#000'; ?>;">
	  <?php echo $hero_carousel_h2; ?>
	</h2>


<?php  if( $hero_carousel_button_text != null ): { ?>
	<div class="heroButtons oneHeroButton  <?php echo get_theme_mod( 'hero_cta_grid_area', '' ); ?>Hero">
<div class="ctaHero">
<div class="ctaButtonLink">
<?php  if( $cta_lightbox_toggle != 0 ): { ?>

	<button class="btn btn-lg btn-danger" on="tap:my-lightbox<?php echo $cta_unique_id; ?>" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</button>
			<amp-lightbox id="my-lightbox<?php echo $cta_unique_id; ?>" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox<?php echo $cta_unique_id; ?>.close" role="button" tabindex="0">

      <iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $hero_carousel_button_link; ?>">
     </iframe>
    </div>
  </amp-lightbox>
  <?php }
else : ?>
			<button class="btn btn-lg btn-danger noLightBox" role="button" tabindex="0" style="background:<?php echo $hero_carousel_button_color; ?>; color:<?php echo $hero_carousel_button_text_color; ?>;" ><a href="<?php echo $hero_carousel_button_link; ?>" style="color:<?php echo $hero_carousel_button_text_color; ?>;"><?php echo $hero_carousel_button_text; ?> »</a></button>
<?php
endif;
?>

		</div><!-- ctaButtonLink -->
</div> <!-- ctaHero -->
</div>
		<?php
}
endif;
?>

	  </div>
	  <?php endwhile; wp_reset_query(); ?>

	</amp-carousel>


<!-- </div> -->

	<!-- </div>
</amp-carousel> -->
