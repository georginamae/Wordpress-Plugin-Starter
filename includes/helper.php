<?php
class helper{
	public function plugin_dir_name(){
		define("PLUGIN_DIR_NAME","plugin-base");
		return PLUGIN_DIR_NAME;
	}
	public function get_absolute_url(){
		return get_home_path().'wp-content/plugins/'.$this->plugin_dir_name().'/';
		//Returns plugin absolute path
	}
	public function get_relevant_url(){
		$url = site_url();
		$relevant = parse_url($url,PHP_URL_PATH);
		return $relevant.'/wp-content/plugins/'.$this->plugin_dir_name().'/';
		//Returns the plugin url path
	}
	public function process_url(){
		$process = $this->get_relevant_url().'model/process.php';
		return $process;
		//Returns the process.php url path
	}

}
   