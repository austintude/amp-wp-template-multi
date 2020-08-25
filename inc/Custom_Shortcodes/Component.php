<?php
/**
 * WP_Rig\WP_Rig\Archive_Content\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Custom_Shortcodes;

use WP_Rig\WP_Rig\Component_Interface;

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
		return 'custom_shortcodes';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		// TODO: Add actions and filters here.
		include get_theme_file_path( '/custom-shortcodes.php' );
	}
}



