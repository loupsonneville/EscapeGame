<!DOCTYPE html>
<html lang="en">

<?php 
include 'connexion.inc.php';
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$numTel = $_POST['numeroTel'];
$mail = $_POST['email'];
$nbJoueurs = $_POST['nbJoueurs'];
$joueur = "INSERT INTO joueur (nom, prenom, telephone, email ,nb_joueurs, creneau_id) VALUES('".$nom."', '".$prenom."', '".$numTel."', '".$mail."','".$nbJoueurs."', '1')";
$conn->query($joueur);
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Escape Game</title>
  <link rel="stylesheet" href="page4.css" />
  <link rel="stylesheet" href="uniform" />
  <link rel="stylesheet" href="style.css" />
</head>

<body id="page-4">
  </div>
  <h1>Votre réservation à bien été <br>
    prise en compte</h1>
  <h2>Vous êtes invité à vous présenter quinze minutes avant l’heure de début de créneau</h2>
  <h3>plus d’information sur votre boite mail</h3>
  </div>
  <a href="page-1.php">
    <img class="bouton-accueil" src="images/button_accueil.png" />
  </a>
  <div class="LogoValidation">
    <img src="images/LogoValidation.png" alt="" />
    <div class="photo-bg"></div>
  </div>

</body>

</html>