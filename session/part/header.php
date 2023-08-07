<?php 
// require_once("./class/User.php");
// ini_set('display_errors',1);

spl_autoload_register(function ($class_name) {
    require_once './class/'.$class_name . '.php';
});


session_start();


?>
<link rel="stylesheet" href="./public/style.css">