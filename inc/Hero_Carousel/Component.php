<?php
/**
 * WP_Rig\WP_Rig\hero_carousel\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Hero_Carousel;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Customize_Manager;
use function add_action;
use function add_filter;
use function add_panel;
use function is_admin;
use function get_theme_mod;
use function apply_filters;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function remove_filter;
use function is_feed;
use function is_preview;
use function wp_kses_hair;
use WP_Customize_Image_Control;

/**
 * Class for managing lazy-loading images.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'hero_carousel';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_hero_carousel' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_hero_carousel( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('hero_carousel_settings_section',
		[
			'title'          => 'Hero Carousel Section'
		  ]);

		//adding setting for Hero Carousel text area
  $wp_customize->add_setting('hero_carousel_toggle',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);

  $wp_customize->add_setting('carousel_img_settings',
  [
	'default' => ''
]);

  $wp_customize->add_control('hero_carousel_toggle',
  [
	  'description' => esc_html__( 'Display Hero Carousel menu bar in desktop view : **IMPORTANT**, if you select this option, you must RELOAD the Customizer for the new Carousel Images Section to be viewable' ),
	  'label' => __( 'Hero Carousel Bar' ),
      'section' => 'header_image',
      'priority' => 5, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Carousel' ),
		 'heroCarousel' => __( 'Yes Carousel' ),
  ]
  ]);

  if (get_theme_mod( 'hero_carousel_toggle') != null) : {
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'carousel_img_select', [
		'label' => 'Edit My Image',
		'settings'  => 'carousel_img_settings',
		'section'   => 'hero_carousel_settings_section'
	 ] ));
  }
endif;


	}

}



