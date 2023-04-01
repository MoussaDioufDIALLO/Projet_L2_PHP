
<?php
   // Vérifier si le formulaire est soumis 
if (!empty($_POST['dat']) && !empty($_POST['j_retour'])
&& !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['villedep']) && !empty($_POST['villearr']) 
&& !empty($_POST['submit']));

{
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs comme clé 
       */
     $depart = $_POST['dat']; 
     $retour = $_POST['j_retour']; 
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $villedepart=$_POST['villedep'];
     $villearrivee=$_POST['villearr'];

     // afficher le résultat
  }
  include_once("connection.php");
    $requete="INSERT INTO vol ( nom, prenom, dat,
    j_retour, villedep, villearr)
    VALUES ('$nom', '$prenom', '$depart', '$retour', '$villedepart', '$villearrivee')";
    mysqli_query ($con, $requete) or die 
    ("Erreur dans l'insertion des données: " .mysqli_error($con));

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>