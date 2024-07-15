<?php
/**
 * Abstract class to register post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

use College_Gateway\Inc\Traits\Singleton;

/**
 * Base class to register post types.
 */
abstract class Base {

	use Singleton;

	/**
	 * Construct method.
	 */
	final protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Register action/filters.
	 *
	 * @return void
	 */
	protected function setup_hooks() {
		add_action( 'init', array( $this, 'register_post_type' ) );
	}

	/**
	 * Register post type.
	 *
	 * @return void
	 */
	final public function register_post_type() {
		if ( empty( static::SLUG ) ) {
			return;
		}

		$args = $this->get_args();
		$args = ( ! empty( $args ) && is_array( $args ) ) ? $args : array();

		$labels = $this->get_labels();
		$labels = ( ! empty( $labels ) && is_array( $labels ) ) ? $labels : array();

		if ( ! empty( $labels ) && is_array( $labels ) ) {
			$args['labels'] = $labels;
		}

		register_post_type( static::SLUG, $args );
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * To override arguments, defined this method in child class and override args.
	 *
	 * @return array
	 */
	public function get_args() {
		return array(
			'show_in_rest'  => true,
			'public'        => true,
			'has_archive'   => true,
			'menu_position' => 6,
			'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		);
	}

	/**
	 * Get slug of post type.
	 *
	 * @return string Slug of post type.
	 */
	public function get_slug() {
		return ( ! empty( static::SLUG ) ) ? static::SLUG : '';
	}

	/**
	 * Get list of labels for custom post type (must be in child class).
	 *
	 * @return array
	 */
	abstract public function get_labels();
}
