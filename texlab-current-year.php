<?php

/**
 * Plugin Name: Texlab Current Year
 * Plugin URI: http://www.texlabit.com/wordpress-plugin-texlab-current-year/
 * Description: Shows the current year using a simple shortcode [texlab_current_year].
 * Version: 1.1.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Texlab IT
 * Author URI: http://www.texlabit.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: texlab-current-year
 * Domain Path: /languages
 *
 * @package Texlab_Current_Year
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
	exit;
}

// Define plugin constants.
define('TEXLAB_CURRENT_YEAR_VERSION', '1.1.0');
define('TEXLAB_CURRENT_YEAR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TEXLAB_CURRENT_YEAR_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Main plugin class
 *
 * @since 1.1.0
 */
final class Texlab_Current_Year
{

	/**
	 * Instance of this class.
	 *
	 * @since 1.1.0
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin.
	 *
	 * @since 1.1.0
	 */
	private function __construct()
	{
		$this->init();
	}

	/**
	 * Get an instance of this class.
	 *
	 * @since 1.1.0
	 * @return Texlab_Current_Year
	 */
	public static function get_instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Initialize plugin hooks and filters.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	private function init()
	{
		add_action('init', array($this, 'load_textdomain'));
		add_shortcode('texlab_current_year', array($this, 'render_current_year'));
	}

	/**
	 * Load plugin textdomain.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	public function load_textdomain()
	{
		load_plugin_textdomain(
			'texlab-current-year',
			false,
			dirname(plugin_basename(__FILE__)) . '/languages/'
		);
	}

	/**
	 * Render the current year.
	 *
	 * @since 1.0.0
	 * @return string The current year.
	 */
	public function render_current_year()
	{
		return esc_html(date_i18n('Y'));
	}

	/**
	 * Activate the plugin.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	public static function activate()
	{
		// Activation tasks if needed.
		flush_rewrite_rules();
	}

	/**
	 * Deactivate the plugin.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	public static function deactivate()
	{
		// Deactivation tasks if needed.
		flush_rewrite_rules();
	}
}

// Initialize the plugin.
add_action('plugins_loaded', array('Texlab_Current_Year', 'get_instance'));

// Register activation and deactivation hooks.
register_activation_hook(__FILE__, array('Texlab_Current_Year', 'activate'));
register_deactivation_hook(__FILE__, array('Texlab_Current_Year', 'deactivate'));
