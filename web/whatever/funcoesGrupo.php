<?php
require_once "../config/autoload.php";

	function listOne($id){
		$group = new RPGGroup();
		$obj = $group->listOne();
		return $obj;
	}

?>