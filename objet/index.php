<?php 
// require('./class/Humain.php');
require('./class/Femme.php');


ini_set('display_errors', 1);

// //Instanciation de l'objet
// $apprenant = new Humain;

// //Appel d'un attribut
// echo $apprenant->age;

// //Appel d'une méthode
// echo $apprenant->afficherLesInfos();


// //Instancier un objet en passant des paramètre aux constructeur pour un gain de temps
// $kevin = new Humain("Kevin", "Rousselet", "29");


// $kevin = new Humain("Kevin", "Rousselet", "29");
// // echo $kevin->age;
// // // La on a un soucis on ne pas accéder a un attribut privé d'une classe depuis l'extérieur.

// $kevin->setAge(69);
// $kevin->getAge();

// $celia = new Femme("Célia", "Fontaine", "22", "femme");
// echo $celia->getAge();


// echo "Je m'appelle ".$celia->getPrenom()." et j'ai ".Femme::BOOBS." boobs";

$fabien = new Femme("Fabien", "Barreau", "51", "femme");

var_dump($fabien);






