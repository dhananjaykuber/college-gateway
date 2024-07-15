<?php
/**
 * Plugin Name: College Gateway
 * Description: All backend functionality will take place in this plugin. Like, registering post type, taxonomy, widget and meta box.
 * Plugin URI:  https://github.com/dhananjaykuber/college-gateway/tree/master/plugins/college-gateway
 * Author:      Dhananjay Kuber
 * Author URI:  https://github.com/dhananjaykuber/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0
 * Text Domain: college-gateway
 *
 * @package College_Gateway
 */

define( 'COLLEGE_GATEWAY_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'COLLEGE_GATEWAY_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

require_once COLLEGE_GATEWAY_PATH . '/inc/helpers/autoloader.php';

/**
 * To load plugin manifest class.
 *
 * @return void
 */
function cleantech_features_plugin_loader() {
	\College_Gateway\Inc\Plugin::get_instance();
}

cleantech_features_plugin_loader();
