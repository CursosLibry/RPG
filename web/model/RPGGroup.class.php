<?php 
class RPGGroup extends Model{


    protected $name;
    protected $id_user;
    protected $password;


  	public function insert(){ // da insert nos dados que o usuário irá cadastrar inicialmente
        try{
            $c = $this->conn->prepare("INSERT INTO rpggroup(name,password,id_user) VALUES(:name,:password,:id_user)");
    		$c->bindValue(':name',$this->name,PDO::PARAM_STR);
            $c->bindValue(':password',$this->password,PDO::PARAM_STR);
            $c->bindValue(':id_user',$this->id_user,PDO::PARAM_STR);
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

        public function lastInserted(){ // query for the group
        try{
            $c = $this->conn->prepare("SELECT * FROM rpggroup WHERE name = :name ");
            $c->bindValue(':name',$this->name,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "RPGGroup");
            return $arr[0];
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }


        public function listOne($id){ // query for the group
        try{
            $c = $this->conn->prepare("SELECT * FROM rpggroup WHERE id = :id ");
            $c->bindValue(':id',$id,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "RPGGroup");
            return $arr[0];
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }


    public function searchByUser($id){
        try{
            $c = $this->conn->prepare("SELECT * FROM rpggroup WHERE id_user = :id ");
            $c->bindValue(':id',$id,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "RPGGroup");
            return $arr;
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }



        public function delete($id){
        try{
            $c = $this->conn->prepare("DELETE FROM rpggroup WHERE id = :id ");
            $c->bindValue(':id',$id,PDO::PARAM_STR);
            return $c->execute();
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }



     public function redirect(){ // query for the group
        try{
            $obj = $this->lastInserted();
            return header("location: /rpg/web/view/user/group.php?id=".$obj->id);
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }
}







?>