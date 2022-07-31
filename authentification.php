<?php include("connexion.php"); session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Authentification</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/styles/styleAuthentification.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 login-box">
                <div class="col-md-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="row">
                <div class="col-md-12 login-title">
                    AUTHENTIFICATION
                </div>
              </div>

                    <div class="col-md-12 login-form">
                        <form method="post">
                            <div class="form-group">
                                <label class="form-control-label">LOGIN:*</label>
                                <input type="text" class="form-control" name="login" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">MOT DE PASSE*</label>
                                <input type="password" class="form-control" name="mdp" required>
                            </div>
                            <div class="row">
                            <div class="col-md-6 login-btm login-text" id="errour"></div></div>
                            <div class="row">
                            <div class="col-md-12 loginbttm">
                                <div class="col-md-6 login-btm login-button">
                                    <input type="submit" class="btn btn-outline-primary" name="envoyer" value="Entrer">
                                </div></div>
                            </div>
                        </form>
                    </div>
            </div>
        </div></div>
</body>
</html>


<?php
    if(isset($_POST['envoyer'])){
      $login = $_POST['login'];
      $mdp = $_POST['mdp'];
      $res=mysqli_query($conn,"select * from admin where login='$login' AND motPass='$mdp'");
      $row=mysqli_fetch_assoc($res);
      if(mysqli_num_rows($res) == 1){
        $_SESSION['Nom']=$row['nom'];
        $_SESSION['Prenom']=$row['prenom'];
        header("location:dashboard.php");
      }else {
        echo '<script type="text/javascript">;
                document.getElementById("errour").innerHTML= "Login n existe pas !";
                </script>';
      }
    }
?>
