<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">

    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/CarteVoiture.css">

    <title>LOC26</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins|Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
    <link rel="stylesheet" href="styleCarou.css">
</head>

<body style="font-family: Barlow, sans-serif;">
     <?php
     include('navbar.php');
?>


<div class="owl-carousel owl-theme">
        <div class="slide slide-1">
            <div class="slide-content">
                <h1>Bienvenue sur Loc26</h1>
                <p>Envie de louer une voiture à prix convenable ? Qu'attendez-vous ?</p>
                <button > <a href="reservation.php" style="border-style: none;color:#eb5f26;">Réserver ici </a></button>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">
                <h1>A l'aéroport et vous cherchez qui vous accompagnera à l'hotel ?</h1>
                <p>Nous vous offrons le Service Transfert à l'Aéroport . Des voitures propres, des chauffeurs souriants dans le respect des temps.</p>
                <button > <a href="reservation.php" style="border-style: none;color:#eb5f26;">Découvrez la suite </a></button>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">
                <h1>Vous avez des problèmes , ou  vous souhaiter savoir plus ?</h1>
                <p>N'hésitez pas!</p>
                <button > <a href="contact.php" style="border-style: none; color:#eb5f26;">Contactez-nous ici ! </a></button>
            </div>
        </div>

        <div class="slide slide-4">
            <div class="slide-content">
                <h1>Besoin de louer à longue durée ?</h1>
                <p>LOC 26 vous apporte les meilleures offres !</p>
                <button > <a href="reservation.php" style="border-style: none; color:#eb5f26;">Réserver maintenant </a></button>
            </div>
        </div>


    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom Javascript -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items:1,
                loop:true,
                nav:true,
                dots:true,
                autoplay:true,
                autoplaySpeed:1000,
                smartSpeed:1500,
                autoplayHoverPause:true
            });
        });
    </script>






    <div style="background-color: #eb5f26;padding: 43px;margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="fa fa-phone footer-contacts-icon"></span>
                    <p style="display: inline-block;vertical-align: middle;font-size:18PX;"><span class="new-line-span" style="color: white;font-size: 16px;">Disponnible 24h/7j</span><strong>(+212)6 2222222</strong></p>
                </div>
                <div class="col-md-4"><span class="fa fa-calendar footer-contacts-icon"></span>
                    <p style="display: inline-block;vertical-align: middle;font-size:18PX;font-family: Barlow, sans-serif;"><span style="color: white;font-size: 16px;">Tous les jours</span><br><strong>Lun- Dim 8.00 - 20.00</strong><br></p>
                </div>
                <div class="col-md-4"><span class="fa fa-map-marker footer-contacts-icon"></span>
                    <p style="display: inline-block;vertical-align: middle;font-size:18PX;font-family: Barlow, sans-serif;"><span style="color: white;font-size: 16px;">Maroc</span><br><strong>Marrakech rue 102</strong><br></p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" id="service" style="color: #eb5f26;" >Nos Services</h2>
                <p class="text-center">Bienvenue chez Loc26<br>Roulez, nous ferons le reste</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/locationLogo.jpg">
                    <h3 class="name">Location de voitures</h3>
                    <p class="description">Vous rêvez tous d'une voiture neuve? d'une marque bien déterminée? avec le prix le mieux adapté?<br>LOC26 propose une offre sur mesure à ses clients, quelles que soient leurs contraintes. </p><a href="reservation.php">Plus d'infos..</a></div>
                <div
                    class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/aeroportLogo.jpg">
                    <h3 class="name">Transfert Aéroport<br></h3>
                    <p class="description">Des voitures propres, des chauffeurs souriants dans le respect des temps. </p><a href="reservation.php"><span>Plus d'infos..</span><br><br></a></div>
            <div
                class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/guidLogo.jpg">
                <h3 class="name">Location longue durée</h3>
                <p class="description">Une excellente solution de financement et de gestion de flotte automobile. Simple, transparente, économique.. </p><a href="reservation.php">Plus d'infos..</a></div>
    </div>
    </div>
    </div>


    <?php
include ('footer.php');?>
</body>

</html>
