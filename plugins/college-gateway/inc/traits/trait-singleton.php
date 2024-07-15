<?php
/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Traits;

trait Singleton {

	/**
	 * Protected class constructor to prevent direct object creation
	 */
	protected function __construct() {}

	/**
	 * Prevent object cloning
	 */
	final protected function __clone() {}

	/**
	 * This method returns new or existing Singleton instance
	 * of the class for which it is called. This method is set
	 * as final intentionally, it is not meant to be overridden.
	 *
	 * @return object Singleton instance of the class.
	 */
	final public static function get_instance() {

		// Collection of instance.
		static $instance = array();

		/**
		 * Then get_called_class retrieve a string with the name of the called class.
		 * The $instance store classname => instance in array.
		 */
		$called_class = get_called_class();

		// Check called_class instance is not exist in instance array.
		if ( ! isset( $instance[ $called_class ] ) ) {
			// Create a new instance of the called_class.
			$instance[ $called_class ] = new $called_class();
		}

		// Return the instance of called_class.
		return $instance[ $called_class ];
	}
}
