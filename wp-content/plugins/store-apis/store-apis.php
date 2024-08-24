<?php 
use Incl\Cls\InstallStoreApi ;



/**
 * @package   Store Apis
 * @author    D.kahadze 
 * @license   Private
 * @link      
 * @copyright  
 *
 * Plugin Name:       Store APIS
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:      A powerful plugin that integrates your WordPress site with third-party store APIs to fetch and display product data seamlessly. Ideal for online stores looking to manage and showcase products from external sources.
 * Version:           1.0.0 
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Author:            D.kahadze 
 * Author URI:        https://author.example.com/
 * License:           Private 
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /English 
 * Requires Plugins:  
 */

/**
 *-----------------------------------------
 * Do not delete this line
 * Added for security reasons: http://codex.wordpress.org/Theme_Development#Template_Files
 *-----------------------------------------
 */
defined('ABSPATH') or die("Direct access to the script is not allowed");

if (!defined('STORE_APIS_DIR_PATH')) {
  define('STORE_APIS_DIR_PATH', plugin_dir_path(__FILE__));
}

if (!defined('STORE_APIS_DIR_DIR_URL')) {
  define('STORE_APIS_DIR_DIR_URL', plugin_dir_url(__FILE__));
}

if (!defined('STORE_APIS_DB_NAME')) 
{
  define('STORE_APIS_DB_NAME',  'little-store'   );
}


require_once STORE_APIS_DIR_PATH . 'functions.php';

$store_apis = InstallStoreApi::get_instance() ;

register_activation_hook(__FILE__,  array( $store_apis     , 'activate'));






