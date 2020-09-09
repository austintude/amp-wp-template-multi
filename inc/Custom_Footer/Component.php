<?php
/**
 * WP_Rig\WP_Rig\custom_footer\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Custom_Footer;

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
		return 'custom_footer';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_custom_footer' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_custom_footer( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('footer_settings_section',
[
	'title'          => 'Footer Text Section'
  ]);
  //adding setting for footer text area
  $wp_customize->add_setting('footer_text_select',
  [
	'default' => '10',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('footer_text_setting',
  [
   'default'        => 'Default Text For Footer Section',
  ]);
  $wp_customize->add_setting('footer_url_setting',
  [
   'default'        => '',
  ]);

  $wp_customize->add_setting('footer_text_size',
  [
	'default' => '.8',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('footer_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('footer_anchor_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('footer_background_color',
  [
	'default' => '#333',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);

  $wp_customize->add_control( 'footer_text_size',
  [
	'type' => 'number',
	'section' => 'footer_settings_section', // Add a default or your own section
	'label' => __( 'Footer Text Size' ),
	'description' => __( 'Set the size of the footer text.' )
  ]
);
  $wp_customize->add_control('footer_text_select',
  [
	  'description' => esc_html__( 'Display Customized Footer on:' ),
      'section' => 'footer_settings_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '10' => __( 'None' ),
         '1' => __( 'All Pages' ),
         '5' => __( 'All Posts' ),
		 '3' => __( 'All Pages and Posts' )
  ]
  ]);
  $wp_customize->add_control('footer_text_setting',
  [
   'label'   => 'Footer Text Here',
	'section' => 'footer_settings_section',
   'type'    => 'textarea',
  ]);



  $wp_customize->add_control('footer_url_setting',
  [
   'label'   => 'Footer Image URL',
	'section' => 'footer_settings_section',
   'type'    => 'text',
  ]);

  $wp_customize->add_control('footer_text_color',
  [
	'label' => __( 'Footer Text Color' ),
	'section' => 'footer_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('footer_anchor_text_color',
  [
	'label' => __( 'Footer Anchor Text Color' ),
	'section' => 'footer_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('footer_background_color',
  [
	'label' => __( 'Footer Background Color' ),
	'section' => 'footer_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
	}

}



