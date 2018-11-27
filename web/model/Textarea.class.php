

<?php


include_once 'Campo.class.php';
class Textarea extends Campo{

   private $name;
   public $id;
    private $rows;
    private $cols;

    function __construct($n,$label, $id, $cols, $rows) {
        $this->name = $n;
        $this->label = $label;
        $this->id = $id;
        $this->cols = $cols;
        $this->rows = $rows;
    }
    function getHTML(){
    
	$html = "<div class='row'><div class='col-lg-10 col-md-10 form-group contact-forms'>
    <textarea name='{$this->name}' placeholder='{$this->name}' id= '{$this->id}' rows='{$this->rows}' cols='{$this->cols}'></textarea></div>
    <div class='col-lg-2 col-md-2 form-group contact-forms'>
    <a href='../../whatever/deleteCampo.php?id={$this->id}'><i class='fa fa-close' style='color:#ff0000;'></i></a>
    </div>
    </div>";
		return $html;
	}
}

