<?php 
include 'connexion.inc.php';
$nom = $_POST['nom'];
$prenom = $_POST['Prenom'];
$identifiant = $_POST['nomUtilisateur'];
$Motdp = $_POST['Mdp'];
$mail = $_POST['email'];
$superviseur = "INSERT INTO superviseur (nom, prenom, identifiant, mot_de_passe, email, admin ) VALUES('".$nom."', '".$prenom."', '".$identifiant."','".$Motdp."','".$mail."',0)";
$conn->query($superviseur);
header("Location: page1-administrateur.php");
?>
