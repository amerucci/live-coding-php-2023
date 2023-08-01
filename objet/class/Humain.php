<?php

//Une classe c'est un modele, un plan qui va définir la structure et le comportement d'un objet. Pour schématiser, c'est un moule. 
//Un objet est une instance d'une classe. Il est créé à partir d'une classe et va hériter de tout ce que peux faire la classe (méthodes) ainsi que ses propriétés.
//Un propriété sont les variables qui composent une classe.
//Méthodes sont les fonctions d'une classe.

//On prend pour habitude d'appeler le fichier .php comme la classe que nous souhaitons créer.
//On utilisera le PascalCase. C'est à dire que chaque première lettre du mot est en majuscule.


abstract class Humain{
    protected $prenom;
    protected $nom;
    protected $age;

//Il existe une méthode dites magique qu'est le constructeur. 
//Pour la déclarer on utilisera toujours __construct

// Public : toutes les attributs et méthodes définis en public sont accessible de n'importe ou

// Private : Les attibuts et les méthodes ne sont accessibles que dans la classe. Pour accéder de l'extérieurs nous aurons besoin des assesseurs.

 public function __construct($prenompasse, $nompasse, $agepasse)
 {
    $this->prenom = $prenompasse;
    $this->nom = $nompasse;
    $this->age = $agepasse;
  }   

public function afficherLesInfos(){
     echo "bonjour je m'appelle ".$this->prenom." ".$this->nom." et j'ai ".$this->age. " ans";
}

public function boss(){
    echo "C'est moi $this->prenom le boss et pas Oguzhan!";
}

//Création des assesseurs pour les attributs privés
// Y'en a deux get et post, pour récupérer et envoyer
// On prendra pour habitude de déclarer nos méthodes avec getNomMethode ou setNomMethode

public function getAge(){
    echo $this->age;
}

public function getPrenom(){
    return $this->prenom;
}

public function setAge($valeur){
    $this->age = $valeur;
}
}

?>