=== Texlab Current Year ===
Contributors: texlab
Tags: shortcode, year, current year, date, copyright
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display the current year anywhere in your WordPress site using a simple shortcode.

== Description ==

Texlab Current Year is a lightweight WordPress plugin that allows you to display the current year anywhere on your website using a simple shortcode. This is particularly useful for copyright notices and other date-sensitive content that needs to be automatically updated each year.

The year is calculated from the timezone configured in Settings > General, so it rolls over at midnight for your site rather than for the server.

= Features =

* Simple shortcode `[texlab_current_year]` to display the current year
* Uses the site's configured timezone
* Lightweight and efficient: no options, no database queries, no assets loaded
* No configuration needed
* Works with any theme
* Perfect for footer copyright notices

= Usage =

Simply insert the shortcode `[texlab_current_year]` anywhere in your posts, pages, or widgets where you want the current year to appear.

Example usage in a copyright notice:
`© [texlab_current_year] Your Company Name. All rights reserved.`

= Developers =

The rendered year can be adjusted with the `texlab_current_year` filter:

`add_filter( 'texlab_current_year', function ( $year ) { return $year; } );`

GitHub repository: [Texlab Current Year on GitHub](https://github.com/TEXlab-IT/texlab-current-year)

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/texlab-current-year` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode `[texlab_current_year]` in your content

== Frequently Asked Questions ==

= How do I use this plugin? =

Simply insert the shortcode `[texlab_current_year]` wherever you want the current year to appear.

= Does this plugin slow down my website? =

No. The plugin registers a single shortcode and loads no scripts, styles or settings. It performs no database queries.

= Can I use this in my theme's template files? =

Yes, you can use the shortcode in template files by using the `do_shortcode()` function:
`<?php echo do_shortcode('[texlab_current_year]'); ?>`

= Which timezone is the year based on? =

The year is generated with `wp_date()`, which uses the timezone set in Settings > General.

= Does it support different date formats? =

No. The shortcode outputs the year in YYYY format only. Developers who need something else can use the `texlab_current_year` filter.

== Changelog ==

= 1.2.0 =
* Tested with WordPress 7.1.
* Raised the minimum supported versions to WordPress 6.5 and PHP 7.4, as PHP 7.2 and 7.3 no longer receive security fixes.
* The year is now generated with `wp_date()` so it respects the timezone configured in Settings > General instead of the server timezone.
* The shortcode callback now explicitly discards any attributes passed to it, so no author-supplied value can reach the output.
* Removed the activation and deactivation hooks that called `flush_rewrite_rules()`. The plugin registers no rewrite rules, so the call was unnecessary work on every activation.
* Removed the unused plugin path and URL constants from the global namespace.
* Removed the redundant `load_plugin_textdomain()` call. WordPress.org has served plugin translations automatically since WordPress 4.6.
* The shortcode is now registered on the `init` hook, as recommended.
* Added a `texlab_current_year` filter for developers.

= 1.1.0 =
* Added proper class-based structure
* Improved code organization and documentation
* Added internationalization support
* Added activation and deactivation hooks
* Enhanced security measures

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.2.0 =
Compatibility update for WordPress 7.1 plus code hardening and cleanup. The year now follows your site's timezone. Requires WordPress 6.5 and PHP 7.4 or later.

= 1.1.0 =
This version includes improved code structure and security enhancements. Update recommended for all users.

== Additional Info ==

For more information and support, please visit:
[Texlab IT](https://www.texlabit.com/contact/)
