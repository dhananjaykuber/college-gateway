<?php
/**
 * Register Service post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

/**
 * Class Post_Type_Service
 */
class Post_Type_Service extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'service';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Service';

	/**
	 * Get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'               => _x( 'Service', 'post type general name', 'college-gateway' ),
			'singular_name'      => _x( 'Service', 'post type singular name', 'college-gateway' ),
			'menu_name'          => _x( 'Services', 'admin menu', 'college-gateway' ),
			'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'college-gateway' ),
			'add_new'            => _x( 'Add New', 'post', 'college-gateway' ),
			'add_new_item'       => __( 'Add New Service', 'college-gateway' ),
			'new_item'           => __( 'New Service', 'college-gateway' ),
			'edit_item'          => __( 'Edit Service', 'college-gateway' ),
			'view_item'          => __( 'View Service', 'college-gateway' ),
			'all_items'          => __( 'All Services', 'college-gateway' ),
			'search_items'       => __( 'Search Service', 'college-gateway' ),
			'not_found'          => __( 'No Service found.', 'college-gateway' ),
			'not_found_in_trash' => __( 'No Service found in Trash.', 'college-gateway' ),
		);
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * @return array
	 */
	public function get_args() {
		$args = array(
			'menu_icon' => 'dashicons-admin-generic',
		);

		$args = wp_parse_args( $args, parent::get_args() );

		return $args;
	}
}
