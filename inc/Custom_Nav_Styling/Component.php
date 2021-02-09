<?php
/**
 * WP_Rig\WP_Rig\custom_nav_styling\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Custom_Nav_Styling;

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
		return 'custom_nav_styling';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_custom_nav_styling' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_custom_nav_styling( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('custom_nav_styling_settings_section',
[
	'title'          => 'Custom Nav Styling Section'
  ]);
// Create our panels




// Create our sections
$wp_customize->add_setting('secondary_top_bar_toggle',
[
  'default' => '',
	'transport' => 'refresh',
]);
$wp_customize->add_setting('top_bar_font_size',
  [
	'default' => '',
      'transport' => 'refresh'
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
  $wp_customize->add_setting('nav_bar_background_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('main_nav_text_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('main_nav_current_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('current_gradient_color_start',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('current_gradient_color_end',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('drop_down_background_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('drop_down_hover_background_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('drop_down_hover_text_color',
  [
	'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
$wp_customize->add_setting('top_bar_style_options',
  [
	'default' => '',
	  'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('secondary_top_bar_on_mobile',
  [
	'default' => '',
	  'transport' => 'refresh',
  ]);

  $wp_customize->add_setting('tablet_menu_font_size',
  [
   'default'        => '',
   'transport' => 'refresh',
  ]);

  $wp_customize->add_control('secondary_top_bar_toggle',
  [
	  'description' => esc_html__( 'Display secondary top menu bar in desktop view :' ),
	  'label' => __( 'Secondary Top Bar in Desktop' ),
      'section' => 'custom_nav_styling_settings_section',
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Top Bar' ),
		 'navSecondaryInc' => __( 'Yes Desktop Top Bar' ),
  ]
  ]);
  $wp_customize->add_control('secondary_top_bar_on_mobile',
  [
	  'description' => esc_html__( 'Display a *reduced version* of secondary top menu bar in mobile view :' ),
	  'label' => __( 'Secondary Top Bar in Mobile' ),
      'section' => 'custom_nav_styling_settings_section',
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Top Bar' ),
		 'navSecondaryIncMobile' => __( 'Yes Mobile Top Bar' ),
  ]
  ]);
  $wp_customize->add_control('top_bar_style_options',
  [
	  'description' => esc_html__( 'Modify Nav and Menu like font family, sizes and colors' ),
	  'label' => __( 'Modify Nav and Menu Styles' ),
      'section' => 'custom_nav_styling_settings_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Modifications' ),
		 'global_mods' => __( 'Yes Modify' ),
  ]
  ]);
  $wp_customize->add_control( 'top_bar_font_size',
  [
	'type' => 'number',
	'section' => 'custom_nav_styling_settings_section', // Add a default or your own section
	'label' => __( 'Top Nav Bar Font-Size adjustment' )
	  ]
);
  $wp_customize->add_control('top_bar_text_color',
  [
	'label' => __( 'top_bar Text Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('top_bar_anchor_text_color',
  [
	'label' => __( 'top_bar Anchor Text Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('top_bar_background_color',
  [
	'label' => __( 'top_bar Background Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('nav_bar_background_color',
  [
	'label' => __( 'Nav Bar Background Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('main_nav_text_color',
  [
	'label' => __( 'Main Nav Text Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('main_nav_current_color',
  [
	'label' => __( 'Main Nav Current Selected Page Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('current_gradient_color_start',
  [
	'label' => __( 'Current Selected Page Gradient Underline Starting Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('current_gradient_color_end',
  [
	'label' => __( 'Current Selected Page Gradient Underline Ending Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('drop_down_background_color',
  [
	'label' => __( 'Main Nav Dropdown Background Color' ),
	'section' => 'thecustom_nav_styling_settings_sectionme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('drop_down_hover_background_color',
  [
	'label' => __( 'Main Nav Dropdown Hover Background Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('drop_down_hover_text_color',
  [
	'label' => __( 'Main Nav Dropdown Text Hover Color' ),
	'section' => 'custom_nav_styling_settings_section',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type' => 'color',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
  ]);
  $wp_customize->add_control('tablet_menu_font_size',
  [
	'type' => 'number',
	'section' => 'custom_nav_styling_settings_section', // Add a default or your own section
	'label' => __( 'Customize Main Menu Font Size on Tablet' ),
	'description' => __( 'Set the font-size for tablet devices to better fit the smaller screen.' )
	  ]);
	}

}



