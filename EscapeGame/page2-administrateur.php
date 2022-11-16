<!DOCTYPE html>
<html lang="en">
<?php 
include 'connexion.inc.php';

?>
<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  <title>Au Register Forms by Colorlib</title>

  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Vendor CSS-->
  <link  href="uniform.css"  rel="stylesheet"/>

  <!-- Main CSS-->
  <link href="page2-administrateur.css" rel="stylesheet" media="all">
  <link  href="uniform.css"  rel="stylesheet"/>
  <link  href="style.css"  rel="stylesheet"/>
  <link  href="table.css"  rel="stylesheet"/>
  <link  href="formulaire.css"  rel="stylesheet"/>
  
</head>

<body>
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Ajouter Profil</h2>
          <form action="lienadmin.php" method="post">
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Adresse Mail</label>
                  <input class="input--style-4" type="email" id="email" name="email" require>
                </div>
              </div>

            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Nom</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="text" name="nom" id="nom" require>
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="input-group">
                  <label class="label">Prénom</label>
                  <input class="input--style-4" type="text" name="Prenom" id="Prenom">
                </div>
              </div>

            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Nom Utilisateur</label>
                  <input class="input--style-4" type="text" name="nomUtilisateur" id="nomUtilisateur">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Mot de passe</label>
                  <input class="input--style-4" type="password" name="Mdp" id="Mdp">
                </div>
              </div>
            </div>
            <div class="p-t-15">
          
              <button class="btn btn--radius-2 btn--blue " type="submit"> Créer Profil</button>
              
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <a href="page1-administrateur.php">
    <img class="Maison" src="images/Maison.png" />
   </a> 
   <a href="profil.php">
    <img class="button-profil" src="images/button_profil.png" />
   </a>
   <a href="connexion.php">
    <img class="button-deconnexion" src="images/button_deconnexion.png" />
   </a>
  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->