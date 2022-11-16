<?php 
include 'connexion.inc.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$identifiant = $_POST['nomUtilisateur'];
$Motdp = $_POST['Mdp'];
$mail = $_POST['email'];
$modif = "INSERT INTO superviseur (nom, prenom, identifiant, mot_de_passe, email, admin ) VALUES('".$nom."', '".$prenom."', '".$identifiant."','".$Motdp."','".$mail."',0)";
$conn->query($modif);
header("Location: page1-administrateur.php");
?>
