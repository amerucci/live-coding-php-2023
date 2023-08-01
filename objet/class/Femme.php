<?php

require_once 'Humain.php';

class Femme extends Humain{

    public $sexe;

    const BOOBS = 2;

    public function __construct($prenompasse, $nompasse, $agepasse, $sexpasse)
    {
       parent::__construct($prenompasse, $nompasse, $agepasse);
       $this->sexe = $sexpasse;

     }   



}