<?php
session_start();
require_once "../config/autoload.php"; 
if($_POST){
	if($_POST["name"]){
		$classe = new RPGGroup();
		$classe->name = $_POST['name'];
		$classe->id_user = $_SESSION['id_user'];
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
			$obj = $classe->lastInserted();
			$_SESSION["id_rpggroup"] = $obj->id;
			$classe->redirect();
		}else{
			header("location: /rpg/web/view/user/createGroup.php?err=name");
			die();
		}
	}
	}

	if($_GET){
		if($_GET['id']){
			$classe = new RPGGroup();
			if($classe->delete($_GET['id']))
				header("location: ../view/user/createGroup.php?mssg=success");
			else
				header("location: ../view/user/createGroup.php?mssg=err");
		}
	}
