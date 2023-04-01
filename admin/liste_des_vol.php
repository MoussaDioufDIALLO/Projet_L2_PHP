<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
    <ul class="menu">
        <li><a href="../index.php">Acceuil</a></li>
        <li><a href="../logout.php">Déconnexion</a></li>
        <li><a href="administration.php">Administration</a></li>
        <li><a href="liste_des_pilotes.php">Liste des pilotes</a></li>
        <li><a href="liste_des_avions.php">Liste_des_avions</a></li>
        <li><a href="liste_des_vol.php">Liste des vols</a></li>
        
    </ul>
</head>
<body>
<h1>Liste des vols</h1>
<?php
session_start();
if($_SESSION['mdp'])
{
    include_once("../connection.php");
    $vol1=mysqli_query($con,"SELECT * FROM vol") or die('erreur');
   if ($vol1->num_rows > 0) {
        // Afficher les résultats de chaque ligne
        while($row = $vol1->fetch_assoc()) {
          echo "id: " . $row["idvol"]. " - idpilote: " 
          . $row["idpil"]. "idavion: " .  
          $row["idav"].   "ville_dep: " . $row["villedep"]. "villearr: " . $row["villearr"]. "date : " .$row["dat"]."<br>";
        }
      } else {
        echo "0 results";
      }
     
}
include "../liste_vol_réservations.php";
?>
 
</body>
</html>