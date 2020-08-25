<?php
/**
 * WP_Rig\WP_Rig\Archive_Content\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Advanced_Custom_Blocks;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;

/**
 * Class for allowing administrators to decide whether to display content or excerpt in archives.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'advanced-custom-blocks';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		// TODO: Add actions and filters here.
		include get_theme_file_path( '/advanced-custom-blocks.php' );
		add_action('acf/init', 'my_acf_init');
		function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));
	}
}
	}
}
