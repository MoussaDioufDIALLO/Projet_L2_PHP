<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin/sty.css">
</head>
<body>
    <style>
      * {
    margin: 0;
    padding: 0;
    outline: none;
}
 
  
    </style>
    <p> <a href="index.php" text-align=center position="absolute">Retournez à la page d'accueil</a></p><br>
    <?php
    if (isset($_POST['submit'])) {
        // Connection à la base de données
        $connection_string = new mysqli("localhost", "root", "", "aerienne");
        
    
        $searchString = mysqli_real_escape_string($connection_string, trim(htmlentities($_POST['villearr'])));

        // S'il y'a une erreur de connection, notifiez
        // the user, and Kill the script.
        if ($connection_string->connect_error) {
            echo "Failed to connect to Database";
            exit();
        }

       
        if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 0) {
            echo "Vous ne pouvez pas réserver pour cette";
            exit();
        }

        $searchString = "%$searchString%";

        // requéte
        $sql = "SELECT * FROM vol WHERE villearr LIKE ?";

        // Prepare, bind, and execute the query
        $prepared_stmt = $connection_string->prepare($sql);
        $prepared_stmt->bind_param('s', $searchString);
        $prepared_stmt->execute();

        // Récupérer le résultat
        $result = $prepared_stmt->get_result();

        if ($result->num_rows === 0) {
            // Pas de résultat trouvé
            echo "Vous ne pouvez réserver à cette destination";
            // TSortir du scripte
            exit();

        } else {
            // Traiter les résultats
            while ($row = $result->fetch_assoc()) {
                #echo "<b>villearr </b>: ". $row['villearr'] . "<br />";
                #echo "<b>idvol r</b>: ". $row['idvol'] . "<br />";
                echo "<table border=2px solid black> <tr border=1px solid black> <th>idvol</th> <th>villearrive</th> <th>date</th>  </tr>
                <tr>
                <td>: ". $row['idvol']."</td>  <td>villearr.".$row['villearr']." </td>: ". $row['dat']."". $row['villedep'] ." <td></td> 
                </tr>
                </table>";
                
            } 
            ?>
            <section>
                <p> <a href="index.php" text-align="left">"Vous voulez réservez à cette destination cliquez ici"</a>  </p>
            </section>
            <?php
            //  fin de la boucle while 
        } // end of if($result->num_rows)

    } else { // L'utilisateur accéde au scripte directement

        //  Les envoyer un message
        echo "Vous ne pouvez pas réserver à cette destination!";
        exit();
    }
?>

</body>
</html>
 