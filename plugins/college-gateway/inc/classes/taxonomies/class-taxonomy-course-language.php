<?php
/**
 * Register custom taxonomy for language.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Taxonomies;

use College_Gateway\Inc\Post_Types\Post_Type_Course;

/**
 * Class Taxonomy_Course_Language
 */
class Taxonomy_Course_Language extends Base {

	/**
	 * Slug of taxonomy.
	 *
	 * @var string
	 */
	const SLUG = 'language';

	/**
	 * Labels for taxonomy.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'                       => _x( 'Languages', 'taxonomy general name', 'college-gateway' ),
			'singular_name'              => _x( 'Language', 'taxonomy singular name', 'college-gateway' ),
			'search_items'               => __( 'Search Languages', 'college-gateway' ),
			'popular_items'              => __( 'Popular Languages', 'college-gateway' ),
			'all_items'                  => __( 'All Languages', 'college-gateway' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Language', 'college-gateway' ),
			'update_item'                => __( 'Update Language', 'college-gateway' ),
			'add_new_item'               => __( 'Add New Language', 'college-gateway' ),
			'new_item_name'              => __( 'New Language Name', 'college-gateway' ),
			'separate_items_with_commas' => __( 'Separate languages with commas', 'college-gateway' ),
			'add_or_remove_items'        => __( 'Add or remove languages', 'college-gateway' ),
			'choose_from_most_used'      => __( 'Choose from the most used languages', 'college-gateway' ),
			'not_found'                  => __( 'No languages found.', 'college-gateway' ),
			'menu_name'                  => __( 'Languages', 'college-gateway' ),
		);
	}

	/**
	 * List of post types for taxonomy.
	 *
	 * @return array
	 */
	public function get_post_types() {
		return array(
			Post_Type_Course::SLUG,
		);
	}

	/**
	 * Get arguments for taxonomy.
	 *
	 * @return array
	 */
	public function get_args() {
		$args = array(
			'hierarchical'      => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'language' ),
		);

		return wp_parse_args( $args, parent::get_args() );
	}
}
