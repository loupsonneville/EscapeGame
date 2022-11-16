<!DOCTYPE html>
<html lang="en">
<?php 
include 'connexion.inc.php';

?>
<head>
  <meta charset='utf-8'>
  <title>Escape Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Appel de la Feuille de style minifiée De La librairie Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Escape Game</title>
  <link rel="stylesheet" href="page3.css" />
  <link rel="stylesheet" href="uniform" />
  <link rel="stylesheet" href="style.css" />
</head>

<body id="page-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto"></div>
    </div>
  </div>
  <div class="container">
  <h1>RÉSERVATION DE VOTRE CRÉNEAU</h1>
  <form action="page-4.php"  method="post">
    <fieldset>
      <legend>Merci de remplire tout les champs</legend>

      <div class="form-group">
        <label for="nom">Entrez votre prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Michel" required>
      </div>
      <div class="form-group">
        <label for="nom">Entrez votre nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Dumat" required>
      </div>
      <div class="form-group">
        <label for="nom">Numero de téléphone</label>
        <input type="text" class="form-control" id="numeroTel" name="numeroTel" placeholder="06 23 xx xx xx" required>
      </div>
      <div class="form-group">
        <label for="email">Entrez votre mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Michel.Dumat@edhec.com" required>
      </div>

      <div class="form-group">
        <label for="selection">Sélectionner nombre joueurs</label>
        <select id="nbJoueurs" name="nbJoueurs" class="form-control">
          <option value="3">3 Joueurs</option>
          <option value="4">4 Joueurs</option>
          <option value="5">5 Joueurs</option>
        </select>
        <input type="image" src="images/button_reserver.png" class="bouton-reserver"/>
          
        </input>

      </div>
    </fieldset>
  </form>
  <a href="page-1.php">
    <img class="bouton-accueil" src="images/button_accueil.png" />
  </a>

</body>

</html>