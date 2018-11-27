<?php 
class History extends Model{

    protected $id;
    protected $title;
    protected $history; // segredo de familia, senao o get e set nao funciona

 
  	public function insert(){ // da insert nos dados que o usuário irá cadastrar inicialmente
        try{
            $c = $this->conn->prepare("INSERT INTO history(title,history) 
    		VALUES(:title,:history)");
    		$c->bindValue(':title',$this->title,PDO::PARAM_STR);
    		$c->bindValue(':history',$this->history,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

//     public function lista(){
//         try{
//             $c = $this->conn->prepare("SELECT * FROM history");
//             $c->execute();
//             $resu = $c->fetchAll();
//             return $resu;
//         }catch(Exception $e){
// // para o futuro tratamento de erros  
//         }
//     }

    public function delete(){ // da delete nos dados que o usuário desejar
        try{
            $c = $this->conn->prepare("DELETE FROM history WHERE id = :id");
    		$c->bindValue(':id',$this->id,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }


    public function redirect(){ // query for the user
        try{
            return header("location: /rpg/web/view/user/createHistory.php");
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

}







?>