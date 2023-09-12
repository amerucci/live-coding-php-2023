<?php 

class Instrument {
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function joue(){
        return "$this->name à commencé à jouer";
    }

    public function jouePlusFort(){
        return "$this->name joue plus fort";
    }

    public function joueMoinsFort(){
        return "$this->name joue moins fort";
    }

    public function onlaferme(){
        return 'Tous les instruments se taisent, le silence revient dans la salle. Keuvine se tourne vers son public dans le but de recevoir une ovation digne de sa prestation. oui je dis bien sa prestation car les autres n\'étais la que pour faire beau. Lui seul est le véritable artiste';
    }
    
}