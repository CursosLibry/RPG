

<?php
include_once 'Campo.class.php';
abstract class Input extends Campo{
    private $name;
    private $type;
    public $id;
    
    function setType($type){
        $this->type=$type;
    }
    function getName(){
        return $this->name;
    }
    function __construct($n,$label, $id) {
        $this->name = $n;
        $this->label = $label;
        $this->id = $id;
    }
    function getHTML(){
    
	$html = "<div class='row'><div class='col-lg-10 col-md-10 form-group contact-forms'>
    <input type='{$this->type}' name='{$this->name}' id='{$this->id}'placeholder='{$this->name}' {$this->check}/>
    </div>
    <div class='col-lg-2 col-md-2 form-group contact-forms'>
    <a href='../../whatever/deleteCampo.php?id={$this->id}'><i class='fa fa-close' style='color:#ff0000;'></i></a>
    </div></div>";
		return $html;
	}
    
}
