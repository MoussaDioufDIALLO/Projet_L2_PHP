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
<h1 text-align="center">Liste des pilotes</h1>
<?php
session_start();
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
?> 
<?php
include_once "../connection.php";
?>
<html>
    <form action="insertion.php" method="post">
        <h1>Insertion d'un nouveau pilote</h1>

        <label for="nompil">
            Entrer le nom du nouveau pilote:
            <input type="text" name="nompil" id="nompil">
        </label>
        <label for="dnaiss">
            Entrer la date de naissance du nouveau pilote:
            <input type="text" name="dnaiss" id="dnaiss">
        </label>
        <label for="adr">
            Entrer l'adresse du nouveau pilote:
            <input type="text" name="adr" id="adr">
        </label>
        <label for="tel">
            Entrer le n° téléphone du nouveau pilote:
            <input type="text" name="tel" id="tel">
        </label>
        <label for="sal">
            Entrer le salaire du nouveau pilote:
            <input type="text" name="sal" id="sal">
        </label>
        <input type="submit" value="ajouter">
    </form>
</html>
</body>
</html>