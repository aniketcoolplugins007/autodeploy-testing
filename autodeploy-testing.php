<?php
/**
 * Plugin Name: Auto Deploy Testing
 * Description: This is a testing plugin for the auto deploy feature.
 * Version: 0.1
 * Author: Aniket
 * Author URI: https://aniket.com
 * Text Domain: autodeploy-testing
 * Domain Path: /languages
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Requires PHP: 7.0
 *
 * @since 0.1
 * @package AutoDeployTesting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/includes/class-autodeploy-testing-plugin.php';

$tesing=$_GET['testing'];


echo "<p id='testing_id.'".$testing." class='".$testing."'>".$testing."</p>";

( new AutoDeploy_Testing_Plugin() )->init();
