<!DOCTYPE html>
<html lang="en">
<?php 
include 'connexion.inc.php';

$sql = 'SELECT * from creneau where id != 1 order by id';
$result = $conn->query($sql);

if(!$result) {
  die ("mauvaise requêt : " . $conn->error);
}



if(isset($_GET['action']) && $_GET['action'] == "supprimer") {

  $id = $_GET['id'];
  
  $sql= "DELETE FROM creneau WHERE id = '".$id."'";
  $conn->query($sql);
 
  header("Location: page1-superviseur.php");
  
} 

?>
<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Appel de la Feuille de style minifiée De La librairie Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Escape Game</title>
  <link  href="page1-superviseur.css"  rel="stylesheet"/>
  <link  href="uniform.css"  rel="stylesheet"/>
  <link  href="table.css"  rel="stylesheet"/>
  <link  href="style.css"  rel="stylesheet"/>
</head>

<body id="page1-superviseur">
  <!--Table-->
<!--  <table class="table table-striped w-auto text-center">-->

<div class="table-wrapper-scroll my-custom-scrollbar">
<table id="mon_tableau" class="table table-striped w-auto text-center">

    <!--Table head-->
    <thead>
  
      <tr>
        <th>Date</th>
        <th>Heure Créneau</th>
        <th>Réservé</th>
        <th>Infos joueur</th>
        <th></th>
      </tr>
    </thead>
    <!--Table head-->
    
    <!--Table body-->
    
    <tbody>
    
        <?php
        while($row = $result->fetch_assoc()){
          
        echo"<tr id = 'row' class='table-info'>
          <td>". $row ['date'] ."</td>
          <td>". $row ['heure'] ."</td>
          <td>". $row['reserve']."</td>
          <td>
          <a href=\"page1-superviseur.php?action='infos-joueur.php'&id=".$row ['id']."\">infos
          </td>

          <td>
            <a href=\"page1-superviseur.php?action=supprimer&id=".$row ['id']."\">Supprimer
          </td>

        </tr>";
        }
              
            
      ?>
  
        
    </tbody>
    </table>
    
          
     
    </div>
      
    <a href="page1-superviseur.php">
      <img class="Maison" src="images/Maison.png" />
    </a>
    <a href="page2-superviseur.php">
      <img class="ajouter-creneaux" src="images/button_ajouter-creneaux.png" />
    </a>
    <a href="profil.php">
      <img class="button-profil" src="images/button_profil.png" />
    </a>
    <a href="connexion.php">
      <img class="button-deconnexion" src="images/button_deconnexion.png" />
    </a>

</body>

</html>