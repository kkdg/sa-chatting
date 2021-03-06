<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   sa_chatting
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       SA-Chatting
 * Plugin URI:        http://www.skyaperture.com/plugin/chatting
 * Description:       This plugin makes you easily install chatting widget into your wordpress.
 * Version:           0.1.0
 * Author:            Dr.DeX
 * Author URI:        http://wwww.wordpressure.co.kr/
 * Text Domain:       sa-chatting-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /lang
 * GitHub Plugin URI: https://github.com/kkdg/sa-chatting
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-sa-chatting.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-sa-chatting.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace sa_chatting with the name of the class defined in
 *   `class-sa-chatting.php`
 */
register_activation_hook( __FILE__, array( 'sa_chatting', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'sa_chatting', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace sa_chatting with the name of the class defined in
 *   `class-sa-chatting.php`
 */
add_action( 'plugins_loaded', array( 'sa_chatting', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace sa_chatting_Admin with the name of the class defined in
 *   `class-sa-chatting-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-sa-chatting-admin.php' );
	add_action( 'plugins_loaded', array( 'sa_chatting_Admin', 'get_instance' ) );

}
