<?php
/**
 * Plugin Name: SVG Support
 * Description: Enable SVG uploads and fix display in media library.
 * Version: 1.0
 * Author: Mourat
 * Author URI: https://webdazur.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Allow SVG uploads
function gamestore_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'gamestore_mime_types');

// Fix SVG display in media library
function gamestore_fix_svg() {
    echo '<style>
      .attachment-266x266, .thumbnail img {
          width: 100% !important;
          height: auto !important;
      }
  </style>';
}
add_action('admin_head', 'gamestore_fix_svg');