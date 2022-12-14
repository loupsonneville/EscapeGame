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
  

  <!-- Main CSS-->
  <link href="modification-superviseur.css" rel="stylesheet" media="all">
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
          <h2 class="title">Modification Profil</h2>
          <form method="POST">
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Adresse Mail</label>
                  <input class="input--style-4" type="text" name="first_name">
                </div>
              </div>

            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Nom</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="text" name="birthday">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="input-group">
                  <label class="label">Pr??nom</label>
                  <input class="input--style-4" type="text" name="Pr??nom">
                </div>
              </div>

            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Nom Utilisateur</label>
                  <input class="input--style-4" type="email" name="email">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Mot de passe</label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
            </div>
            <div class="p-t-15">
             
              <button class="btn btn--radius-2 btn--blue" type="submit"> <a href="page1-administrateur.php">Modifier Profil</button>
            
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
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->