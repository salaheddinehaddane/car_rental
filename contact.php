<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
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
</head>

<body style="font-family: Barlow, sans-serif;">
<?php
include ('navbar.php');
?>

    <div style="margin:50px ;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center" id="contact" style="font-weight: bold;color: #eb5f26;line-height: 55px;">Nous contacter</h1>
          </div>
        </div>
      </div>
    </div>


    <form method="post">
<div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
          <label for="nom">Nom*</label>
            <input type="text" placeholder="Entrez SVP votre nom" maxlength="100" class="form-control" name="nom" id="nom" required>
          </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
            <label for="email">Email*</label>
              <input type="email" placeholder="Entrez SVP votre email" maxlength="100" class="form-control" name="email" id="email" required>
            </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label for="telephone">Télephone*</label>
                <input type="text" id="telephone" placeholder="Votre numéro de Tele .."  maxlength="50" class="form-control" name="telephone" id="telephone">
              </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="objet">Objet*</label>
                <input type="text" placeholder="Entrez SVP votre objet"  maxlength="100" class="form-control" name="objet" id="objet" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="message">Message *</label>
                <textarea maxlength="5000" placeholder="Entrez SVP votre message" rows="6" class="form-control" name="message" id="message" required></textarea>
              </div>
            </div>
          </div>

          <div class="row">
				<div class="col-md-12">
					<input type="submit" value="Envoyer" class="btn btn-success btn-lg pull-left" name="envoyer" />
				</div>
			</div>
        </form>

        <div class="row mt-4">
        <div  class="col-md-4">
          <h5>Address: <small class="text-muted">Rue 102, Marrakech-Maroc</small></h5>
          <h5>Email: <small class="text-muted">support@loc62.com</small></h5>
          <h5>Télephone: <small class="text-muted">+212 6121223 || +212 6121223</small></h5>
        </div>
        <div  class="col-md-8">
           <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6794.868262422492!2d-8.058193060717157!3d31.621961874516447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe936eb880679%3A0xc724f60008c4e517!2sLyc%C3%A9e%20Mohamed%20VI!5e0!3m2!1sen!2sma!4v1622475704824!5m2!1sen!2sma"
            style="border:0; width:100%; height:100%;" loading="lazy"></iframe></p>
        </div>
      </div>
</div>



<?php
if(isset($_POST['envoyer'])){
$nom=$_POST['nom'];
$emailClient=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['objet'];
$mailTo="salaheddinehd9@gmail.com";
$header="De: ".$emailClient;
$txt="Vous avez un message de ".$nom."\n\n".$message;

mail($mailTo,$subject,$txt,$header);

echo "<script>alert('Message envoyé!');
      window.location.href='index.php?mailsend';
</script>";


/* Test PHPmailer */
}
 ?>
<?php include ('footer.php') ;
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/-Fading-Carousel-Animated-Caption-BS4-.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>
<script src="assets/js/Slider-laptop.js"></script>
<script src="assets/js/Testimonial-Slider-9.js"></script>
</body>
</html>
