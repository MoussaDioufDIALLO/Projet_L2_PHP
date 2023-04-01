<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "aerienne";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
<link rel="stylesheet" href="styles.css">
</body>
</html>