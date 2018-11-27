<?php session_start();
require_once "../config/autoload.php"; 

if($_POST){

    $classe = new HistoryGrupo();
    $classe->title = $_POST['historyG_name'];
    $classe->insert();
    $classe->redirect();

    
}
