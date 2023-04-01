<!DOCTYPE html>
<html>
<body>


<?php

//se connecter à la BDD.
require_once "connection.php";

//écrire la requête SQL pour récupérer la liste des participants.
$requetex = "SELECT  idvol, villedep, villearr, dat,  j_retour, prenom, nom
 FROM vol";

$liste_brute = mysqli_query($con, $requetex) or die("Erreur d'extraction ".mysqli_error($con));

//récupérer la liste des participants.
$liste_réservations= mysqli_fetch_all($liste_brute, MYSQLI_ASSOC);

if(!empty($_POST)){
    if(!empty($_POST['idvol'])){
        $idréserv=$_POST['idvol'];
        $requetex=mysqli_query($con, "DELETE FROM vol WHERE idvol=$id") or die('erreur');
    }

}
?>

<style>
    table, td, th{
        border: 1px solid;
        border-collapse: collapse;
    }
</style>
 
<h1>LISTE DES RESERVATIONS</h1>
<table>
    <tr>
        <th>Modification</th>
        <th>idvol</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>Ville_depart</th>
        <th>Ville_arrivée</th>
        <th>date</th>
        <th>j_retour</th>
    </tr>
    <?php foreach ($liste_réservations as $vol) : ?>

        <script>
            function confirm_supprim(){
                if (window.confirm("Voulez-vous vraiment supprimer la réservation  ?"))
                    (window.location.replace("supprim_réservations.php?idvol=<?=$vol['idvol'];?>"));
                    }
        </script>
        <tr>
            <?php echo "
                    <td><a onclick='confirm_supprim()' href=''>Supprimer</a></td>
                        <td>{$vol['idvol']}</td>
                        <td>{$vol['prenom']}</td>
                        <td>{$vol['nom']}</td> 
                        <td>{$vol['villedep']}</td>
                        <td>{$vol['villearr']}</td>
                        <td>{$vol['dat']}</td>
                        <td>{$vol['j_retour']}</td>
                    </form>"

                    ;?>
        </tr>
    <?php endforeach;?>
    
</table>
</body>
</html>