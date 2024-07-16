<?php
/**
 * Plugin manifest class.
 *
 * @package cleantech-features
 */

namespace College_Gateway\Inc;

use College_Gateway\Inc\Traits\Singleton;

/**
 * Class Plugin
 */
class Plugin {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->setup_hooks();

		// Load plugin classes.
		Post_Types::get_instance();
		Meta_Boxes::get_instance();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {}
}
