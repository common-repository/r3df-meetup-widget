=== R3DF Meetup Widget ===
Contributors: r3df
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MX3FLF4YGXRLE
Tags: meetup, meetups, meetup.com, widget, meetup widget
Stable tag: 1.0.12
Requires at least: 4.0
Tested up to: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple widget for displaying a link to a meetup.com group.

== Description ==
A simple widget for use with a [Meetup.com](http://meetup.com) group.  The plugin adds a widget that shows a link to your Meetup group.

Simply enter your Meetup group name and it's URL and save.  You can display the widget with or without a title.

**Support**

Support for this plugin is limited to fixing _confirmed bugs_ and improving the plugin with enhancements that can be reasonably accommodated.

== Installation ==
The easy way:

1. To install this plugin, click on "Add New" on the plugins page in your WordPress dashboard.
2. Search for "R3DF Meetup Widget", click install when it's found.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Use the Widget panel to place and configure this widget in a sidebar.

The hard way:

1. Download the latest r3df-meetup-widget.zip from wordpress.org
2. Upload r3df-meetup-widget.zip to the `/wp-content/plugins/` folder on your web server
3. Uncompress r3df-meetup-widget.zip (delete r3df-meetup-widget.zip after it's uncompressed)
4. Activate the plugin through the 'Plugins' menu in WordPress
5. Use the Widget panel to place and configure this widget in a sidebar


== Screenshots ==

1. The widget admin.
2. The widget on the site.


== Changelog ==

= 1.0.12 =
1. Tidied code some more for WordPress coding standards
2. Changed the text domain load to load before widget instantiation
3. Added a crude French translation (If you can improve it let me know)
4. Changed tested version to 4.3

= 1.0.11 =
1. Tidied code somewhat to WordPress coding standards
2. Changed text domain to plugin slug & added text domain header item.
3. Changed tested version to 4.1

= 1.0.10 =
1. Added check to form parameters to verify they were set, unset parameters caused php error in some rare cases.
2. Changed text domain to plugin slug & added text domain header item.

= 1.0.9 =
1. Readme edits, and update supported versions to 4.0.

= 1.0.8 =
1. Added option to launch meetup link in a new window.

= 1.0.7 =
1. Reverted register_widget call to 1.0.5 version, anonymous functions are PHP 5.3+ only, WP still supports 5.2
2. Adjusted CSS to fix rendering bug in FireFox

= 1.0.6 =
1. Updated constructor
2. Updated some code to current WP conventions
3. Added code comments

= 1.0.5 =
1. Removed closing ?>

= 1.0.4 =
1. CSS tweak
2. Removed more capitals in file names

= 1.0.3 =
1. Changed to PHP5 __contruct.
2. Removed capitals in file name

= 1.0.2 =
1. Added uninstall routine to remove saved settings.

= 1.0.1 =
1. Tweaked CSS to fix height bug when used with title.
2. Updated image - cleaner copy from official PSD.

= 1.0.0 =
Initial Release




