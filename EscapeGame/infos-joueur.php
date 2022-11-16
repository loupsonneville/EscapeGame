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
    <link rel="stylesheet" href="infos-joueur.css" />
    <link  href="uniform.css"  rel="stylesheet"/>
    <link  href="style.css"  rel="stylesheet"/>
</head>
</head>

<body id="infos-joueur">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Infos joueur</h1>
        <form action="validation-joueur.php" method="post">
            <fieldset>


                <div class="form-group">
                    <label for="nom">prenom</label>
                    <h4 class="form-control" id= 'nom' name= 'nom'>
                </div>
                <div class="form-group">
                    <label for="nom">nom</label>
                    <h4 class="form-control"> Dumat
                </div>
                <div class="form-group">
                    <label for="nom">Numero de téléphone</label>
                    <h4 class="form-control"> 06 52 14 27 14
                </div>
                <div class="form-group">
                    <label for="email">mail</label>
                    <h4 class="form-control"> MichelDumat@gmail.com
                </div>

                <div class="form-group">
                    <label for="selection">nombres joueurs</label>
                    <h4 class="form-control">3
                </div>

            </fieldset>
        </form>
    </div>

    <a href="page1-superviseur.php">
        <img class="Maison" src="images/Maison.png" />
    </a>
    <a href="profil.php">
        <img class="button-profil" src="images/button_profil.png" />
    </a>
    <a href="connexion.php">
        <img class="button-deconnexion" src="images/button_deconnexion.png" />
    </a>



    <!-- Extension jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Extension DATEPICKER -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Noyau JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script pour activation du datepicker -->
    <script src="main.js"></script>

</body>

</html>