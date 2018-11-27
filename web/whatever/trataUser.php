<?php session_start();
require_once "../config/autoload.php"; 

if($_POST){
	if($_POST["user_email"]){
		if($_POST['user_pass'] != $_POST['user_pass2']){
			header("location: ../view/user/register.php?err=pass");
			die();
		}
		$classe = new User();
		$classe->name = $_POST['user_name'];
		$classe->email = $_POST['user_email'];
		$classe->nick = $_POST['user_nick'];
		$classe->password = $_POST['user_pass'];
		if($classe->validateInsert()){
			$classe->insert();
			$obj = $classe->lastInserted();
			$_SESSION["id_user"] = $obj->id;
			$_SESSION["user_nick"] = $_POST['user_nick'];
			$classe->redirect();
		}else{
			header("location: ../view/user/register.php?err=pass2");
		}
	}
	if($_POST['user_nick']){
		$classe = new User();
		$classe->nick = $_POST['user_nick'];
		$classe->password = $_POST['user_pass'];
		if($classe->validateLogin()){
			$_SESSION["user_nick"] = $_POST['user_nick'];
			$obj = $classe->lastInserted();
			$_SESSION["id_user"] = $obj->id;
			$classe->redirect();
		}else{
			header("location: ../view/user/login.php?err=pass2");
		}
	}
	if($_POST['user_gender']){
		$classe->name = $_POST['user_name'];
		$classe->email = $_POST['user_email'];
		$classe->gender = $_POST['user_gender'];
		$classe->nationality = $_POST['user_nationality'];
		$classe->race = $_POST['user_race'];
		$classe->status = $_POST['user_status'];
		$classe->nick = $_POST['user_nick'];
		if($classe->validateNewInsert()){
			$classe->newInsert($_POST['user_email']);
			$classe->redirect();
		}else{
			header("location: ../view/user/editUser.php?err=pass");
		}
		}
	}
