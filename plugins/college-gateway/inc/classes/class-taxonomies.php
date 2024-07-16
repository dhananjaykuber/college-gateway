<?php
/**
 * To load all classes that register taxonomy.
 *
 * @package College_Gateway
 */

namespace College_Gateway\Inc;

use College_Gateway\Inc\Traits\Singleton;
use College_Gateway\Inc\Taxonomies\Taxonomy_Course_Language;

/**
 * Class Taxonomies
 */
class Taxonomies {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		// Load all taxonomies classes.
		Taxonomy_Course_Language::get_instance();
	}
}
