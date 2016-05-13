<?php
/******************************************************************
This Model is the parent model class that returns database object
*******************************************************************/
class database_model{	

	public function db_connect(){
		$localhost	= DB_HOST;
		$user		= DB_USER;
		$pw			= DB_PASSWORD;
		$database	= DB_NAME;
		$db = new mysqli($localhost, $user, $pw, $database);
		if($db){
			return $db;
		}else{
			 die("Connection failed: " . $db->connect_error);
		}
	}
	public function create_tables(){
	
		global $wpdb;
		
		//$wpdb->prefix
		
		$db = $this->db_connect();
		
		$sql="";

		$rs = $db->query($sql);
		if($rs){
			return true;
		}else{
			return false;
		}

	}
}