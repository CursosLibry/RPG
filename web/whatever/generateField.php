<?php
session_start();
    if($_POST){
        if($_POST['nome'] == "" || $_POST['nome'] == null || $_POST['nome'] == " "){
            header("location: ../view/user/createFicha.php?err=nome");
            die();
        }
        $nome = $_POST['nome'];
        switch ($_POST['tipo']) {
            case '0':
                $tipo = 0;
                break;

            case '1':
                $tipo = 1;
                break;
            
            default:
                # code...
                break;
        }

require_once "../model/framework/Formulario.class.php";
require_once "../model/framework/Text.class.php";
require_once "../model/framework/Senha.class.php";
require_once "../model/framework/Checkbox.class.php";
require_once "../model/framework/Radio.class.php";
require_once "../model/framework/Textarea.class.php";
if($tipo == 0){
    $campo= new Text($nome, $nome, 'nome');
}elseif($tipo == 1){
    $campo = new Textarea($nome, $nome, 'id', '50', '4');
}
if(!isset($_SESSION['form'])){
    die("Aqui diz que não existe");
    $f = new Formulario('pagina.php', 'POST');

    $f->addCampo($campo);

    session_start();
    $_SESSION['form'] = serialize($f);
}else{
// var_dump($_SESSION['form']);
// echo "<br/><br/>";

$f = unserialize($_SESSION['form']);
$f->addCampo($campo);

// var_dump($f);
// die();

$_SESSION['form'] = serialize($f);
}
header("location: ../view/user/createFicha.php");

// print $f->getHTML();

// echo "<a href='select.php'>Volta aí</a>";



    }

?>