<?php
/**
 * Register Event post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

/**
 * Class Post_Type_Event
 */
class Post_Type_Event extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'event';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Event';

	/**
	 * Get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'               => _x( 'Event', 'post type general name', 'college-gateway' ),
			'singular_name'      => _x( 'Event', 'post type singular name', 'college-gateway' ),
			'menu_name'          => _x( 'Event', 'admin menu', 'college-gateway' ),
			'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'college-gateway' ),
			'add_new'            => _x( 'Add New', 'post', 'college-gateway' ),
			'add_new_item'       => __( 'Add New Event', 'college-gateway' ),
			'new_item'           => __( 'New Event', 'college-gateway' ),
			'edit_item'          => __( 'Edit Event', 'college-gateway' ),
			'view_item'          => __( 'View Event', 'college-gateway' ),
			'all_items'          => __( 'All Events', 'college-gateway' ),
			'search_items'       => __( 'Search Event', 'college-gateway' ),
			'not_found'          => __( 'No Event found.', 'college-gateway' ),
			'not_found_in_trash' => __( 'No Event found in Trash.', 'college-gateway' ),
		);
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * @return array
	 */
	public function get_args() {

		$args = array(
			'menu_icon' => 'dashicons-calendar-alt',
		);

		$args = wp_parse_args( $args, parent::get_args() );

		return $args;
	}
}
