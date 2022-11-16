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
    <link rel="stylesheet" href="page2.css" />
    <link rel="stylesheet" href="uniform" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="font.css" />

    
</head>

<body id="reservation-joueur">
    <form action="creneauxDispo.php" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">

                <h2> 3 à 5 joueurs </h2>

                <h3> Sélectionner la date et l’heure de votre réservation </h3>

                <!-- Champ -->
                <div class="form-group">
                    <div class=" datepicker date input-group shadow-sm">
                        <input type="date" placeholder="Choisir une date" id=date name=date class="form-control py-4 px-4" Required>
                        <h5> <?php if(isset($_GET['text']))
               {
                echo $_GET['text'];
                  }?>
                  </h5>
                  
                 

                    </div>
                    </div>
                </div>
    
            </div>
            
     
        </div>
    </div>

    <div class="container-1">
        <table class="table table-bordered table-light">

        <?php 
            include 'connexion.inc.php';

            $resultat = $conn->query("SELECT date, heure, reserve FROM creneau");
            
		while ($crenneau = $resultat->fetch_assoc()) {
        
                
                
                if ($crenneau['reserve'] == "non"){
                    ?>
                <tr>
                    <th><input name="heure" id="heure" type="submit" value="<?php echo $crenneau['heure'];?>"></th>
                </tr>
            <?php
            }
        }
        ?>
            </tbody>
        </table>
    </div>
</form>
    <a href="accueil-Joueur.php">
        <img class="bouton-accueil" src="images/button_accueil.png" />
    </a>
</body>

</html>