<?php 
include 'connexion.inc.php';
$dateDispo=$_POST['date']; 
$heureDispo=$_POST['heure']; 
$sql= "SELECT *FROM creneau WHERE date_heure = '".$dateDispo."' and heure = '".$heureDispo."'";
$result = $conn->query($sql);