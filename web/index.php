<?php 
require_once "config/autoload.php"; // classes carregados automaticamente, sem 224141241 de includes

session_start();
if(isset($_GET['acao'])){
   
  
    $classe = $_GET['classe']; // recebe nome da classe via get
    $acao = $_GET['acao']; // recebe nome do metodo via get
    $c = new $classe; // instancia a classe
    $c->$acao(); // faz a ação e volta usando ajax
  


}
else
    header("location:view"); // redireciona caso nenhuma requisição seja encontrada

?> 