<?php
/**
 * WP_Rig\WP_Rig\website_performance_enhancements\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Website_Performance_Enhancements;

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
		return 'website_performance_enhancements';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_website_performance_enhancements' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_website_performance_enhancements( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('website_performance_enhancements_settings_section',
		[
			'title'          => 'Website Performance Enhancements Section'
		  ]);

		//adding setting for Website Performance Enhancements text area

  $wp_customize->add_setting('website_performance_enhancements_toggle',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('hero_image_url',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('image_url_1',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('image_url_2',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('image_url_3',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('image_url_4',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_control('website_performance_enhancements_toggle',
  [
	  'description' => esc_html__( 'Activate Website Performance Enhancements' ),
	  'label' => __( 'Website Performance Enhancements Bar' ),
      'section' => 'website_performance_enhancements_settings_section',
      'priority' => 5, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'No Enhancements' ),
		 'true' => __( 'Yes Enhancements' ),
  ]
  ]);
  $wp_customize->add_control('hero_image_url',
  [
   'label'   => 'Hero Image URL',
   'description' => esc_html__( 'Copy/Paste the Hero Image URL (or first image used in the hero carousel) here for added Largest Contentful Paint (LCP) lift - if you are using an image optimizer/plugin, you may need to grab this from the browser inspect tools. If a srcset is used, preload the mobile version.' ),
	'section' => 'website_performance_enhancements_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('image_url_1',
  [
   'label'   => 'Above Fold Image URL 1',
   'description' => esc_html__( 'Copy/Paste the Image URL (images that appear above the fold should be added) here for added Largest Contentful Paint (LCP) lift - if you are using an image optimizer/plugin, you may need to grab this from the browser inspect tools. If a srcset is used, preload the mobile version.' ),
	'section' => 'website_performance_enhancements_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('image_url_2',
  [
   'label'   => 'Above Fold Image URL 2',
   'description' => esc_html__( 'Copy/Paste the Image URL (images that appear above the fold should be added) here for added Largest Contentful Paint (LCP) lift - if you are using an image optimizer/plugin, you may need to grab this from the browser inspect tools. If a srcset is used, preload the mobile version.' ),
	'section' => 'website_performance_enhancements_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('image_url_3',
  [
   'label'   => 'Above Fold Image URL 3',
   'description' => esc_html__( 'Copy/Paste the Image URL (images that appear above the fold should be added) here for added Largest Contentful Paint (LCP) lift - if you are using an image optimizer/plugin, you may need to grab this from the browser inspect tools. If a srcset is used, preload the mobile version.' ),
	'section' => 'website_performance_enhancements_settings_section',
   'type'    => 'text',
  ]);
  $wp_customize->add_control('image_url_4',
  [
   'label'   => 'Above Fold Image URL 4',
   'description' => esc_html__( 'Copy/Paste the Image URL (images that appear above the fold should be added) here for added Largest Contentful Paint (LCP) lift - if you are using an image optimizer/plugin, you may need to grab this from the browser inspect tools. If a srcset is used, preload the mobile version.' ),
	'section' => 'website_performance_enhancements_settings_section',
   'type'    => 'text',
  ]);
	  }
	}



