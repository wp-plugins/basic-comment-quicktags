<?php
/*
  Plugin Name: Basic Comment Quicktags
  Plugin URI: http://halfelf.org/plugins/basic-comment-quicktags/
  Description: Displays a bold, italic, add link and quote button on top of the comment form
  Version: 1.0
  Author: Mika "Ipstenu" Epstein
  Author URI: http://ipstenu.org
  Stable tag: 1.0
  License: GPL2

  Original author: Marc Tönsing -- http://www.marctv.de/blog/2010/08/25/marctv-wordpress-plugins/
  Copyright 2012 Mika Epstein

    This file is part of Basic Comment Quicktags, a plugin for WordPress.

    Impostercide is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    (at your option) any later version.

    Impostercide is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with WordPress.  If not, see <http://www.gnu.org/licenses/>.
*/

global $wp_version;
$exit_msg_ver = 'This plugin requires WordPress 3.3';
if (version_compare($wp_version,"3.3","<")) { exit($exit_msg_ver); }


function bcq_add_scripts() {
  if ( function_exists('is_bbpress') ) {
	  if ( ( comments_open() && is_singular() || is_bbpress() ) ) {
	    wp_enqueue_script("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.js", array("quicktags","jquery"), "1.8", 1);
	    wp_enqueue_style("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.css", false, "1.8");
	    wp_print_styles('editor-buttons');
	}
  }
  elseif ( comments_open() && is_singular() ) {
	    wp_enqueue_script("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.js", array("quicktags","jquery"), "1.8", 1);
	    wp_enqueue_style("bcq_quicktags", plugin_dir_url(__FILE__) . "quicktags.css", false, "1.8");
	    wp_print_styles('editor-buttons');
  }
}

if ( !is_admin() ) {
  add_action('wp_print_styles', 'bcq_add_scripts');
}

// donate link on manage plugin page
add_filter('plugin_row_meta', 'bcq_donate_link', 10, 2);
function bcq_donate_link($links, $file) {
        if ($file == plugin_basename(__FILE__)) {
                $donate_link = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=ipstenu%40ipstenu%2eorg">Donate</a>';
                $links[] = $donate_link;
        }
        return $links;
}