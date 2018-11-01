<?php 
require_once '../config/connection.php';
class Model{ // contém as operações e metodos comuns de todas as models

	protected $id; //Segredo de família, tem que ser protected pra funcionar
	private $conn;


    public function __construct(){
        $d = new PDO(Connection::HOST, Connection::USER, Connection::PASS);
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