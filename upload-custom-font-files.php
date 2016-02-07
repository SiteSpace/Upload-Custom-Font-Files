<?php
/**
 * Plugin Name: Upload Custom Font Files
 * Description: Upload your font files to Wordpress
 * Theme URI: https://github.com/SiteSpace/upload-custom-font-files
 * Author: Site Space
 * Author URI: http://sitespace.club
 * Version: 1.0.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Tags: upload font, upload custom font, custom font, font, custom, upload
 * Text Domain: upload-custom-font-files
 */

// If you are running this on a Multisite, don't forget to add the extension types:
// Dashboard >> Network Admin >> Settings >> Network Settings
// Copy Paste: eot svg ttf woff woff2

function my_myme_types($mime_types){
  $mime_types['eot'] = 'application/vnd.ms-fontobject'; //Adding SVG extension
  $mime_types['svg'] = 'image/svg+xml';
  $mime_types['ttf'] = 'application/x-font-ttf';
  $mime_types['woff'] = 'application/x-font-woff';
  $mime_types['woff2'] = 'application/x-font-woff';
  return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

?>
