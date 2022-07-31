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

    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/CarteVoiture.css">
</head>
<body style="font-family: Barlow, sans-serif;">
<?php
include ('navbar.php');?>
<body>
<div style=" margin:20px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center" style="font-weight: bold;color: #eb5f26;line-height: 55px;">Ma réservation</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class= "alert text-justify" style="background-color:#e3e3e3;"><p>Pour consulter les informations de votre réservation,
           veuillez saisir le numéro de réservation, ensuite, nous vous afficherons vos informations...</p></div>
      </div>

    <div class="col-md-6">
      <form method="POST">
        <div class="form-group">
          <label for="id_reservation">Numéro de réservation:</label>
          <input type="text" id="id_reservation" class="form-control" name="No_Contrat" placeholder="Votre numéro de réservation..." required />

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="submit" name="envoyer" class="btn btn-success" value="Envoyer" />
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>
    </div>

<?php
  if(isset($_POST['envoyer'])){
    $No_Contrat=$_POST['No_Contrat'];
    $res=mysqli_query($conn, "SELECT * FROM contrat NATURAL JOIN client INNER JOIN voiture ON contrat.No_Imm=voiture.No_Imm WHERE contrat.No_Contrat= '$No_Contrat' ");
    if (mysqli_num_rows($res) >= 1) {
      while ($row=mysqli_fetch_assoc($res)) {
 ?>
 <div class="container">
   <table class="table">
     <tr>
   <th>Client:</th>
    <td><?php echo $row['Nom']." ".$row['Prenom']; ?> </td>
  </tr>
  <tr>
   <th> Voiture choisi:  </th>
     <td><?php echo $row['Marque']; ?> </td>
   </tr>
   <tr>
    <th> Carburant:  </th>
      <td><?php echo $row['Carburant']; ?> </td>
    </tr>
    <tr>
     <th> Categorie:  </th>
       <td><?php echo $row['Categorie']; ?> </td>
     </tr>
   <tr>
    <th> Date de reservation:</th>
      <td><?php echo $row['Date_Contrat']; ?> </td>
    </tr>
    <tr>
     <th> Date de départ: </th>
       <td><?php echo $row['Date_Depart']; ?> </td>
     </tr>
    <tr>
     <th> Date de retour: </th>
       <td><?php echo $row['Date_Retour']; ?> </td>
     </tr>
     <tr>
      <th> Lieu de départ: </th>
        <td><?php echo $row['Lieu_Depart']; ?> </td>
      </tr><tr>
       <th> Lieu de retour:  </th>
         <td><?php echo $row['Lieu_Retour']; ?> </td>
       </tr>
 </table>
 <?php
 $_SESSION['date']=date('Y-m-d');
 $_SESSION['IdClient']=$row['Id_Client'];
 $_SESSION['immatricule']=$row['No_Imm'];
 echo "<form action='annuler_reservation.php?id=$No_Contrat'  method='POST'>";

  ?>
   <input type="submit" name="annuler" value="Annuler la réservation" class="btn btn-danger" />
 </form>
 <?php
 // if(isset($_POST['annuler'])){
 //   ?>
   <!-- <div class="form-group">
   <table class="table" >
  <tr><th>Raison: </th><td><select class='form-control' name='raison'>
                                  <option value='' disabled selected>--Choisir--</option>
                                  <option value='vol'>Annulation de vol</option>
                                  <option value='vol'>Autre</option>
                                </select></td></tr></table>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="lire" checked style="margin-left: 0;width: auto;" required>
                                <span style="margin-left: 20px;"> J'ai lu <a href="condition.html#location" target="_blank"> les conditions de location</a></span>
                              </label>
      </div> -->

      <!-- <div class="row">
      <div class='col-md-4'>
          <div class="form-group">
            <div class="input-group">

                <select class='custom-select' name='raison' required>
                  <option value='' disabled selected>--Choisir la raison--</option>
                  <option value='vol'>Annulation de vol</option>
                  <option value='autre'>Autre</option>
                                  </select>
            </div>
                                  <div class="form-group">
                                  <label class="checkbox-inline">
                                  <input type="checkbox" name="lire" checked style="margin-left: 0;width: auto;" required>
                                  <span style="margin-left: 20px;"> J'ai lu <a href="condition.html#location" target="_blank"> les conditions de location</a></span>
                                </label>
                              </div>


          </div>
      </div>
      <form action="annuler_reservation.php?id=$No_Contrat" method="get">
        <input type="submit" name="annuler" value="Confirmer" class="btn btn-primary" />
      </form>
  </div> -->

<?php //} ?>
 </div>
<?php }} else {
    echo " <div class='container'>"."<h5 style='color:red;'>"."Aucune information trouvée, veuillez nous contacter pour plus d'information</h5></div>";
}} ?>


  <?php
  include('footer.php');?>

  </body>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
  </html>
