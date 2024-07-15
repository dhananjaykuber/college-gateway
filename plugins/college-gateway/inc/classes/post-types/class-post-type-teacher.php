<?php
/**
 * Register Teacher post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

/**
 * Class Post_Type_Teacher
 */
class Post_Type_Teacher extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'teacher';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Teacher';

	/**
	 * Get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'               => _x( 'Teacher', 'post type general name', 'college-gateway' ),
			'singular_name'      => _x( 'Teacher', 'post type singular name', 'college-gateway' ),
			'menu_name'          => _x( 'Teacher', 'admin menu', 'college-gateway' ),
			'name_admin_bar'     => _x( 'Teacher', 'add new on admin bar', 'college-gateway' ),
			'add_new'            => _x( 'Add New', 'post', 'college-gateway' ),
			'add_new_item'       => __( 'Add New Teacher', 'college-gateway' ),
			'new_item'           => __( 'New Teacher', 'college-gateway' ),
			'edit_item'          => __( 'Edit Teacher', 'college-gateway' ),
			'view_item'          => __( 'View Teacher', 'college-gateway' ),
			'all_items'          => __( 'All Teachers', 'college-gateway' ),
			'search_items'       => __( 'Search Teacher', 'college-gateway' ),
			'not_found'          => __( 'No Teacher found.', 'college-gateway' ),
			'not_found_in_trash' => __( 'No Teacher found in Trash.', 'college-gateway' ),
		);
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * @return array
	 */
	public function get_args() {
		$args = array(
			'menu_icon' => 'dashicons-welcome-learn-more',
		);

		$args = wp_parse_args( $args, parent::get_args() );

		return $args;
	}
}
