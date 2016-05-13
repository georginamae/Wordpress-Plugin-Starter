<?php
//Embed the Assets of this Plugin
class assets_loader {
	/*Load Backend CSS*/
	function register_backend_css(){
		wp_enqueue_style('base-datatable','//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css');
		wp_enqueue_style('base-admin',''.plugins_url('css/base-admin.css',__FILE__ ).'');
	}
	/*Load Frontend CSS*/
	function register_frontend_css(){
		wp_enqueue_style('base-front',''.plugins_url('css/base-front.css',__FILE__ ).'');
		wp_enqueue_style('base-fa','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css');
	}
	/*Load Backend JS*/
	function register_backend_js(){
		wp_enqueue_script( 'base-datatable', '//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js' );
		wp_enqueue_script( 'base-admin', ''.plugins_url('js/base-admin.js',__FILE__ ).'' );
	}	
	/*Load Frontend JS*/
	function register_frontend_js(){
		//JQUERY
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", false, null);
		wp_enqueue_script('jquery');
		
		wp_enqueue_script( 'base-script', ''.plugins_url('js/base-script.js',__FILE__ ).'' );
	}	
}
