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
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:300" rel="stylesheet">
    <!-- Feuille de style Personnalisée -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Escape Game</title>
    <link rel="stylesheet" href="page2-superviseur.css" />
    <link rel="stylesheet" href="uniform" />
    <link  href="style.css"  rel="stylesheet"/>
    <link  href="font.css"  rel="stylesheet"/>
</head>

<body id="page2-superviseurs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
            <form action="liensuperviseur.php" method="post">
                <h2> 3 à 5 joueurs </h2>

                <h3> Sélectionner la date et l’heure de votre réservation </h3>

                <!-- Champ -->
                
                <div class="form-group">
                    <div class=" datepicker date input-group shadow-sm">
                        <input type="date" placeholder="Choisir une date" id=date name=date class="form-control py-4 px-4" required>
                   
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container-1">
        <table class="table table-bordered table-light">

            <tr>
            <th><input name="heure" id="heure" type="submit" value="7H30-9H30"></th>

            <tr>
            <th><input name="heure" id="heure" type="submit" value="9h30-11H30"></th>
            </tr>
            <tr>
            <th><input name="heure" id="heure" type="submit" value="11h30-13H30"></th>
            </tr>
            <tr>
            <th><input name="heure" id="heure" type="submit" value="13h30-15H30"></th>
            </tr>
            <tr>
            <th><input name="heure" id="heure" type="submit" value="15h30-17H30"></th>
            </tr>
            <tr>
            <th><input name="heure" id="heure" type="submit" value="17h30-19H30"></th>
            </tr>
            <tr>
            <th><input name="heure" id="heure" type="submit" value="19h30-21H30"></th>
            </tr>
            </tbody>
        </table>
      
    </div>
    </form>
    <a href="page1-superviseur.php">
        <img class="Maison" src="images/Maison.png" />
    </a>
    
    <a href="profil.php">
        <img class="button-profil" src="images/button_profil.png" />
    </a>
    <a href="connexion.php">
        <img class="button-deconnexion" src="images/button_deconnexion.png" />
    </a>

    
   

</body>

</html>