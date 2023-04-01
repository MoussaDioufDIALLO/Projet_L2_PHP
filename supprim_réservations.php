 <?php

 //se connecter à la BDD.
require_once "connection.php";
$id= $_GET['idvol'];

//Se connecter à la BDD
 

//Ecrire la requête
$requete = "DELETE FROM vol WHERE idvol = $id";

//supprimer un candidat de la table participant.
mysqli_query($con, $requete) or die("Une erreur est survenue lors de la suppression : ".mysqli_error($con));
header( "Refresh:1; url=liste_vol_réservations.php");
?>