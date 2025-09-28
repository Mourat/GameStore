<?php
/**
 * Plugin Name:       Blocks Gamestore
 * Description:       A collection of blocks for a gameStore website.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blocks-gamestore
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'block_categories_all', function ( $categories ) {
	$categories[] = array(
		'slug'  => 'gamestore',
		'title' => 'GameStore'
	);
	return $categories;
} );
