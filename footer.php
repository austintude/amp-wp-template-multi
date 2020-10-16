<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<?php if (null != get_theme_mod( 'pop_up_box_toggle') ) : { ?>
<amp-state id="magicBox">
    <script type="application/json">
      {
		"invisible": {
          "className": "invisible"
		},
		"visible": {
          "className": "visible"
        },
        "moveLeft": {
          "className": "moveLeft"
        },
        "moveRight": {
          "className": "moveRight"
		},
		"open": {
			"className": "open"
		}
      }
    </script>
  </amp-state>
<section class="animateWrapper">
  <div class="popUpWrapper">
  <div [class]="magicBox.animateBox " class="slideInPopUp moveLeft" style="background:<?php echo get_theme_mod( "pop_up_box_background_color", "auto" ); ?>">
	  <div class="formiFrame">
		  <div class="popUpTitle">
			  <h3><?php echo get_theme_mod( "pop_up_box_title_setting", "Stay in touch!" ); ?></h3>
			  <h4><?php echo get_theme_mod( "pop_up_box_sub_title_setting", "Sign up for news and events emails." ); ?></h4>
	</div>
	<div class="popUpForm">
	<div class="showOnDesktop">
	  <iframe media="(min-width: 641px)" width="200" height="250" scrolling="no"
                            sandbox="allow-scripts allow-same-origin" layout="responsive" allowfullscreen
                            frameborder="0" src="<?php echo get_theme_mod( "pop_up_box_form_url", "" ); ?>">
	</iframe>
	</div>
	<div class="showOnMobile">
	<iframe media="(max-width: 640px)" width="360" height="240" scrolling="no"
                            sandbox="allow-scripts allow-same-origin" layout="responsive" allowfullscreen
                            frameborder="0" src="<?php echo get_theme_mod( "pop_up_box_form_url_mobile", "" ); ?>">
	</iframe>
	</div>
	</div>
	</div>
	<div class="formImage showOnDesktop">
	<img src="<?php echo get_theme_mod( "pop_up_box_img", "" ); ?>" layout="responsive" >

	</div><!-- end formImage -->
  </div>
    <button on="tap:AMP.setState({magicBox: {animateBox: 'slideInPopUp moveLeft', animateBoxclose: 'close visble', animateBoxopen: 'invisible'}})" [class]="magicBox.animateBoxopen " class="open invisible">
    &lt;&lt;
  </button>
  <button on="tap:AMP.setState({magicBox: {animateBox: 'slideInPopUp moveRight', animateBoxopen: 'open visible', animateBoxclose: 'invisible'}})" [class]="magicBox.animateBoxclose " class="close visible">
  X
  </button>
	</div>
  </section>
  <?php } endif; ?>

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
	<div class="moveLeft moveRight invisible visible"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
