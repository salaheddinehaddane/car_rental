<?php
include("connexion.php");
session_start();
?>
<?php
  if(isset($_SESSION['Nom'])){
    echo "Bienvenue ".$_SESSION['Nom'];
  }
  //else {header("Location:authentification.php");}
  if(isset($_POST['deconnexion'])){
    //session_destroy();
    //cree une button avec href en deconnexion.php
  }

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
 
 
<?php 
     include('navbar.php');
?>

</body>
</html>