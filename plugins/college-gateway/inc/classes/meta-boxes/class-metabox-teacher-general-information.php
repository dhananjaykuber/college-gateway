<?php
/**
 * Teacher general information meta box.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Meta_Boxes;

/**
 * Class Metabox_Teacher_General_Information
 */
class Metabox_Teacher_General_Information extends Base {

	/**
	 * Meta box slug.
	 *
	 * @var string Meta box slug.
	 */
	const SLUG = 'teacher-general-information';

	/**
	 * Meta box label.
	 *
	 * @var string Meta box label.
	 */
	const LABEL = 'Teacher General Information';

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
			'metabox_teacher_position'   => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Position', 'college-gateway' ),
					'attributes' => array(
						'placeholder' => __( 'e.g., Professor of Mathematics', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_experience' => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Experience (in years)', 'college-gateway' ),
					'input_type' => 'number',
					'attributes' => array(
						'placeholder' => __( 'e.g., 10', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_email'      => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Email', 'college-gateway' ),
					'input_type' => 'email',
					'attributes' => array(
						'placeholder' => __( 'e.g., john.doe@university.edu', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_phone'      => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Phone', 'college-gateway' ),
					'input_type' => 'tel',
					'attributes' => array(
						'placeholder' => __( 'e.g., +1 (555) 123-4567', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
		);
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
