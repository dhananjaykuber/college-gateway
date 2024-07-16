<?php
/**
 * Event date meta box.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc\Meta_Boxes;

/**
 * Class Metabox_Event_Date
 */
class Metabox_Event_Date extends Base {

	/**
	 * Meta box slug.
	 *
	 * @var string Meta box slug.
	 */
	const SLUG = 'event-date';

	/**
	 * Meta box label.
	 *
	 * @var string Meta box label.
	 */
	const LABEL = 'Event Date';

	/**
	 * Context of meta box.
	 *
	 * @var string Context of meta box.
	 */
	protected $context = 'side';

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
			'event_date' => new \Fieldmanager_Datepicker(
				array(
					'label'       => __( 'Event Date', 'college-gateway' ),
					'description' => __( 'Select the date of the event', 'college-gateway' ),
					'attributes'  => array(
						'placeholder' => __( 'Select a date', 'college-gateway' ),
						'style'       => 'width: 100%;',
					),
					'js_opts'     => array(
						'dateFormat'  => 'yy-mm-dd',
						'changeMonth' => true,
						'changeYear'  => true,
						'yearRange'   => '-5:+5',
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
			'event',
		);
	}
}
