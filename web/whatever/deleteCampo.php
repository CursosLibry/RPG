<?php
session_start();
// require_once "../model/Formulario.class.php";
// require_once "../model/Text.class.php";
// require_once "../model/Textarea.class.php";
require_once "../config/autoload.php";
if($_GET){
    if($_GET['id']){
        $form = unserialize($_SESSION['form']);
        $form->delCampo($_GET['id']);
        $_SESSION['form'] = serialize($form);
        header("location: ../view/user/createFicha.php");
    }
}