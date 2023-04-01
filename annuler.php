<?php
session_start();




//Se connecter à la BDD
require_once "connection.php";

//Ecrire la requête
$requete123 = "DELETE FROM réservations WHERE  = $num";

//supprimer un candidat de la table participant.
mysqli_query($bdd, $requete) or die("Une erreur est survenue lors de la suppression : ".mysqli_error($con));
header( "Refresh:1; url=liste_participants.php");
?>