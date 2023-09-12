<?php
require_once __DIR__.'/controllers/MainController.php';
if(empty($_GET['action'])){
   require_once(__DIR__.'/views/BaseTemplate.php');
}else{
    $action = explode('/', $_GET['action']);
    $volume = $action[1]??"";
    if($volume!=""){
        if($volume=="plus"){
            jouePlusFort($action[0]) ;
        }
        else{
            joueMoinsFort($action[0]) ;
        }
    }
    if($action[0]=='tapotte'){
        onCommence();
    }
    elseif($action[0]=='fin'){
        clapeDeFin("Tous les instruments");
    }else{
        joue($_GET['action']);
    }
}



?>