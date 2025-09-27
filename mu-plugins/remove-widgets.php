<?php
/**
 * Plugin Name: Remove Widgets
 * Description: Remove unnecessary widgets from the WordPress dashboard.
 * Version: 1.0
 * Author: Mourat
 * Author URI: https://webdazur.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Remove welcome panel
add_action( 'admin_init', function() {
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
});

// Remove dashboard widgets
function gamestore_remove_dashboard_widgets() {
    global $wp_meta_boxes;
    
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
}
add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_widgets');
