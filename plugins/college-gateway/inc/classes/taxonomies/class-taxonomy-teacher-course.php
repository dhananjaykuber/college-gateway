<?php
/**
 * Register hidden custom taxonomy for teacher courses.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Taxonomies;

use College_Gateway\Inc\Post_Types\Post_Type_Teacher;

/**
 * Class Taxonomy_Teacher_Course
 */
class Taxonomy_Teacher_Course extends Base {

	/**
	 * Slug of taxonomy.
	 *
	 * @var string
	 */
	const SLUG = 'teacher-courses';

	/**
	 * Labels for taxonomy.
	 *
	 * @return array
	 */
	public function get_labels() {
		return array(
			'name'          => _x( 'Teacher Courses', 'taxonomy general name', 'college-gateway' ),
			'singular_name' => _x( 'Teacher Course', 'taxonomy singular name', 'college-gateway' ),
			'menu_name'     => __( 'Teacher Courses', 'college-gateway' ),
		);
	}

	/**
	 * List of post types for taxonomy.
	 *
	 * @return array
	 */
	public function get_post_types() {
		return array(
			Post_Type_Teacher::SLUG,
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
			'public'            => false,
			'show_admin_column' => false,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
			'rewrite'           => false,
			'query_var'         => false,
		);

		return wp_parse_args( $args, parent::get_args() );
	}
}
