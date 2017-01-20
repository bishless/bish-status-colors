<?php
/**
 * @link              https://bishless.com/bish-status-colors/
 * @since             1.0.0
 * @package           TODO
 *
 * @wordpress-plugin
 * Plugin Name:       Bish Status Colors
 * Plugin URI:        https://bishless.com/bish-status-colors/
 * Description:       A micro plugin for WordPress that lets users quickly discern post status by the discreet decoration of post rows in wp-admin. Works on Posts and Pages.
 * Version:           1.0.1
 * Author:            Daniel Bishop
 * Author URI:        https://bishless.com
 * GitHub Plugin URI: bishless/bish-status-colors
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Tags: administration, posts, color, status, micro
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Enqueue stylesheet that applies Material colors to background (100) and left border (500) of matching rows
 * See: https://www.materialui.co/colors
 *
 * @param int $hook Hook suffix for the current admin page
 */
function bish_sc_enqueue_styles( $hook ) {
    if ( 'edit.php' != $hook ) {
        return;
    }
    wp_enqueue_style( 'status-colors-styles', plugins_url( 'css/bish-status-colors.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'bish_sc_enqueue_styles' );
