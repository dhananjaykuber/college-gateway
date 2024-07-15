<?php
/**
 * Load all classes that register post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc;

use College_Gateway\Inc\Traits\Singleton;
use College_Gateway\Inc\Post_Types\Post_Type_Course;
use College_Gateway\Inc\Post_Types\Post_Type_Event;
use College_Gateway\Inc\Post_Types\Post_Type_Service;

/**
 * Class Post_Types
 */
class Post_Types {

	use Singleton;

	use Singleton;

	/**
	 * Store instance of post type.
	 *
	 * @var array List of instance of post type.
	 */
	protected static $instances = array();

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->register_post_types();
	}

	/**
	 * Initiate all post type instance.
	 *
	 * @return void
	 */
	protected function register_post_types() {
		self::$instances = array(
			Post_Type_Course::SLUG  => Post_Type_Course::get_instance(),
			Post_Type_Event::SLUG   => Post_Type_Event::get_instance(),
			Post_Type_Service::SLUG => Post_Type_Service::get_instance(),
		);
	}


	/**
	 * Get instance of all post types.
	 *
	 * @return array List of instances of the post types.
	 */
	public static function get_instances() {
		return self::$instances;
	}

	/**
	 * Get slug list of all custom post type.
	 *
	 * @return array List of slugs.
	 */
	public static function get_post_types() {
		return array_keys( self::$instances );
	}
}
