<?php session_start();
require_once "../config/autoload.php"; 

if($_POST){

    $classe = new History();
    $classe->title = $_POST['history_title'];
    $classe->history = $_POST['history_text'];
    $classe->insert();
    $classe->redirect();

    
}
if($_GET){
    $classe = new History();
    $classe->id = $_GET['id'];
    $classe->delete();
    $classe->redirect();
}