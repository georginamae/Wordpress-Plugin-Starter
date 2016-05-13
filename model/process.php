<?php

require_once("insert_model.php");
require_once("edit_model.php");
require_once("delete_model.php");
	
$add =  new insert_model();
$edit = new edit_model();
$del = new delete_model();

/**
* POST REQUEST
**/

if(isset($_POST)){
	extract($_POST);
	
	if(isset($btnTest)){
		echo "POSTED!";
	}
}

/**
* GET REQUEST
**/

if(isset($_GET)){	
	extract($_GET);
}