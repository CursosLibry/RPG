<?php
require_once "../config/autoload.php"; 
if($_POST){
	if($_POST["name"]){
		$classe = new RPGGroup();
		$classe->name = $_POST['name'];
		if($_POST['password'] || $_POST['password2']){
			if($_POST['password'] == $_POST['password2']){
				$classe->password = $_POST['password'];
			}else{
				header("location: /rpg/web/view/user/createGroup.php?err=pass");
				die();
			}
		}
		if($classe->validateInsert()){
			$classe->insert();
			$classe->redirect();
		}else{
			header("location: /rpg/web/view/user/createGroup.php?err=name");
			die();
		}
	}
	}
