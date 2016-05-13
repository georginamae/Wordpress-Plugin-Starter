<?php

require_once ('helper.php');

class plugin_activator extends helper{
	function activate() {
		require_once($this->get_absolute_url().'model/database_model.php');
		$db = new database_model();
		//$db->create_tables();
	}
}
 