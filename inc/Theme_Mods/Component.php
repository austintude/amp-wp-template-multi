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
  $wp_customize->add_setting('secondary_top_bar_toggle',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('top_bar_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('top_bar_anchor_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('top_bar_background_color',
  [
	'default' => '#333',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);

  $wp_customize->add_setting('hero_placement_select',
  [
	'default' => '10',
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



  $wp_customize->add_setting('main_margins',
  [
	'default' => '2',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('main_margins_mobile',
  [
	'default' => '2',
      'transport' => 'refresh',
  ]);


  $wp_customize->add_control( 'main_margins',
  [
	'type' => 'number',
	'section' => 'theme_options', // Add a default or your own section
	'label' => __( '"Desktop" Left & Right Margins' ),
	'description' => __( 'Set the size of the Left & Right margins wrapping. *side note- if you add margins here but wish to remove them for special blocks, add the class fullWidth to the block css and tag on the same margin number you add here. For example, fullWidth4 if you select a margin width of 4 here.' )
  ]
);
$wp_customize->add_control( 'main_margins_mobile',
  [
	'type' => 'number',
	'section' => 'theme_options', // Add a default or your own section
	'label' => __( '"Mobile" Left & Right Margins' ),
	'description' => __( 'Set the size of the Left & Right margins wrapping. *side note- if you add margins here but wish to remove them for special blocks, add the class fullWidth to the block css and tag on the same margin number you add here. For example, fullWidth4 if you select a margin width of 4 here.' )
  ]
);

$wp_customize->add_control('secondary_top_bar_toggle',
  [
	  'description' => esc_html__( 'Display secondary top menu bar in desktop view :' ),
	  'label' => __( 'Secondary Top Bar' ),
      'section' => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Top Bar' ),
		 'navSecondaryInc' => __( 'Yes Top Bar' ),
  ]
  ]);
  $wp_customize->add_control('top_bar_text_color',
  [
	'label' => __( 'top_bar Text Color' ),
	'section' => 'theme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('top_bar_anchor_text_color',
  [
	'label' => __( 'top_bar Anchor Text Color' ),
	'section' => 'theme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('top_bar_background_color',
  [
	'label' => __( 'top_bar Background Color' ),
	'section' => 'theme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
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
		 '2' => __( 'All Pages and Posts' )
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
