<?php 

$pageTitle = "Page des devis";
include 'parts/header.php'; ?>
<?php include 'functions.php'; ?>
<h1>Devis</h1>
<?php 
$totalPdt = 5000; //c'est des euros
$poid = 250;
$prixTotal = ($totalPdt+fraisDePort($poid))*1.20;

echo "Prix HT : ".($totalPdt+fraisDePort($poid))."€ <br/>";
echo "Dont frais de port ".fraisDePort($poid)."€ <br/>";
echo "Prix TTC : ".(($totalPdt+fraisDePort($poid))*1.20)."€ <br/>";
echo "Dont ".($totalPdt+fraisDePort($poid))*0.20."€ de TVA<br/>"



?>