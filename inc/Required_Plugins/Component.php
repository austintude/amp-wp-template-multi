<?php
/**
 * Required Plugins for this theme
 *
 * @package wp_rig
 */

/**
 * Setup suggested plugin system.
 *
 * Include the Austintatious_Design_Plugin_Manager class and add
 * an interface for users to to manage suggested
 * plugins.
 *
 * @since x.x.x
 *
 * @see  Austintatious_Design_Plugin_Manager
 * @link https://https://github.com/austintude/amp-wp-template-multi/inc/Required_Plugins/Component.php
 */
function austintatious_plugin_manager() {

	if ( ! is_admin() ) {
		return;
	}

	/**
	 * Include plugin manager class.
	 *
	 * No other includes are needed. The Austintatious_Design_Plugin_Manager
	 * class will handle including any other files needed.
	 *
	 * If you want to move the "plugin-manager" directory to
	 * a different location within your theme, that's totally
	 * fine; just make sure you adjust this include path to
	 * the plugin manager class accordingly.
	 */
	require_once( get_parent_theme_file_path( '/plugin-manager/class-austintatious-design-plugin-manager.php' ) );

	/*
	 * Setup suggested plugins.
	 *
	 * It's a good idea to have a filter applied to this so your
	 * loyal users running child themes have a way to easily modify
	 * which plugins show as suggested for the site they're setting
	 * up for a client.
	 */
	$plugins = apply_filters( 'austintatious_plugins', array(
		array(
			'name'    => 'Advanced Custom Fields Pro',
			'slug'    => 'advanced-custom-fields-pro',
			'version' => '5.8+',
			'url'     => 'https://github.com/austintude/wprig-wp-options/raw/master/plugins/advanced-custom-fields-pro.zip', // Only for non wp.org plugins.
		),
		array(
			'name'    => 'AMP',
			'slug'    => 'amp',
			'version' => '1.5+',
			'url'     => 'https://github.com/austintude/wprig-wp-options/raw/master/plugins/amp.zip', // Only for non wp.org plugins.
		),
		// array(
		// 	'name'    => 'Custom Post Type UI',
		// 	'slug'    => 'custom-post-type-ui',
		// 	'version' => '1.7+',
		// 	'url'     => 'https://github.com/austintude/wprig-wp-options/raw/master/plugins/custom-post-type-ui.zip',
		// ),
		// array(
		// 	'name'    => 'CustomPostType Agency Post Types For Best Experience',
		// 	'slug'    => 'custom-post-type-agency-post-types',
		// 	'version' => '2+',
		// 	'url'     => 'https://github.com/austintude/wprig-wp-options/raw/master/required-components/custom-post-type-agency-post-types.zip',
		// ),
		// array(
		// 	'name'    => 'ACF Pro Agency Fields For Best Experience',
		// 	'slug'    => 'acf-pro-agency-fields',
		// 	'version' => '2+',
		// 	'url'     => 'https://github.com/austintude/wprig-wp-options/raw/master/required-components/acf-pro-agency-fields.json', // Only for non wp.org plugins.
		// ),
	));

	/*
	 * Setup optional arguments for plugin manager interface.
	 *
	 * See the set_args() method of the Austintatious_Design_Plugin_Manager
	 * class for full documentation on what you can pass in here.
	 */
	$args = array(
		'page_title' => __( 'Required Plugins', 'austintatious' ),
		'menu_slug'  => 'austintatious-required-plugins',
	);

	/*
	 * Create plugin manager object, passing in the required
	 * plugins and optional arguments.
	 */
	$manager = new Austintatious_Design_Plugin_Manager( $plugins, $args );

}
add_action( 'after_setup_theme', 'austintatious_plugin_manager' );

function cptui_register_my_cpts() {

	/**
	 * Post Type: CTA Links.
	 */

	$labels = [
		"name" => __( "CTA Links", "wp-rig" ),
		"singular_name" => __( "CTA Link", "wp-rig" ),
	];

	$args = [
		"label" => __( "CTA Links", "wp-rig" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "cta_links", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-superhero-alt",
		"supports" => [ "title" ],
	];

	register_post_type( "cta_links", $args );

	/**
	 * Post Type: Cookies, Scripts & Pixels.
	 */

	$labels = [
		"name" => __( "Cookies, Scripts & Pixels", "wp-rig" ),
		"singular_name" => __( "Cookie, Script or Pixel", "wp-rig" ),
	];

	$args = [
		"label" => __( "Cookies, Scripts & Pixels", "wp-rig" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "analytics", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-performance",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "analytics", $args );

	/**
	 * Post Type: Contact Items.
	 */

	$labels = [
		"name" => __( "Contact Items", "wp-rig" ),
		"singular_name" => __( "Contact Item", "wp-rig" ),
	];

	$args = [
		"label" => __( "Contact Items", "wp-rig" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "contact_items", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-id-alt",
		"supports" => [ "title" ],
	];

	register_post_type( "contact_items", $args );

	/**
	 * Post Type: Hero Carousel Images.
	 */

	$labels = [
		"name" => __( "Hero Carousel Images", "wp-rig" ),
		"singular_name" => __( "Hero Carousel Image", "wp-rig" ),
	];

	$args = [
		"label" => __( "Hero Carousel Images", "wp-rig" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "hero_carousel_images", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title" ],
	];

	register_post_type( "hero_carousel_images", $args );

	/**
	 * Post Type: Testimonial Quotes.
	 */

	$labels = [
		"name" => __( "Testimonial Quotes", "wp-rig" ),
		"singular_name" => __( "Testimonial Quote", "wp-rig" ),
	];

	$args = [
		"label" => __( "Testimonial Quotes", "wp-rig" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonial_quotes", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => [ "title" ],
	];

	register_post_type( "testimonial_quotes", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/**
 * Begin ACF Pro Fields
 */

require get_theme_file_path( 'inc/Advanced_Custom_Fields/Component.php' );

