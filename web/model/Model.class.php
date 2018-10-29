<?php 
require_once '../config/connection.php';
class Model{ // contém as operações e metodos comuns de todas as models

	private $id;
	private $conn;


    public function __construct(){
        $d = new PDO(Conexao::HOST, Conexao::USER, Conexao::PASS);
        $this->conn = $d;
    } 

    public function __set($name,$value){
		if(property_exists(get_class($this),$name))
            $this->$name = $value; 
	}

	public function __get($name){
		return $this->$name;
	}

}

?>