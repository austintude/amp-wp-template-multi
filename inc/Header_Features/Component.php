<?php
/**
 * WP_Rig\WP_Rig\header_features\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Header_Features;

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
		return 'header_features';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_header_features' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_header_features( WP_Customize_Manager $wp_customize ) {
		$header_features_choices = [
			'header_features'    => __( 'Header-Features on (default)', 'wp-rig' ),
			'no-header_features' => __( 'Header-Features off', 'wp-rig' ),
		];

		$wp_customize->add_setting( 'sample_default_checkbox',
   [
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization'
   ]
);
$wp_customize->add_setting( 'sample_default_textarea',
   [
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   ]
);

$wp_customize->add_control( 'sample_default_checkbox',
   [
      'label' => __( 'Default Checkbox Control', 'ephemeris' ),
      'description' => esc_html__( 'Sample description' ),
      'section'  => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type'=> 'checkbox',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   ],
   [
	'label' => __( 'Default Checkbox Control 2', 'ephemeris 2' ),
	'description' => esc_html__( 'Sample description 2' ),
	'section'  => 'theme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type'=> 'checkbox',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
 ]
);
$wp_customize->add_control( 'sample_default_textarea',
   [
      'label' => __( 'Default Textarea Control' ),
      'description' => esc_html__( 'Sample description' ),
      'section' => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter message...' ),
      ),
   ]
);
	}
}
