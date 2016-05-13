<?php
/*****************************************************
This Model is  for editing the data from Database.
******************************************************/
require_once('database_model.php');

class edit_model extends database_model{	

	/**
	* Declare Tables
	**/
	
	//protected $table_name; 

	public function __construct(){
		global $wpdb;
		//$this->table_name = "`".$wpdb->prefix."table_name`";
	}
	public function edit(){
		
		$db = $this->db_connect();
		
		$sql="QUERY HERE";
		$result = $db->query($sql);

		if($result){
			return true;
		}else{
			die("MYSQL Error : ".mysqli_error($db));
		}		
	}
}