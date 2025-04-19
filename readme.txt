=== Texlab Current Year ===
Contributors: texlabit
Tags: shortcode, year, current year, date
Requires at least: 5.2
Tested up to: 6.8
Requires PHP: 7.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display the current year anywhere in your WordPress site using a simple shortcode.

== Description ==

Texlab Current Year is a lightweight WordPress plugin that allows you to display the current year anywhere on your website using a simple shortcode. This is particularly useful for copyright notices and other date-sensitive content that needs to be automatically updated each year.

= Features =

* Simple shortcode `[texlab_current_year]` to display the current year
* Supports internationalization (i18n)
* Lightweight and efficient
* No configuration needed
* Works with any theme
* Perfect for footer copyright notices

= Usage =

Simply insert the shortcode `[texlab_current_year]` anywhere in your posts, pages, or widgets where you want the current year to appear.

Example usage in a copyright notice:
`© [texlab_current_year] Your Company Name. All rights reserved.`

= Developers =

* GitHub Repository: [Texlab Current Year on GitHub](https://github.com/texlabit/texlab-current-year)
* Feel free to contribute to the development of this plugin

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/texlab-current-year` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode `[texlab_current_year]` in your content

== Frequently Asked Questions ==

= How do I use this plugin? =

Simply insert the shortcode `[texlab_current_year]` wherever you want the current year to appear.

= Does this plugin slow down my website? =

No, this plugin is very lightweight and only loads the minimal code needed to display the current year.

= Can I use this in my theme's template files? =

Yes, you can use the shortcode in template files by using the `do_shortcode()` function:
`<?php echo do_shortcode('[texlab_current_year]'); ?>`

= Does it support different date formats? =

Currently, the plugin only displays the year in YYYY format. If you need different date formats, please contact us for feature requests.

== Screenshots ==

1. Example usage in footer copyright notice

== Changelog ==

= 1.1.0 =
* Added proper class-based structure
* Improved code organization and documentation
* Added internationalization support
* Added activation and deactivation hooks
* Enhanced security measures

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.1.0 =
This version includes improved code structure and security enhancements. Update recommended for all users.

== Additional Info ==

For more information and support, please visit:
[Texlab IT](https://www.texlabit.com/contact/)
