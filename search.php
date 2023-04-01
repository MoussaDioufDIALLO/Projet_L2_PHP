<?php 
 include_once("connection.php");
 $stmt= $con->prepare("SELECT * from réservations where 'v_arrivée' like ? or 'v_depart' like ? ");
 $stmt-> execute([
    "%".$_POST['search']."%", "%".$_POST['search']."%"]);
    $resultat=$stmt-> fetchAll();
?>