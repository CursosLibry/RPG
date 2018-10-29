<?php 

spl_autoload_register(function ($class_name) {

    if(file_exists("model/".$class_name.".class.php"))
        require_once "model/".$class_name.".class.php";
   

    if(file_exists("../../model/".$class_name.".class.php"))
        require_once "../../model/".$class_name.".class.php";

            if(file_exists("../../../model/".$class_name.".class.php"))
            require_once "../../../model/".$class_name.".class.php";

});
?>