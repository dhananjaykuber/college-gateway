<?php
/**
 * Teacher courses meta box.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Meta_Boxes;

/**
 * Class Metabox_Teacher_Courses
 */
class Metabox_Teacher_Courses extends Base {

	/**
	 * Meta box slug.
	 *
	 * @var string Meta box slug.
	 */
	const SLUG = 'teacher-courses';

	/**
	 * Meta box label.
	 *
	 * @var string Meta box label.
	 */
	const LABEL = 'Courses Taught';

	/**
	 * Context of meta box.
	 *
	 * @var string Context of meta box.
	 */
	protected $context = 'normal';

	/**
	 * Priority of meta box.
	 *
	 * @var string Priority of meta box.
	 */
	protected $priority = 'high';

	/**
	 * To get field for meta box.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @throws \FM_Developer_Exception Field manager developer exception.
	 *
	 * @return array
	 */
	public function get_fields( $post_type = '' ) {
		return array(
			'metabox_teacher_courses' => new \Fieldmanager_Checkboxes(
				array(
					'label'       => __( 'Courses Taught', 'college-gateway' ),
					'description' => __( 'Select the courses this teacher teaches', 'college-gateway' ),
					'options'     => $this->get_courses_options(),
				)
			),
		);
	}

	/**
	 * Get courses options for the checkboxes.
	 *
	 * @return array
	 */
	private function get_courses_options() {
		$options = array();

		$courses = get_posts(
			array(
				'post_type'              => 'course',
				'posts_per_page'         => 20,
				'orderby'                => 'title',
				'order'                  => 'ASC',
				'no_found_rows'          => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		foreach ( $courses as $course ) {
			$options[ $course->ID ] = $course->post_title;
		}

		return $options;
	}

	/**
	 * List of post type in which meta box is allowed.
	 *
	 * @return array List of post type.
	 */
	public function get_post_type() {
		return array(
			'teacher',
		);
	}
}
