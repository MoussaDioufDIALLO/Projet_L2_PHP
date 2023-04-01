<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		//quelque chose a été postée 
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//Insérer les infotmations au niveau de la base de données  
			$query = "INSERT INTO users (user_id,user_name, password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

</style>

	 

	</style>

	<div id="box">
		
		<form method="post" class="azerty">
			<div align="center">S'inscrire</div>

			<input id="text" type="text" name="user_name" placeholder="username"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
			<p><a href="admin/administration.php">Accéder à la page des administrateurs</a></p>
		</form>
	</div>
	<link rel="stylesheet" href="styles.css">
</body>
</html>