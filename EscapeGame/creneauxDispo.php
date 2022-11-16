
<?php 
include 'connexion.inc.php';
$dateDispo=$_POST['date']; 
$heureDispo=$_POST['heure']; 
$sql= "SELECT *FROM creneau WHERE date = '".$dateDispo."' and heure = '".$heureDispo."' and reserve = 'non'";
$result = $conn->query($sql);


if($row = $result->fetch_assoc())
{
   header("Location: reservation-joueur.php");
} 

else{
 
   $text="Date indisponible";
   header("Location: dateHeure-joueur.php?text=".$text);
   
   
}
?>
<?php 
$sql1= "UPDATE creneau SET reserve = 'oui' WHERE date = '".$dateDispo."' and heure = '".$heureDispo."'";
$result1 = $conn->query($sql1);
?>