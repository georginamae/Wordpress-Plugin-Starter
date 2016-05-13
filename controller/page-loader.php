<?php
require_once(plugin_dir_path( __DIR__ ).'/includes/helper.php');


class page_loader extends helper{
	function generate(){
		add_action('admin_menu',array(&$this, 'create_pages'));
	}
	function create_pages(){
		add_menu_page( 
			'Base Plugin Template', 				 // Page Title
			'Base Plugin Template',           		 // Navbar Title
			'manage_options',      					 // Permission 
			'base-template-dashboard',      		// Page ID
			array(&$this, 'first_page'),         	 // Function call
			'dashicons-star-filled',   				 // Favicon
			2                				 		 // Order
		);
		
		add_submenu_page( 
			'base-template-dashboard',    			 		     // Parent Page ID
			'Base Plugin Sub Page',     		 				 // Page Title
			'Base Plugin Sub Page', 							 // Navbar Title 
			'manage_options', 									 // Permission 	
			'base-template-subpage', 							 // Submenu Page ID
			array(&$this, 'sub_page')     						 // Function  call	 
		); 	
	}
	function first_page(){
		echo $this->get_absolute_url().'<br/>';
		echo $this->get_relevant_url();
	}
	function sub_page(){
		echo '
			<form method="POST" action="'.$this->process_url().'">
				<button name="btnTest">TEST</button>
			</form>
		';
	}
}  