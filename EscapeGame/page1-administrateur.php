<!DOCTYPE html>
<html lang="en">
<?php 
include 'connexion.inc.php';
$sql = 'SELECT * from superviseur ';
$result = $conn->query($sql);

if(!$result) {
  die ("mauvaise requête : " . $conn->error);
}

if(isset($_GET['action']) && $_GET['action'] == "supprimer") {

  $id = $_GET['id'];

  $sql= "DELETE FROM superviseur WHERE id = '".$id."' and id != 1";
  $conn->query($sql);

  header("Location: page1-administrateur.php");
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
  <link  href="page1-administrateur.css"  rel="stylesheet"/>
  <link  href="uniform.css"  rel="stylesheet"/>
  <link  href="table.css"  rel="stylesheet"/>
  <link  href="style.css"  rel="stylesheet"/>
  
</head>

<body id="page1-administrateur">
 
  
<div class="table-wrapper-scroll my-custom-scrollbar">
<table class="table table-striped w-auto text-center">

    
    <thead>
      <tr>
        <th>Utilisateur</th>
        <th>Nom / Prénom</th>
        <th>E-MAIL</th>
        <th>mot de passe</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    
    <tbody>
      <?php
        while($row = $result->fetch_assoc()){

        echo"<tr id = 'row' class='table-info'>
          <td>". $row ['identifiant'] ."</td>
          <td>". $row['nom']." ". $row['prenom']."</td>
          <td>". $row['email']."</td>
          <td>". $row['mot_de_passe']."</td>
          <td>
            <a href=\"modification-superviseur.php?action=modifier&id=".$row ['id']."\">modifier
          </td>
          <td>
            <a href=\"page1-administrateur.php?action=supprimer&id=".$row ['id']."\">Supprimer
          </td>
        </tr>";
        }
              
            
      ?>
     

    </tbody>
    </table>

</div>
    <!--Table body-->


  </table>
  <!--Table-->
  <a href="page1-administrateur.php">
    <img class="Maison" src="images/Maison.png" />
  </a>
  <a href="page2-administrateur.php">
    <img class="ajouter-superviseur" src="images/button_ajouter-superviseur.png" />
  </a>
  <a href="profil.php">
    <img class="button-profil" src="images/button_profil.png" />
  </a>
  <a href="connexion.php">
    <img class="button-deconnexion" src="images/button_deconnexion.png" />
  </a>

</body>

</html>