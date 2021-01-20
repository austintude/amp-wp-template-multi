<?php
/**
 * WP_Rig\WP_Rig\theme_mods\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Theme_Mods;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Customize_Manager;
use function add_action;
use function add_filter;
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
		return 'theme_mods';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_theme_mods' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_theme_mods( WP_Customize_Manager $wp_customize ) {
		$theme_mods_choices = [
			'theme_mods'    => __( 'Header-Features on (default)', 'wp-rig' ),
			'no-theme_mods' => __( 'Header-Features off', 'wp-rig' ),
		];




  $wp_customize->add_setting('hero_video_select',
  [
	'default' => '10',
      'transport' => 'refresh',
  ]);

  $wp_customize->add_setting('site_font_selection_1',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('site_font_selection_2',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('footer_url_setting',
  [
   'default'        => '',
  ]);

  $wp_customize->add_setting('hero_placement_select',
  [
	'default' => '0',
      'transport' => 'refresh',
  ]);

  $wp_customize->add_setting('hero_video',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('hero_clip_select',
  [
	'default' => '10',
      'transport' => 'refresh',
  ]);

  $wp_customize->add_control('site_font_selection_google_toggle',
  [
	  'description' => esc_html__( 'Toggle on/off Google font changes from default fonts :' ),
	  'label' => __( 'Google Fonts' ),
      'section' => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'Use Default' ),
		 'changeFonts' => __( 'Change Defaults' ),
  ]
  ]);


$wp_customize->add_control('hero_video_select',
  [
	  'description' => esc_html__( 'Display YouTube video overlay on or instead of Hero image :' ),
	  'label' => __( 'Display YouTube video' ),
      'section' => 'header_image',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '1' => __( 'No Video' ),
		 '5' => __( 'Video ONLY (no Hero Image)' ),
		 '8' => __( 'Video & Hero Image' ),
  ]
  ]);
  $wp_customize->add_control('hero_placement_select',
  [
	  'description' => esc_html__( 'Display Customized Hero on:' ),
      'section' => 'header_image',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
		'10' => __( 'None' ),
		'5' => __( 'Front-Page Only' ),
         '3' => __( 'All Pages' ),
         '1' => __( 'All Posts' ),
		 '2' => __( 'All Pages and Posts' ),
		 '0' => __('Front-Page and Posts Only')
  ]
  ]);
$wp_customize->add_control('hero_video',
  [
	  'description' => esc_html__( 'YouTube video to overlay on Hero image on:' ),
	  'label' => __( 'YouTube video ID' ),
      'section' => 'header_image',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text'
  ]);
$wp_customize->add_control('hero_clip_select',
  [
	  'description' => esc_html__( 'Display Customized Clip Path overlay on Hero image on:' ),
	  'label' => __( 'Customized Clip Path' ),
      'section' => 'header_image',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
		 '10' => __( 'Default Clip' ),
		 '5' => __( 'Wave Clip' ),
         '1' => __( 'No Clip' )
  ]
  ]);


  $wp_customize->add_setting('hero_cta_grid_area',
  [
	'default' => '10',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_control('hero_cta_grid_area',
[
  'label' => __( 'CTAs in Hero Location' ),
  'section' => 'header_image',
  'priority' => 20, // Optional. Order priority to load the control. Default: 10
  'type' => 'select',
      'choices' => [ // Optional.
         'left' => __( 'Left Grid' ),
         'center' => __( 'Center Grid' ),
		 'right' => __( 'Right Grid' )
	  ]
]);


	}
}

