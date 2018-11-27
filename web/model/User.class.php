<?php 
class User extends Model{


    protected $name;
    protected $email; // segredo de familia, senao o get e set nao funciona
    protected $gender;
    protected $nationality;
    protected $race;
    protected $status;
    protected $nick;
    protected $password;

 
  	public function insert(){ // da insert nos dados que o usuário irá cadastrar inicialmente
        try{
            $c = $this->conn->prepare("INSERT INTO user(name,email,nick,password) 
    		VALUES(:name,:email,:nick,:password)");
    		$c->bindValue(':name',$this->name,PDO::PARAM_STR);
    		$c->bindValue(':email',$this->email,PDO::PARAM_STR);
            $c->bindValue(':nick',$this->nick,PDO::PARAM_STR);
            $c->bindValue(':password',$this->password,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    public function newInsert($email){ // da insert nos dados que o usuário irá cadastrar após seu cadastro
        try{
            $c = $this->conn->prepare("INSERT INTO user(name,email,gender,nationality,race,status,nick) 
    		VALUES(:name,:email,:gender,:nationality,:race,:status,:nick) WHERE email = '$email'");
            $c->bindValue(':name',$this->name,PDO::PARAM_STR);
            $c->bindValue(':email',$this->email,PDO::PARAM_STR);
            $c->bindValue(':gender',$this->gender,PDO::PARAM_STR);
    		$c->bindValue(':nationality',$this->nationality,PDO::PARAM_STR);
    		$c->bindValue(':race',$this->race,PDO::PARAM_STR);
            $c->bindValue(':status',$this->status,PDO::PARAM_STR);
            $c->bindValue(':nick',$this->nick,PDO::PARAM_STR);
    		return $c->execute(); // verificar se deu certo a busca(retorna booleano)
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    public function validateLogin(){ // query for the user
        try{
            $c = $this->conn->prepare("SELECT id FROM user WHERE nick = :nick AND password = :password");
            $c->bindValue(':nick',$this->nick,PDO::PARAM_STR);
            $c->bindValue(':password',$this->password,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "User");
            return count($arr)? true: false;
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    public function validateInsert(){ // query for the user
        try{
            $c = $this->conn->prepare("SELECT id FROM user WHERE email = :email ");
            $c->bindValue(':email',$this->email,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "User");
            return count($arr)? false: true;
        }catch(Exception $e){
// para o futuro tratamento de erros
        }
    }

    public function validateNewInsert(){ // query for the user
        try{
            $c = $this->conn->prepare("SELECT id FROM user WHERE email = :email ");
            $c->bindValue(':email',$this->email,PDO::PARAM_STR);
            $c->execute();
            $arr = $c->fetchAll(PDO::FETCH_CLASS, "User");
            return count($arr)? true: false;
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







?>