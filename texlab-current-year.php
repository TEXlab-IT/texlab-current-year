<?php
/**
 * Plugin Name:       Texlab Current Year
 * Plugin URI:        https://www.texlabit.com/wordpress-plugin-texlab-current-year/
 * Description:       Shows the current year using a simple shortcode [texlab_current_year].
 * Version:           1.2.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            Texlab IT
 * Author URI:        https://www.texlabit.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       texlab-current-year
 *
 * @package Texlab_Current_Year
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Current plugin version.
 */
define( 'TEXLAB_CURRENT_YEAR_VERSION', '1.2.0' );

/**
 * Main plugin class.
 *
 * @since 1.1.0
 */
final class Texlab_Current_Year {

	/**
	 * Shortcode tag handled by this plugin.
	 *
	 * @since 1.2.0
	 * @var string
	 */
	const SHORTCODE = 'texlab_current_year';

	/**
	 * Single instance of this class.
	 *
	 * @since 1.1.0
	 * @var Texlab_Current_Year|null
	 */
	private static $instance = null;

	/**
	 * Constructor. Kept private so the class can only be booted via get_instance().
	 *
	 * @since 1.1.0
	 */
	private function __construct() {
		$this->init();
	}

	/**
	 * Prevent cloning of the instance.
	 *
	 * @since 1.2.0
	 * @return void
	 */
	private function __clone() {}

	/**
	 * Get the single instance of this class.
	 *
	 * @since 1.1.0
	 * @return Texlab_Current_Year
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Register plugin hooks.
	 *
	 * Translations for plugins hosted on WordPress.org are loaded automatically
	 * since WordPress 4.6, so no textdomain needs to be registered here.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	private function init() {
		add_shortcode( self::SHORTCODE, array( $this, 'render_current_year' ) );
	}

	/**
	 * Render the current year.
	 *
	 * The shortcode accepts no attributes. Any attributes passed by the author
	 * are deliberately discarded so that no caller-supplied value can ever reach
	 * the output.
	 *
	 * @since 1.0.0
	 *
	 * @param array|string $atts    Shortcode attributes. Unused.
	 * @param string|null  $content Enclosed content. Unused.
	 * @param string       $tag     Shortcode tag. Unused.
	 * @return string The current year, in the site's configured timezone.
	 */
	public function render_current_year( $atts = array(), $content = null, $tag = '' ) {
		unset( $atts, $content, $tag );

		$year = wp_date( 'Y' );

		if ( ! is_string( $year ) || '' === $year ) {
			$year = gmdate( 'Y' );
		}

		/**
		 * Filters the year rendered by the [texlab_current_year] shortcode.
		 *
		 * @since 1.2.0
		 *
		 * @param string $year The year about to be rendered.
		 */
		$year = (string) apply_filters( 'texlab_current_year', $year );

		return esc_html( $year );
	}
}

// Boot the plugin once WordPress is ready for shortcode registration.
add_action( 'init', array( 'Texlab_Current_Year', 'get_instance' ) );
