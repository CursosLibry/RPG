<?php
class FormSave extends Model{
	  	public function insert($form, $id_user, $id_rpggroup){ // da insert na ficha personalizada
        try{
            $c = $this->conn->prepare("INSERT INTO ficha(html,id_user,id_rpggroup) VALUES(:html,:id_user,:id_rpggroup)");
            $c->bindValue(':html',$form,PDO::PARAM_STR);
            $c->bindValue(':id_user',$id_user,PDO::PARAM_STR);
    		$c->bindValue(':id_rpggroup',$id_rpggroup,PDO::PARAM_STR);
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