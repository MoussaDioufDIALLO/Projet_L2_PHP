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
<h1 text-align="center">Liste des avions</h1><br>

<p> 
    <br>
    <?php
session_start();
if($_SESSION['mdp'])
{
    include_once("../connection.php");
    $plane=mysqli_query($con,"SELECT * FROM avion") or die('erreur');
   if ($plane->num_rows > 0) {
        // Afficher les résultats de chaque ligne
        while($row = $plane->fetch_assoc()) {
          echo "id: " . $row["idav"]. " - Type_avion: " 
          . $row["typeav"]. "capacité: " .  
          $row["cap"].   "localité: " . $row["loc"]. "Etat: " . $row["remarq"]."<br>";
        }
      } else {
        echo "0 results";
      }
     
}
?> 
</p>
 
<?php
include_once "../connection.php";
?>
<html>
    <form action="insertion_avion.php" method="post">
        <h1>Insertion de nouveux avions </h1>

        <label for="typeav">
            Entrer le tpe d'avion:
            <input type="text" name="typeav" id="typeav">
        </label>
        <label for="cap">
            Entrer la capacité de l'avion:
            <input type="text" name="cap" id="cap">
        </label>
        <label for="loc">
            Entrer l'adresse de localisation de l'avion:
            <input type="text" name="loc" id="loc">
        </label>
        <label for="remarq">etat de l'avion:
            <select id="remarq" name="remarq">
             <option value="En service">En service</option>
             <option value="En panne">En panne</option>
        </label>
         <label for=""> <input type="submit" value="ajouter"><br>
    </form></label>  
        
</html>
</body>
</html>