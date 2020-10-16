<?php
/**
 * WP_Rig\WP_Rig\pop_up_box\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Pop_Up_Box;

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
		return 'pop_up_box';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_pop_up_box' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_pop_up_box( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('pop_up_box_settings_section',
[
	'title'          => 'Pop Up Box Section'
  ]);
// Create our panels

$wp_customize->add_section( 'pop_up_options10', [
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => 'add_theme_support',
	'title'          => __('Pop Up Options'),
	'section' => 'pop_up_box_options',
] );


// Create our sections

$wp_customize->add_section( 'pop_up_box_options',[
	'title'             => __('Pop Up Toggle' ),
	'priority'          => 1,
	'sub_section'             => 'pop_up_box_settings_section',
] );

  //adding setting for Pop Up text area
  $wp_customize->add_setting('pop_up_box_toggle',
  [
	'default' => '',
	  'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('pop_up_box_title_setting',
  [
   'default'        => 'Stay in touch!',
  ]);
  $wp_customize->add_setting('pop_up_box_sub_title_setting',
  [
   'default'        => 'Sign up for news and events emails.',
  ]);
  $wp_customize->add_setting('pop_up_box_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('pop_up_box_anchor_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('pop_up_box_background_color',
  [
	'default' => '#333',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('pop_up_box_img',
  [
   'default'        => '',
   'transport' => 'refresh'
  ]);

  $wp_customize->add_setting('pop_up_box_form_url',
  [
   'default'        => '',
   'transport' => 'refresh'
  ]);
  $wp_customize->add_setting('pop_up_box_form_url_mobile',
  [
   'default'        => 'Paste the same url here if not different',
   'transport' => 'refresh'
  ]);


$wp_customize->add_control('pop_up_box_toggle',
  [
	  'description' => esc_html__( 'Display Pop-Up Box on page load :' ),
	  'label' => __( 'Pop Up Box' ),
      'section' => 'pop_up_box_settings_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Pop Up Box' ),
		 'navSecondaryInc' => __( 'Yes Pop Up Box' ),
  ]
  ]);
  $wp_customize->add_control( 'pop_up_box_text_size',
  [
	'type' => 'number',
	'section' => 'pop_up_box_settings_section', // Add a default or your own section
	'label' => __( 'Pop Up Box Text Size' ),
	'description' => __( 'Set the size of the pop up box text.' )
  ]);
$wp_customize->add_control('pop_up_box_title_setting',
  [
   'label'   => 'Pop Up Box Title',
	'section' => 'pop_up_box_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('pop_up_box_sub_title_setting',
  [
   'label'   => 'Pop Up Box Sub Title',
	'section' => 'pop_up_box_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('pop_up_box_text_color',
  [
	'label' => __( 'pop_up_box Text Color' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('pop_up_box_anchor_text_color',
  [
	'label' => __( 'pop_up_box Anchor Text Color' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('pop_up_box_background_color',
  [
	'label' => __( 'pop_up_box Background Color' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('pop_up_box_img',
  [
	'label'   => __( 'pop_up_box Image URL' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
   'type'    => 'text',
   'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('pop_up_box_form_url',
  [
	'label'   => __( 'pop_up_box form URL' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
   'type'    => 'text',
   'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('pop_up_box_form_url_mobile',
  [
	'label'   => __( 'pop_up_box form URL for mobile' ),
	'section' => 'pop_up_box_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
   'type'    => 'text',
   'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
	}

}



