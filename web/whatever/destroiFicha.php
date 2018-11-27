<?php
session_start();
unset($_SESSION['form']);
header("location: ../view/user/createFicha.php");
?>