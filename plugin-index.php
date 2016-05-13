<?php
/**
 * 
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.johnperricruz.com
 * @since             1.0.0
 * @package           Plugin_Base
 *
 * @wordpress-plugin
 * Plugin Name:       Base Plugin Template
 * Plugin URI:        www.primeview.com
 * Description:       Base Plugin Template Description
 * Version:           1.0.0
 * Author:            John Perri Cruz
 * Author URI:        https://www.johnperricruz.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       base-plugin
 * Domain Path:       /languages
 */
/***********************************************************
NOTE : DONT FORGET TO CHAGE THE FF. VALUES BEFORE DEVELOPING
************************************************************
1. Unique Function name of :
		base_plugin_run_activate_plugin
		base_plugin_run_deactivate_plugin
		base_plugin_system_init
2.  /includes/helper.php's 
		PLUGIN_DIR_NAME
3. /includes/plugin-activator.php
		CHECK LINE 9
4. /model/
		database_model->create_tables();
		display_model
		edit_model
		add_model
		delete_model
		process
5. /assets/css
		Unique CSS names
6. /assets/js
		Unique js names
7. /assets/assets-loader.php
		Unique ID's and file to load
***********************************************************/
 if ( ! defined( 'WPINC' ) ) {
	die;
} 

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/plugin-activator.php
**/
function base_plugin_run_activate_plugin(){
	require_once plugin_dir_path( __FILE__ ) . 'includes/plugin-activator.php';
	$activator   = new plugin_activator();
	
	/**
	*Activate the plugin
	**/
	
	$activator->activate();											
}
/**
 * The code that runs during plugin deactivation. 
 * This action is documented in includes/plugin-deactivator.php
**/
function base_plugin_run_deactivate_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/plugin-deactivator.php';
	$deactivate = new plugin_deactivator();
	
	/**
	*Deactivate the plugin
	**/
	
	$deactivate->deactivate();	
}
register_activation_hook( __FILE__, 'base_plugin_run_activate_plugin' );
register_deactivation_hook( __FILE__, 'base_plugin_run_deactivate_plugin' );

/**
* RUN PLUGIN
**/
function base_plugin_system_init(){
	require_once ('assets/assets-loader.php');//Require Assets Class
	require_once ('controller/page-loader.php');//Require Page Class
	
	$pages   = new page_loader();
	$assets = new assets_loader(); 													
	
	if(is_admin()){
		$assets->register_backend_css();		
		$assets->register_backend_js();																													
	}else{
		$assets->register_frontend_css();	
		$assets->register_frontend_js();	
	}
	
	$pages->generate();
}
//init
base_plugin_system_init();
