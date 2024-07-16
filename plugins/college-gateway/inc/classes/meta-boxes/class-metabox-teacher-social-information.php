<?php
/**
 * Teacher social information meta box.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Meta_Boxes;

/**
 * Class Metabox_Teacher_Social_Information
 */
class Metabox_Teacher_Social_Information extends Base {

	/**
	 * Meta box slug.
	 *
	 * @var string Meta box slug.
	 */
	const SLUG = 'teacher-social-information';

	/**
	 * Meta box label.
	 *
	 * @var string Meta box label.
	 */
	const LABEL = 'Teacher Social Information';

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
	protected $priority = 'default';

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
			'metabox_teacher_facebook'  => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Facebook', 'college-gateway' ),
					'input_type' => 'url',
					'attributes' => array(
						'placeholder' => __( 'e.g., https://www.facebook.com/yourprofile', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_twitter'   => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Twitter', 'college-gateway' ),
					'input_type' => 'url',
					'attributes' => array(
						'placeholder' => __( 'e.g., https://twitter.com/yourhandle', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_linkedin'  => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'LinkedIn', 'college-gateway' ),
					'input_type' => 'url',
					'attributes' => array(
						'placeholder' => __( 'e.g., https://www.linkedin.com/in/yourprofile', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
				)
			),
			'metabox_teacher_instagram' => new \Fieldmanager_TextField(
				array(
					'label'      => __( 'Instagram', 'college-gateway' ),
					'input_type' => 'url',
					'attributes' => array(
						'placeholder' => __( 'e.g., https://www.instagram.com/yourusername', 'college-gateway' ),
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
