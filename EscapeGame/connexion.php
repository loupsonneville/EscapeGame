<!DOCTYPE html>
<html lang="en">

<?php 
include 'connexion.inc.php';

?>

<head>
  <meta charset='utf-8'>
  <title>Réserver Un Créneau</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Appel de la Feuille de style minifiée De La librairie Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Appel de la Feuille de style minifiée De l'extension Datepicker -->
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- Appel de la Bibliothèque Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Appel de la police Montserrat et Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:300" rel="stylesheet">
  <!-- Feuille de style Personnalisée -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Escape Game</title>
  <link rel="stylesheet" href="connexion.css" />
  <link rel="stylesheet" href="uniform" />
  <link  href="style.css"  rel="stylesheet"/>
</head>

<body id="connexion">

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <form action="lienconnexion.php" method="post">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Connexion </h2>
                <p class="text-white-50 mb-5">Saisissez votre mot de passe et votre nom d'utilisateur !</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="NomUtilisateur" id="NomUtilisateur" class="form-control form-control-lg " required/>
                  <label class="form-label" for="NomUtilisateur">Nom d'utilisateur </label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password"  name="mot_de_passe" id="mot_de_passe" class="form-control form-control-lg" required/>
                  <label class="form-label" for="mot_de_passe">mot de passe </label>
                </div>

                <a href="page1-administrateur.php">
                  <button class="btn1btn-outline-light btn-lg px-5" type="submit">Connexion </button>
                </a>
              <h3><?php if(isset($_GET['text']))
               {
                echo $_GET['text'];
                  }?></h3>
              </div>
            </div>
          </div>
         </form>
        </div>
      </div>
    </div>
  </section>
  <a href="accueil-Joueur.php">
    <img class="bouton-accueil" src="images/button_accueil.png" />
  </a>
</body>

</html>