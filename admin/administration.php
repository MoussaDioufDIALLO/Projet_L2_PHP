 <?php
 session_start();
 if(isset($_POST["valider"])){
    if(!empty('pseudo') AND !empty($_POST['mdp'])){
     $pseudo_par_defaut="admin";
     $mdp_par_defaut="admin1234";
     $pseudo_saisi=htmlspecialchars($_POST['pseudo']);
     $mdp_saisi=htmlspecialchars($_POST['mdp']);

     if ($pseudo_saisi==$pseudo_par_defaut AND $mdp_saisi==$mdp_par_defaut){
        $_SESSION['mdp']=$mdp_saisi;
        header("location: navigation.php");
     }else
     {
        echo "Votre mot de passe est incorrecte"; }
    }
 else{
    echo"Veuillez compléter tous les champs";
 }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion-admin</title>
    <link rel="stylesheet" href="ombres.css">
 </head>
 <body>
 <form action="" method="post" align="center">
    <p>Espace de connexion de l'admin</p>
    
    <input type="text" name="pseudo" autocomplete="off" placeholder="pseudo">
    <br>
    <input type="password" name="mdp" placeholder="password">
    <br><br>
    <input type="submit" name="valider">
    <p>
        <a href="../login.php">Retourner à la page des utilisateurs</a>
    </p>
    
    </form>
    
 </body>
 </html>