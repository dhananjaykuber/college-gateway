<?php
/**
 * Register Course post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

/**
 * Class Post_Type_Course
 */
class Post_Type_Course extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'course';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Course';

	/**
	 * Get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'               => _x( 'Course', 'post type general name', 'college-gateway' ),
			'singular_name'      => _x( 'Course', 'post type singular name', 'college-gateway' ),
			'menu_name'          => _x( 'Courses', 'admin menu', 'college-gateway' ),
			'name_admin_bar'     => _x( 'Course', 'add new on admin bar', 'college-gateway' ),
			'add_new'            => _x( 'Add New', 'post', 'college-gateway' ),
			'add_new_item'       => __( 'Add New Course', 'college-gateway' ),
			'new_item'           => __( 'New Course', 'college-gateway' ),
			'edit_item'          => __( 'Edit Course', 'college-gateway' ),
			'view_item'          => __( 'View Course', 'college-gateway' ),
			'all_items'          => __( 'All Courses', 'college-gateway' ),
			'search_items'       => __( 'Search Course', 'college-gateway' ),
			'not_found'          => __( 'No Course found.', 'college-gateway' ),
			'not_found_in_trash' => __( 'No Course found in Trash.', 'college-gateway' ),
		);
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * @return array
	 */
	public function get_args() {

		$args = array(
			'menu_icon' => 'dashicons-book',
		);

		$args = wp_parse_args( $args, parent::get_args() );

		return $args;
	}
}
