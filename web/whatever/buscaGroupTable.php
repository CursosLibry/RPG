<?php
session_start();
include_once ("../config/autoload.php");
$classe = new RPGGroup();
$id = $_SESSION['id_user'];
$obj = $classe->searchByUser($id);

foreach($obj as $o){
	$html.= "<tr><td>".$o->name."</td>";
	if($o->password == null){
	$html.= "<td>Sem senha</td>";
	}else{
	$html.= "<td>".$o->password."</td>";
}
$html.= "<td><a href='/rpg/web/view/user/group.php?id=".$o->id."'>Acessar Grupo</a> | <a href='/rpg/web/whatever/trataGrupo.php?id=".$o->id."'><i class='fas fa-trash'></i></a></td></tr>";
}

$_SESSION['html_table'] = $html;
header("location: /rpg/web/view/user/createGroup.php");
?>