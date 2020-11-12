<?php
/**
 * WP_Rig\WP_Rig\multi_language\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Multi_Language;

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
		return 'multi_language';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_multi_language' ] );
	}
	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_multi_language( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section('multi_language_section',
[
	'title'          => 'Multi Language Section'
  ]);

  $wp_customize->add_setting('translation_locale_1',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('translation_locale_2',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);
  $wp_customize->add_setting('translation_locale_3',
  [
	'default' => '',
      'transport' => 'refresh',
  ]);

$wp_customize->add_control('translation_locale_1',
  [
	  'description' => esc_html__( 'Display secondary top menu bar in desktop view :' ),
	  'label' => __( 'Secondary Top Bar' ),
      'section' => 'multi_language_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'Just English' ),
		 'es-mx' => __( 'Spanish' ),
		 'fr' => __( 'French' ),
		 'it' => __( 'Italian' ),
  ]
  ]);
  $wp_customize->add_control('translation_locale_2',
  [
	  'description' => esc_html__( 'Display secondary top menu bar in desktop view :' ),
	  'label' => __( 'Secondary Top Bar' ),
      'section' => 'multi_language_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'Just English' ),
		 'es-mx' => __( 'Spanish' ),
		 'fr' => __( 'French' ),
		 'it' => __( 'Italian' ),
  ]
  ]);
  $wp_customize->add_control('translation_locale_3',
  [
	  'description' => esc_html__( 'Display secondary top menu bar in desktop view :' ),
	  'label' => __( 'Secondary Top Bar' ),
      'section' => 'multi_language_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'select',
      'choices' => [ // Optional.
         '' => __( 'Just English' ),
		 'es-mx' => __( 'Spanish' ),
		 'fr' => __( 'French' ),
		 'it' => __( 'Italian' ),
  ]
  ]);

	}
}

