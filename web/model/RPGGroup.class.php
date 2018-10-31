<?php 
class RPGGroup extends Model{


    protected $name;
    protected $password;


  	public function insert(){ // da insert nos dados que o usuário irá cadastrar inicialmente
        try{
            $c = $this->conn->prepare("INSERT INTO rpggroup(name,password) VALUES(:name,:password)");
    		$c->bindValue(':name',$this->name,PDO::PARAM_STR);
            $c->bindValue(':password',$this->password,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    public function validateInsert(){ // query for the group
        try{
            $c = $this->conn->prepare("SELECT id FROM rpggroup WHERE name = :name ");
            $c->bindValue(':name',$this->name,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "RPGGroup");
            return count($arr)? false: true;
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

     public function redirect(){ // query for the group
        try{
            return header("location: /rpg/web/view/user/group.php");
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }
}







?>