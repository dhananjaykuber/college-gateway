<?php
/**
 * Register Banner post type.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Post_Types;

/**
 * Class Post_Type_Banner
 */
class Post_Type_Banner extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'banner';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Banner';

	/**
	 * Get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'               => _x( 'Banners', 'post type general name', 'college-gateway' ),
			'singular_name'      => _x( 'Banner', 'post type singular name', 'college-gateway' ),
			'menu_name'          => _x( 'Banners', 'admin menu', 'college-gateway' ),
			'name_admin_bar'     => _x( 'Banner', 'add new on admin bar', 'college-gateway' ),
			'add_new'            => _x( 'Add New', 'banner', 'college-gateway' ),
			'add_new_item'       => __( 'Add New Banner', 'college-gateway' ),
			'new_item'           => __( 'New Banner', 'college-gateway' ),
			'edit_item'          => __( 'Edit Banner', 'college-gateway' ),
			'view_item'          => __( 'View Banner', 'college-gateway' ),
			'all_items'          => __( 'All Banners', 'college-gateway' ),
			'search_items'       => __( 'Search Banners', 'college-gateway' ),
			'not_found'          => __( 'No banners found.', 'college-gateway' ),
			'not_found_in_trash' => __( 'No banners found in Trash.', 'college-gateway' ),
		);
	}

	/**
	 * Get argument to register custom post type.
	 *
	 * @return array
	 */
	public function get_args() {
		$args = array(
			'menu_icon' => 'dashicons-images-alt2',
			'supports'  => array( 'title', 'editor', 'thumbnail' ),
		);

		$args = wp_parse_args( $args, parent::get_args() );

		return $args;
	}
}
