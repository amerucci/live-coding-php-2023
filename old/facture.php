<?php 
$pageTitle = "Page des factures";
include_once 'parts/header.php';
include_once 'functions.php'; ?>

<h1>Facture</h1>
<?php 
$totalPdt = 100; //c'est des euros
$poid = 25;
$prixTotal = ($totalPdt+fraisDePort($poid))*1.20;

echo "Prix HT : ".($totalPdt+fraisDePort($poid))."€ <br/>";
echo "Dont frais de port ".fraisDePort($poid)."€ <br/>";
echo "Prix TTC : ".(($totalPdt+fraisDePort($poid))*1.20)."€ <br/>";
echo "Dont ".($totalPdt+fraisDePort($poid))*0.20."€ de TVA<br/>"



?>  <C¢*

Par ici la sortie