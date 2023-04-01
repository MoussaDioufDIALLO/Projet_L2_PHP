<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>

	<a href="logout.php">Logout</a>
    <label class="logout"></label>

	<br>
	Hello, <?php echo $user_data['user_name'];  ?>

	<h1>cliquez vous volez✈</h1>
        
        <!-- lier la page html avec le css pour ajouter le design -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!-- ajouter une police d'ecriture -->
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

        <!-- je prend en compte les accents -->
        <meta charset="utf-8">

       <!-- Created by TopStyle Trial - www.topstyle4.com -->

	<h3></h3>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
 <section>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="container" style="max-width: 50%;"></div>
    <div class="text-center mt-5 mb-4"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <p text_align="left">
	<form action="livesearch.php" method="post">
		Votre destination<input type="text" placeholder="Entrer votre destination" name="villearr" required>
		<button type="submit" name="submit">Search</button>
	</form>
    </p>
    </main>
    <p>
    <form action="recup123.php" method="POST">
	
    <table >    
    <div class="form-group">
                        <label for="depart">Date de départ</label>
                        <input type="date" name="dat" id="depart" value="13/04/2020">

                        <label for="retour">Date de Retour</label>
                        <input type="date" name="j_retour" id="retour" value="14/04/2020">
                    </div>
	<tr><td><b>Nom passager :</b></td></tr> <br>
	<tr><td><input type="text" name="nom"></td></tr>
	<tr><td><b>Prenom passager :</b></td></tr> <br>
	<tr><td><input type="text" name="prenom"></td></tr>
        <label for="Ville de départ">Choisissez la ville de départ:</label>
            <select id="ville de depart" name="villedep">
             <option value="Paris">Paris</option>
             <option value="Bordeaux">Bordeaux</option>
             <option value="Toulouse">Toulouse</option>
             <option value="Lyon">Lyon</option>
             <option value="New York">New York</option>
             <option value="Beauvais">Beauvais</option>
             <option value="Marseille">Marseille</option>
             <option value="Mulhouse">Mulhouse</option>
             <option value="Nantes">Nantes</option> <br>
            </select>
        <label for="Ville d'arrivée">Choisissez la ville d'arrivée:</label> 
            <select id="ville d'arrivée" name="villearr">
             <option value="Paris">Paris</option>
             <option value="Bordeaux">Bordeaux</option>
             <option value="Toulouse">Toulouse</option>
             <option value="Lyon">Lyon</option>
             <option value="New York">New York</option>
             <option value="Beauvais">Beauvais</option>
             <option value="Marseille">Marseille</option>
             <option value="Mulhouse">Mulhouse</option>
             <option value="Nantes">Nantes</option> <br>
        </select>
	<tr><td><input type="submit" name="submit" value="Réserver" class="bouton"></td></tr>
	</table>
	</form>
	</div>
    </p>
    <?php
        include_once ('liste_vol_réservations.php');
    ?>
</body>
</html>