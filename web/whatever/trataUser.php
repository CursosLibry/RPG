<?php
require_once "../config/autoload.php"; 

if($_POST){
	if($_POST["email"]){
		$classe = new User();
		$classe->name = $_POST['name'];
		$classe->email = $_POST['email'];
		$classe->nick = $_POST['nick'];
		$classe->password = $_POST['password'];
		if($classe->validateInsert()){
			$classe->insert();
			$classe->redirect();
		}
	}
	elseif($_POST['login']){
		$classe = new User();
		$classe->nick = $_POST['nick'];
		$classe->password = $_POST['password'];
		if($class->validateLogin()){
			$classe->insert();
			$classe->redirect();
		}
	}
	elseif($_POST['gender']){
		$classe->name = $_POST['name'];
		$classe->email = $_POST['email'];
		$classe->email = $_POST['gender'];
		$classe->email = $_POST['nationality'];
		$classe->email = $_POST['race'];
		$classe->nick = $_POST['nick'];
		$classe->password = $_POST['password'];
		$classe->newInsert();
		$classe->redirect();
		}
	}
}
