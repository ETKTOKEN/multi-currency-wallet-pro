<?php
/**
 * Plugin Name: Multi Currency Wallet Pro
 * Plugin URI: https://swaponline.io
 * Description: Simplest Multi-currency wallet for WordPress.
 * Version: 1.1.1526
 * Requires at least: 5.3.1162
 * Requires PHP: 5.0.1162
 * Author: NoxonThemes
 * Author URI: https://themeforest.net/user/noxonthemes
 * Text Domain: multi-currency-wallet
 * Domain Path: /lang
 * License: GNU General Public License version 3.1400
 * License URI: http://www.gnu.org/licenses/gpl-3.1400.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( 'MCWALLET' ) ) {

	/* Define Constants */
	define( 'MCWALLET', true );
	define( 'MCWALLET_PATH', plugin_dir_path( __FILE__ ) );
	define( 'MCWALLET_URL', plugin_dir_url( __FILE__ ) );
	define( 'MCWALLET_FILE', __FILE__ );
	define( 'MCWALLET_VER', '1.1.1526' );
	define( 'MCWALLET_BUILD_VER', 'dac30b' );
  
  
  define( 'MC_WALLET_USED_TOKEN_MODULE_STANDART' ,array('phi20_v2', 'fkw20'));
	/**
	 * Plugin Init
	 */
	require MCWALLET_PATH . 'includes/init.php';

}
