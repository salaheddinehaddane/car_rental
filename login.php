<?php

include ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    >
  </script>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Fading-Carousel-Animated-Caption-BS4-.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop-1.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php  include ("connexion.php");

if (isset($_POST['ok'])){

    $login=($_POST['login']);  
    $mail=($_POST['mail']); 
     $mdp=$_POST['mdp'];

  @mysqli_query($conn,"INSERT INTO client_inscrit 
  Values ('NULL','$mail ','$login' ,MD5('$mdp')   )");

  echo "ajouté avec succes";
}

?>

    <title>Inscrivez ou Connectez vous pour commencer votre réservation</title>
</head>
<body>

<?php 
include('navbar.php');
?>


<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
       
        <form action="#" class="sign-in-form" method="POST">
       
          <h2 class="title">Connexion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="login_in" placeholder="Login" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp_in" placeholder="Mot de Passe" />
            </div>
            <input type="submit" value="submit" name="submit" class="btn solid" />
        
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <form action="login.php" class="sign-up-form" method="POST">

            <h2 class="title">Inscription</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="login" placeholder="Login" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="login" name="mail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp" placeholder="Mot de Passe" />
            </div>
            <input type="submit" class="btn" value ="ok" name="ok" />
            
            
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Besoin d'un compte ?</h3>
            <p>
              Il vous suffit de cliquez en bas pour commencer !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inscription
            </button>
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Déja membre?</h3>
            <p>
              Connectez-vous !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Connexion
            </button>
          </div>
          <img src="register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
          <script src="app.js"></script>

<?php
include ('footer.php') ;
?>
</body>
</html>

