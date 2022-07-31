<?php
include("connexion.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reservation_LOC26</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/CarteVoiture.css">
</head>
<body style="font-family: Barlow, sans-serif;">
<?php
include ('navbar.php');?>


    <!-- the heading -->
    <div style=" margin:20px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center" style="font-weight: bold;color: #eb5f26;line-height: 66px;">Réservation</h1>
          </div>
        </div>
      </div>
    </div>

    <?php
    date_default_timezone_set("Africa/Casablanca");
    $dateAuj = date('d-m-Y');
    $dateAujPlus2= date("d-m-Y", strtotime('+2 days'));
      echo "<h5 class='text-center'>"." La date aujourd'hui: $dateAuj</h5>";
?>

                            <!-- 1ere ligne -->


      <div class="container">
                  <h4 class="mb-3">Réservation</h4>
                  <form method="POST">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
            		            <select name="parking_depart" id="parking_depart" class="form-control" required>
            		                <option value="" disabled selected >Lieu de départ</option>

                                <!-- Recuperer tous les adresses -->

                                <?php
                                  $res=mysqli_query($conn,"select * from parking");
                                  while($row=mysqli_fetch_assoc($res)){
                                    echo "<option value='".$row['Adresse']."'>".$row['Adresse']."</option>";
                                  }
                                 ?>
                                 <option value='aeroport'>Aéroport Marrakech</option>
            		            </select>
            	        </div>


                    </div>

                    <!-- date de depart -->
                    <div class='col-md-4'>
                	        <div class="form-group">
                		       	<div class="input-group">
                			       	<span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                		       		<input type="text" id="from" name="date_depart" class="form-control" placeholder="Date de départ" value="<?php echo $dateAuj ?>" required readonly />
                		       	</div>
                	        </div>
                		</div>

                    <!-- Heure de depart -->

                    <div class='col-md-4'>
              	        <div class="form-group">
              		        <div class="input-group">
              			        <span class="input-group-addon"><i class="fa fa-fw fa-clock-o fa-flip-horizontal"></i></span>
              	            	<select name="heure_depart" class="form-control" required>
              		            	<option value="" disabled selected >Heure de départ</option>
              		            			            	<option  value="00:00">00:00</option>
              		            	<option  value="00:30">00:30</option>
              		            			            	<option  value="01:00">01:00</option>
              		            	<option  value="01:30">01:30</option>
              		            			            	<option  value="02:00">02:00</option>
              		            	<option  value="02:30">02:30</option>
              		            			            	<option  value="03:00">03:00</option>
              		            	<option  value="03:30">03:30</option>
              		            			            	<option  value="04:00">04:00</option>
              		            	<option  value="04:30">04:30</option>
              		            			            	<option  value="05:00">05:00</option>
              		            	<option  value="05:30">05:30</option>
              		            			            	<option  value="06:00">06:00</option>
              		            	<option  value="06:30">06:30</option>
              		            			            	<option  value="07:00">07:00</option>
              		            	<option  value="07:30">07:30</option>
              		            			            	<option  value="08:00">08:00</option>
              		            	<option  value="08:30">08:30</option>
              		            			            	<option  value="09:00">09:00</option>
              		            	<option  value="09:30">09:30</option>
              		            			            	<option  value="10:00">10:00</option>
              		            	<option  value="10:30">10:30</option>
              		            			            	<option  value="11:00">11:00</option>
              		            	<option  value="11:30">11:30</option>
              		            			            	<option  value="12:00">12:00</option>
              		            	<option  value="12:30">12:30</option>
              		            			            	<option  value="13:00">13:00</option>
              		            	<option  value="13:30">13:30</option>
              		            			            	<option  value="14:00">14:00</option>
              		            	<option  value="14:30">14:30</option>
              		            			            	<option  value="15:00">15:00</option>
              		            	<option  value="15:30">15:30</option>
              		            			            	<option  value="16:00">16:00</option>
              		            	<option  value="16:30">16:30</option>
              		            			            	<option  value="17:00">17:00</option>
              		            	<option  value="17:30">17:30</option>
              		            			            	<option  value="18:00">18:00</option>
              		            	<option  value="18:30">18:30</option>
              		            			            	<option  value="19:00">19:00</option>
              		            	<option  value="19:30">19:30</option>
              		            			            	<option  value="20:00">20:00</option>
              		            	<option  value="20:30">20:30</option>
              		            			            	<option  value="21:00">21:00</option>
              		            	<option  value="21:30">21:30</option>
              		            			            	<option  value="22:00">22:00</option>
              		            	<option  value="22:30">22:30</option>
              		            			            	<option  value="23:00">23:00</option>
              		            	<option  value="23:30">23:30</option>
              		            		            	</select>

              		        </div>
              	        </div>
              	    </div>


                  </div>

                  <!-- 2 eme ligne -->

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
            		            <select name="parking_retour" class="form-control" required>
            		                <option value="" disabled selected>Lieu de retour</option>

                                <!-- Recuperer tous les adresses -->

                                <?php
                                  $res=mysqli_query($conn,"select * from parking");
                                  while($row=mysqli_fetch_assoc($res)){
                                    echo "<option value='".$row['Adresse']."'>".$row['Adresse']."</option>";
                                  }
                                 ?>
                                 <option value='aeroport'>Aéroport Marrakech</option>
            		            </select>
            	        </div>


                    </div>

                    <!-- date de retour -->

                    <div class='col-md-4'>
                	        <div class="form-group">
                		       	<div class="input-group">
                			       	<span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                		       		<input type="text" id="to" name="date_retour" class="form-control" placeholder="Date de retour" value="<?php echo $dateAujPlus2 ?>" required readonly />
                              <div id="inline-picker"></div>
                            </div>
                	        </div>
                		</div>

                    <!-- Heure de retour -->

                    <div class='col-md-4'>
              	        <div class="form-group">
              		        <div class="input-group">
              			        <span class="input-group-addon"><i class="fa fa-fw fa-clock-o fa-flip-horizontal"></i></span>
              	            	<select name="heure_retour" class="form-control" required>
              		            	<option value="" disabled selected >Heure de retour</option>
              		            			            	<option  value="00:00">00:00</option>
              		            	<option  value="00:30">00:30</option>
              		            			            	<option  value="01:00">01:00</option>
              		            	<option  value="01:30">01:30</option>
              		            			            	<option  value="02:00">02:00</option>
              		            	<option  value="02:30">02:30</option>
              		            			            	<option  value="03:00">03:00</option>
              		            	<option  value="03:30">03:30</option>
              		            			            	<option  value="04:00">04:00</option>
              		            	<option  value="04:30">04:30</option>
              		            			            	<option  value="05:00">05:00</option>
              		            	<option  value="05:30">05:30</option>
              		            			            	<option  value="06:00">06:00</option>
              		            	<option  value="06:30">06:30</option>
              		            			            	<option  value="07:00">07:00</option>
              		            	<option  value="07:30">07:30</option>
              		            			            	<option  value="08:00">08:00</option>
              		            	<option  value="08:30">08:30</option>
              		            			            	<option  value="09:00">09:00</option>
              		            	<option  value="09:30">09:30</option>
              		            			            	<option  value="10:00">10:00</option>
              		            	<option  value="10:30">10:30</option>
              		            			            	<option  value="11:00">11:00</option>
              		            	<option  value="11:30">11:30</option>
              		            			            	<option  value="12:00">12:00</option>
              		            	<option  value="12:30">12:30</option>
              		            			            	<option  value="13:00">13:00</option>
              		            	<option  value="13:30">13:30</option>
              		            			            	<option  value="14:00">14:00</option>
              		            	<option  value="14:30">14:30</option>
              		            			            	<option  value="15:00">15:00</option>
              		            	<option  value="15:30">15:30</option>
              		            			            	<option  value="16:00">16:00</option>
              		            	<option  value="16:30">16:30</option>
              		            			            	<option  value="17:00">17:00</option>
              		            	<option  value="17:30">17:30</option>
              		            			            	<option  value="18:00">18:00</option>
              		            	<option  value="18:30">18:30</option>
              		            			            	<option  value="19:00">19:00</option>
              		            	<option  value="19:30">19:30</option>
              		            			            	<option  value="20:00">20:00</option>
              		            	<option  value="20:30">20:30</option>
              		            			            	<option  value="21:00">21:00</option>
              		            	<option  value="21:30">21:30</option>
              		            			            	<option  value="22:00">22:00</option>
              		            	<option  value="22:30">22:30</option>
              		            			            	<option  value="23:00">23:00</option>
              		            	<option  value="23:30">23:30</option>
              		            		            	</select>

              		        </div>
              	        </div>
              	    </div>


                  </div>

                  <div class="row">
              	    <div class='col-md-4'>
              		    <div class="form-group">
              			    <label class="checkbox-inline">
              					<input type="checkbox" name="age_conducteur" checked style="margin-left: 0;width: auto;" required>
              					<span style="margin-left: 20px;">Agé entre 21 et 70 ans</span>
              				</label>
              		    </div>
              	    </div>
              	    <div class='col-md-4'>
              	    </div>
              	    <div class='col-md-4'>
              		    <div class="form-group" style="margin-bottom: 0;">
              	            <input type="submit" class="btn btn-danger mr-xs mb-sm" name="chercher" value="Chercher" />
              	      </div>
              	    </div>
                  </div>
                </form>
                <div class="row mt-3">
                  <div class="col-md-12">
                <a class="pull-left" href="ma_reservation.php"><i class="fa fa-calendar"></i> Ma réservation</a>
              </div>
            </div>
                </div>

<?php
 if(isset($_POST['chercher']))
  {
    $_SESSION['lieu_dep']=$_POST['parking_depart'];
    $_SESSION['park_ret']=$_POST['parking_retour'];
    $_SESSION['date_dep']=$_POST['date_depart'];
    $_SESSION['date_ret']=$_POST['date_retour'];
    $_SESSION['heure_dep']=$_POST['heure_depart'];
    $_SESSION['heure_ret']=$_POST['heure_retour'];

    echo "<div class='container mt-4'>";
   echo  "<section class='menu-content'>";
    $resVeh = mysqli_query($conn,"SELECT * FROM voiture WHERE etat =1");

    if(mysqli_num_rows($resVeh) > 0) {
        while($ListeVeh = mysqli_fetch_assoc($resVeh)){
            $No_Imm = $ListeVeh["No_Imm"];
            $Marque = $ListeVeh["Marque"];
            $Prix_Jour = $ListeVeh["Prix_Jour"];
            $Prix_Semaine=$ListeVeh["Prix_Semaine"];
            $Carburant = $ListeVeh["Carburant"];
            $Categorie = $ListeVeh["Categorie"];
            $Place = $ListeVeh["Place"];
            $Img = $ListeVeh["Img"];
            ?>
    <a href="p2.php?id=<?php echo $No_Imm;?>">
    <div class="sub-menu">
    <img class="card-img-top" src="<?php echo $Img; ?>" alt="Image de  voiture disponnible">
    <h5><b> <?php echo $Marque; ?> </b></h5>
    <h6> Places: <?php echo $Place ; ?></h6>
    <h6> Categorie: <?php echo $Categorie ; ?></h6>
    <h6> Carburant: <?php echo $Carburant ; ?></h6>
    <h6> Prix/jour: <?php echo $Prix_Jour; ?></h6>
    </div>
    </a>
  <?php }}} ?>
</section>
</div>


  <?php
  include('footer.php');?>

  </body>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" ></script>
  <script type="text/javascript">
var dateToday = new Date();
var dates = $("#from, #to").datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 2,
minDate: dateToday,
dateFormat: 'dd-mm-yy',
onSelect: function(selectedDate) {
   var option = this.id == "from" ? "minDate" : "maxDate",
       instance = $(this).data("datepicker"),
      
       date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
   dates.not(this).datepicker("option", option, date);
}
});
  </script>
  </html>
