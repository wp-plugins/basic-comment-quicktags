<?php
/*
  Plugin Name: Basic Comment Quicktags
  Plugin URI: http://halfelf.org/plugins/basic-comment-quicktags/
  Description: Displays a bold, italic, add link and quote button on top of the comment form
  Version: 1.2
  Author: Mika "Ipstenu" Epstein
  Author URI: http://ipstenu.org

  Original author: Marc Tönsing -- http://www.marctv.de/blog/2010/08/25/marctv-wordpress-plugins/
  Copyright 2012 Mika Epstein

    This file is part of Basic Comment Quicktags, a plugin for WordPress.

    Basic Comment Quicktags is free software: you can redistribute it and/or 
	modify it under the terms of the GNU General Public License as published 
	by the Free Software Foundation, either version 2 of the License, or
    (at your option) any later version.

    Basic Comment Quicktags is distributed in the hope that it will be
    useful, but WITHOUT ANY WARRANTY; without even the implied warranty
    of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with WordPress.  If not, see <http://www.gnu.org/licenses/>.
*/

global $wp_version;
$exit_msg_ver = 'This plugin requires WordPress 3.3';
if (version_compare($wp_version,"3.3","<")) { exit($exit_msg_ver); }

function ippy_bcq_add_scripts() {

$options = get_option('ippy_bcq_options');
$valuebb = $options['bbpress'];
$valueco = $options['comments'];

  if ( function_exists('is_bbpress') ) {
	  if ( ( comments_open() && is_singular() || is_bbpress() )  && ( $valuebb != '0') && !is_null($valuebb) ) {
	    wp_enqueue_script("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.js", array("quicktags","jquery"), "1.8", 1);
	    wp_enqueue_style("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.css", false, "1.8");
	    wp_print_styles('editor-buttons');
	}
  }
  elseif ( comments_open() && is_singular() && ( $valueco != '0') && !is_null($valueco) ) {
	    wp_enqueue_script("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.js", array("quicktags","jquery"), "1.8", 1);
	    wp_enqueue_style("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.css", false, "1.8");
	    wp_print_styles('editor-buttons');
  }
}

if( !is_admin() ) {
	add_action('wp_print_styles', 'ippy_bcq_add_scripts');
}

// donate link on manage plugin page
add_filter('plugin_row_meta', 'ippy_bcq_donate_link', 10, 2);
function ippy_bcq_donate_link($links, $file) {
        if ($file == plugin_basename(__FILE__)) {
                $donate_link = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=ipstenu%40ipstenu%2eorg">Donate</a>';
                $links[] = $donate_link;
        }
        return $links;
}

// Register and define the settings
add_action('admin_init', 'ippy_bcq_admin_init');

function ippy_bcq_admin_init(){

	register_setting(
		'discussion',               // settings page
		'ippy_bcq_options'          // option name
	);
	
	add_settings_field(
		'ippy_bcq_bbpress',         // id
		'Quicktags',                // setting title
		'ippy_bcq_setting_input',   // display callback
		'discussion',               // settings page
		'default'                   // settings section
	);
	$options = get_option( 'ippy_bcq_options' );
	$options['comments'] = '1';
	$options['bbpress'] = '0';
	update_option('ippy_bcq_options', $options);
}

// Display and fill the form field
function ippy_bcq_setting_input() {
	// get option value from the database
	$options = get_option( 'ippy_bcq_options' );
	$valuebb = $options['bbpress'];
	$valueco = $options['comments'];
	
	// echo the field
	?>
<p><?php if ( function_exists('is_bbpress') ) { ?>
<input id='bbpress' name='ippy_bcq_options[bbpress]' type='checkbox' value='<?php echo $valuebb; ?>' <?php if ( ( $valuebb != '0') && !is_null($valuebb) ) { echo ' checked="checked"'; } ?> /> Activate Quicktags on bbPress<br /> <?php } ?>
<input id='comments' name='ippy_bcq_options[comments]' type='checkbox' value='<?php echo $valuebb; ?>' <?php if ( ( $valueco != '0') && !is_null($valueco) ) { echo ' checked="checked"'; } ?> /> Activate Quicktags on comments
	<?php
}