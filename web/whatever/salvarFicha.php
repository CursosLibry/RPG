<?php
session_start();

if($_GET){
	if($_GET['model']){
		switch ($_GET['model']) {
			case 'libry':
				# code...
				break;
			
			default:
				# code...
				break;
		}
		die();
	}
	die();
}
// require_once "../model/Formulario.class.php";
// require_once "../model/Text.class.php";
// require_once "../model/Textarea.class.php";
// require_once "../model/FormSave.class.php";
require_once "../config/autoload.php";
if(isset($_SESSION['form'])){
$form = unserialize($_SESSION['form']);
$form_html = $form->getHTML();


var_dump($form_html);

//Salva No Banco
$classe = new FormSave();
$classe->insert($form_html);
$classe->redirect();
}else{
	header("location: ../view/user/createFicha.php");
}

?>