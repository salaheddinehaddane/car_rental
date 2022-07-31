
<?php
session_start();
include("connexion.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Paiement_LOC26</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style_paiement.css" /> -->
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">



</head>
<body style="font-family: Barlow, sans-serif;">
<?php
     include('navbar.php');
?>




<?php
if(isset($_GET['id'])){
  $res=mysqli_query($conn,"SELECT * FROM voiture WHERE No_Imm='{$_GET['id']}'");
  $row=mysqli_fetch_assoc($res);
}
 ?>



 <div style=" margin:20px 0px;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1 class="text-center" style="font-weight: bold;color: #eb5f26;line-height: 66px;">Paiement</h1>
       </div>
     </div>
   </div>
 </div>

 <!-- <div class="container">

 		<div class="row">
      <div class="col-md-3">
      </div>
 			<div class="col-md-6">
 				<h4 class="heading-primary text-center">Informations de votre réservation</h4>
 				<div style="background-color:#F3F3F3;" class="alert">
 					<ul class="list list-icons list-dark mt-xlg">
					 <?php
 						echo"<li>Modèle choisi :".$row['Marque']."</li> " ;
						 echo "<li>Catégorie :". $row['Categorie']."</li>";
 						echo"<li>Lieu de départ : ".$_SESSION['lieu_dep']."</li>";
 						echo"<li>Date de départ :".$_SESSION['date_dep']."</li>";
 						echo"<li>Lieu de retour : ".$_SESSION['park_ret']."</li>";
 						echo"<li>Date de retour : ".$_SESSION['date_ret']." </li>" ;
 					  echo"<li>Prix/jour : ".$row['Prix_Jour']." DH</li>";
            echo"<li>Prix/semaine : ".$row['Prix_Semaine']." DH (réduction de 25% par jour)</li>";
					 ?>
         </ul>
       </div>
     </div>
     <div class="col-md-3">
     </div>
   </div>
 </div> -->




 <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->

 <!-- <div class="container">

             <div class="row">
                 <form method="post">


                     <div class="col-md-6">
                         <div >Saisez vos cordonnés</div>
                         <div>

                            <div class="row">
                              <div class="form-group">
                                  <div class="col-md-12"><strong>Pays:</strong></div>
                                  <div class="col-md-12">
                                      <input type="text" class="form-control" name="country" value="" />
                                  </div>
                              </div>
                            </div>
                             <div class="form-group">
                                 <div class="col-md-12">
                                     <strong>Prenom:</strong>
                                     <input type="text" name="first_name" class="form-control" value="" />
                                 </div>
                                 <div class="col-md-12 ">
                                     <strong>Nom:</strong>
                                     <input type="text" name="last_name" class="form-control" value="" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Addresse:</strong></div>
                                 <div class="col-md-12">
                                     <input type="text" name="address" class="form-control" value="" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Ville:</strong></div>
                                 <div class="col-md-12">
                                     <input type="text" name="city" class="form-control" value="" />
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                 <div class="col-md-12">
                                     <input type="text" name="zip_code" class="form-control" value="" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Télephone:</strong></div>
                                 <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Email:</strong></div>
                                 <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                             </div>
                         </div>
                     </div>


                     <div class="panel panel-info">
                         <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span>Les informations de paiement</div>
                         <div class="panel-body">
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Type de carte:</strong></div>
                                 <div class="col-md-12">
                                     <select id="CreditCardType" name="CreditCardType" class="form-control">
                                         <option value="5">Visa</option>
                                         <option value="6">MasterCard</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>Numéro de la carte:</strong></div>
                                 <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12"><strong>CVV:</strong></div>
                                 <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12">
                                     <strong>Date d'expiration</strong>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <select class="form-control" name="">
                                         <option value="">Mois</option>
                                         <option value="01">01</option>
                                         <option value="02">02</option>
                                         <option value="03">03</option>
                                         <option value="04">04</option>
                                         <option value="05">05</option>
                                         <option value="06">06</option>
                                         <option value="07">07</option>
                                         <option value="08">08</option>
                                         <option value="09">09</option>
                                         <option value="10">10</option>
                                         <option value="11">11</option>
                                         <option value="12">12</option>
                                 </select>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <select class="form-control" name="">
                                         <option value="">Année</option>
                                         <option value="2015">2015</option>
                                         <option value="2016">2016</option>
                                         <option value="2017">2017</option>
                                         <option value="2018">2018</option>
                                         <option value="2019">2019</option>
                                         <option value="2020">2020</option>
                                         <option value="2021">2021</option>
                                         <option value="2022">2022</option>
                                         <option value="2023">2023</option>
                                         <option value="2024">2024</option>
                                         <option value="2025">2025</option>
                                         <option value="2026">2026</option>
                                         <option value="2027">2027</option>
                                         <option value="2028">2028</option>
                                         <option value="2029">2029</option>
                                         <option value="2030">2030</option>
                                         <option value="2031">2031</option>
                                 </select>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12">
                                     <span>Cartes supporté.</span>
                                 </div>
                                 <div class="col-md-12">
                                   <i class="fa fa-cc-visa"></i>
                                   <i class="fa fa-cc-mastercard"></i>

                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <button type="submit" class="btn btn-primary btn-submit-fix">Payer</button>
                                 </div>
                             </div>
                         </div>
                     </div>



                 </form>
             </div>

     </div> -->



<?php
include ('footer.php');
?>

 </body>
 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 </html>
