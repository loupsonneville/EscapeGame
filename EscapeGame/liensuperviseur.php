<?php 
include 'connexion.inc.php';
$date = $_POST['date'];
$heure = $_POST['heure'];
$creneau = "INSERT INTO  creneau (date,heure, reserve, superviseur_id ) VALUES('".$date ."','".$heure ."','non', 1 )";
$conn->query($creneau);
header("Location: page1-superviseur.php");
?>
