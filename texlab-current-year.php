<?php
/**
 * Plugin Name: Texlab Current Year
 * Plugin URI: http://www.texlabit.com/wordpress-plugin-texlab-current-year/
 * Description: Shows the current year.
 * Author: Texlab IT
 * Version: 1.0
 * Author URI: http://www.texlabit.com/
 * Licence: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return current year for the shortcode.
 *
 * @return string Date.
 */
function texlab_add_shortcode() {
	return date_i18n( 'Y' );
}

add_shortcode( 'texlab_current_year', 'texlab_add_shortcode' );
