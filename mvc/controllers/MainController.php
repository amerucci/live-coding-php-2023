<?php

spl_autoload_register(function ($class_name) {
    include __DIR__.'/../models/' . $class_name . '.php';
});

function joue($intrument){
        $instrument = new Instrument($intrument);
        $cequejedoisfaire =  $instrument->joue();
        $titreDelaPage=$intrument;
        require __DIR__."/../views/joueTemplate.php";
}

function jouePlusFort($intrument){
    $instrument = new Instrument($intrument);
    $cequejedoisfaire =  $instrument->jouePlusFort();
    require __DIR__."/../views/joueTemplate.php";
}

function joueMoinsFort($intrument){
    $instrument = new Instrument($intrument);
    $cequejedoisfaire =  $instrument->joueMoinsFort();
    require __DIR__."/../views/joueTemplate.php";
}

function onCommence(){
    $cequejedoisfaire =  'Fermez tous vos gueules. <br/>Le silence là Keuvine tapotte délicatement trois fois sa baguette sur son pupitre';
    require __DIR__."/../views/joueTemplate.php"; 
}

function clapeDeFin($qui){
    $instrument = new Instrument($qui);
    $cequejedoisfaire = $instrument->onlaferme();
    require __DIR__."/../views/joueTemplate.php";

}




