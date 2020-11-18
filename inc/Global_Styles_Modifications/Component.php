<?php
/**
 * WP_Rig\WP_Rig\global_styles_modifications\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Global_Styles_Modifications;

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
		return 'global_styles_modifications';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_global_styles_modifications' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_global_styles_modifications( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('global_styles_modifications_settings_section',
[
	'title'          => 'Global Styles Modifications Section'
  ]);
// Create our panels

$wp_customize->add_section( 'global_styles', [
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => 'add_theme_support',
	'title'          => __('Global Styles Modifications'),
	'section' => 'global_styles_modifications_options',
] );


// Create our sections
$wp_customize->add_setting('global_styles_options',
  [
	'default' => '',
	  'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('highlight-font-family',
  [
   'default'        => 'Crimson Text',
  ]);
  $wp_customize->add_setting('global_font_family',
  [
   'default'        => 'Roboto Condensed',
  ]);
  $wp_customize->add_setting('global-font-color',
  [
   'default'        => '#333',
  ]);
  $wp_customize->add_setting('color-theme-primary',
  [
   'default'        => '#e36d60',
  ]);
  $wp_customize->add_setting('color-theme-secondary',
  [
   'default'        => '#41848f',
  ]);
  $wp_customize->add_setting('color-link',
  [
   'default'        => ' #0073aa',
  ]);
  $wp_customize->add_setting('color-link-visited',
  [
   'default'        => '#333',
  ]);
  $wp_customize->add_setting('color-link-active',
  [
   'default'        => ' #00a0d2',
  ]);
  $wp_customize->add_setting('global-font-size',
  [
   'default'        => '20',
  ]);
  $wp_customize->add_setting('global-font-line-height',
  [
   'default'        => '1.4',
  ]);
  $wp_customize->add_setting('content-width',
  [
   'default'        => '45',
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
  $wp_customize->add_control('global_styles_options',
  [
	  'description' => esc_html__( 'Modify Global Styles like font family, sizes and colors : (Please note, that many of these items - font-size, color, etc - are manually determined within the block so may not change as a result of these modifications)' ),
	  'label' => __( 'Modify Global Styles' ),
      'section' => 'global_styles_modifications_settings_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Modifications' ),
		 'global_mods' => __( 'Yes Modify' ),
  ]
  ]);
  $wp_customize->add_control('highlight-font-family',
  [
   'label'   => 'Highlight Font Family',
   'description'   => 'Type font name in full Capitalized Words With Spaces (where needed)',
	'section' => 'global_styles_modifications_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('global_font_family',
  [
   'label'   => 'Global Font Family',
   'description'   => 'Type font name in full Capitalized Words With Spaces (where needed)',
	'section' => 'global_styles_modifications_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control( 'global-font-size',
  [
	'type' => 'number',
	'section' => 'global_styles_modifications_settings_section', // Add a default or your own section
	'label' => __( 'Global Font Text Size' ),
	'description' => __( 'Set the default size of the font across the entire site.' )
  ]);
  $wp_customize->add_control( 'global-font-line-height',
  [
	'type' => 'number',
	'section' => 'global_styles_modifications_settings_section', // Add a default or your own section
	'label' => __( 'Global Font Line Height' ),
	'description' => __( 'Set the default line height of the font across the entire site.' )
  ]);
  $wp_customize->add_control( 'content-width',
  [
	'type' => 'number',
	'section' => 'global_styles_modifications_settings_section', // Add a default or your own section
	'label' => __( 'Global Content Width' ),
	'description' => __( 'Set the default width of the content across the entire site.' )
  ]);

  $wp_customize->add_control( 'main_margins',
  [
	'type' => 'number',
	'section' => 'global_styles_modifications_settings_section', // Add a default or your own section
	'label' => __( '"Desktop" Left & Right Margins' ),
	'description' => __( 'Set the size of the Left & Right margins for tablet and desktop devices. *side note- if you add margins here but wish to remove them for special blocks, add the class fullWidth to the element in the Additional CSS field in the corresponding Gutenberg block.' )
  ]
);
$wp_customize->add_control( 'main_margins_mobile',
  [
	'type' => 'number',
	'section' => 'global_styles_modifications_settings_section', // Add a default or your own section
	'label' => __( '"Mobile" Left & Right Margins' ),
	'description' => __( 'Set the size of the Left & Right margins for mobile devices. *side note- if you add margins here but wish to remove them for special blocks, add the class fullWidth to the element in the Additional CSS field in the corresponding Gutenberg block.' )
  ]
);
  $wp_customize->add_control('global-font-color',
  [
	'label' => __( 'Global Font Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	  $wp_customize->add_control('color-theme-primary',
  [
	'label' => __( 'Global Primary Font Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	  $wp_customize->add_control('color-theme-secondary',
  [
	'label' => __( 'Global Secondary Font Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	  $wp_customize->add_control('color-link',
  [
	'label' => __( 'Global Link Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	  $wp_customize->add_control('color-link-visited',
  [
	'label' => __( 'Global Visited Link Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	  $wp_customize->add_control('color-link-active',
  [
	'label' => __( 'Global Active Link Color' ),
	'section' => 'global_styles_modifications_settings_section',
	'type' => 'color'
	  ]);
	}

}



