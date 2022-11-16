
<?php 

include 'connexion.inc.php';
$NomUtilisateur=$_POST['NomUtilisateur']; 
$mot_de_passe=$_POST['mot_de_passe']; 
$sql1 = "SELECT *FROM superviseur WHERE mot_de_passe = '".$mot_de_passe."' and identifiant = '".$NomUtilisateur."' and admin = 0";
$sql2 = "SELECT *FROM superviseur WHERE mot_de_passe = '".$mot_de_passe."' and identifiant = '".$NomUtilisateur."' and admin = 1";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);



if($row = $result1->fetch_assoc())
{
   header("Location: page1-superviseur.php");
} 
elseif($row = $result2->fetch_assoc())
{
   header("Location: page1-administrateur.php");
} 
else{
   $text="Utilsateur ou mot de passe entré incorrect";
   header("Location: connexion.php?text=".$text);
   
}
