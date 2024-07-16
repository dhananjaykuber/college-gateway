<?php
/**
 * Load all classes that register meta box.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc;

use College_Gateway\Inc\Traits\Singleton;
use College_Gateway\Inc\Meta_Boxes\Metabox_Teacher_General_Information;
use College_Gateway\Inc\Meta_Boxes\Metabox_Teacher_Social_Information;
use College_Gateway\Inc\Meta_Boxes\Metabox_Event_Date;

/**
 * Class Meta_Boxes
 */
class Meta_Boxes {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		// Load all meta boxes classes.
		Metabox_Teacher_General_Information::get_instance();
		Metabox_Teacher_Social_Information::get_instance();
		Metabox_Event_Date::get_instance();
	}
}
