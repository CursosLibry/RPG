<?php
class FormSave extends Model{
	  	public function insert($form){ // da insert na ficha personalizada
        try{
            $c = $this->conn->prepare("INSERT INTO ficha(html) VALUES(:html)");
    		$c->bindValue(':html',$form,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }



     public function redirect(){ // query for the user
        try{
            return header("location: /rpg/web/view/user/user.php");
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    
}