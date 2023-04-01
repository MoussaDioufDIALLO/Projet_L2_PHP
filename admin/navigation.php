<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>

    <ul class="menu">
        <li><a href="../index.php">Acceuil</a></li>
        <li><a href="../logout.php">Déconnexion</a></li>
        <li><a href="administration.php">Administration</a></li>
        <li><a href="liste_des_pilotes.php">Liste des pilotes</a></li>
        <li><a href="liste_des_avions.php">Liste_des_avions</a></li>
        <li><a href="liste_des_vol.php">Liste des vols</a></li>
        
    </ul>


<!--<h1>Liste des pilotes</h1>
<?php
/*session_start();
if($_SESSION['mdp'])
{
    include_once("../connection.php");
    $reqpilote=mysqli_query($con,"SELECT * FROM pilote") or die('erreur');
   if ($reqpilote->num_rows > 0) {
        // Afficher les résultats de chaque ligne
        while($row = $reqpilote->fetch_assoc()) {
          echo "id: " . $row["idpil"]. " - Nom: " 
          . $row["nompil"]. " - dnaiss: " . $row["dnaiss"]. "addresse: " .  
          $row["adr"].   "téléphone: " . $row["tel"]. "salaire: " . $row["sal"]."<br>";
        }
      } else {
        echo "0 results";
      }
     
}
*/
?>
-->
</body>
</html>