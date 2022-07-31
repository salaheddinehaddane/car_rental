
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



    <style>
      h3{
        padding: 10px 10px;
      }
      table{
        margin-top: 30px;
      }
      td{
        text-align: center;
      }
      tr>td:nth-child(1){
      text-align: left;
      color: #2d2d2a;
      width: 40%;
      }
      tr>td:nth-child(2){
      color: #52ad9c;
      width: 60%;
      }
    </style>



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

<div style="background-color:#F3F3F3;" class="container">
  <div class="row">
    <div class="col-md-8">

      <h3 class="text-center">Saisissez vos cordonnées</h3>
     <form method="post">
       <div class="row">
         <div class="col-md-6">

           <div class="form-group">
             <input type="text" class="form-control" name="prenom" placeholder="Pr&#233;nom *" required="required" />
           </div>

           <div class="form-group">
             <select name="age" class="form-control">
               <option class="hidden"  selected disabled>--Sélectionnez votre age--</option>
               <?php
                  for ($i=21; $i <72; $i++) {
                    echo "<option value='$i'>$i</option>";
                  }
                ?>
              </select>
           </div>

           <div class="form-group">
             <input type="text" class="form-control" name="No_Cin" placeholder="Votre numéro de CIN *" required="required" />
           </div>
           <div class="form-group">
             <input type="text" class="form-control"  placeholder="Votre numéro de Permis *" required="required" name="No_Permis" />
           </div>
           <div class="form-group">
             <input type="text" name="Date_Cin_Exp" class="form-control" placeholder="Date d'experation de votre CIN *" />
           </div>
           <div class="form-group">
             <input type="text" class="form-control" placeholder="votre ville *" required="required" name="ville" />
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <input type="text" class="form-control" name="nom" placeholder="Nom *" required="required" />
           </div>
           <div class="form-group">
             <input type="text" name="tele" class="form-control" placeholder="Num&#233;ro du T&#233;l&#233;phone [0612345678] *"  />
           </div>
           <div class="form-group">
             <select name="pays" class="form-control">
               <option class="hidden"  selected disabled>--Sélectionnez votre pays--</option>
               <option value="AFG">Afghanistan</option>
               <option value="ALA">Åland Islands</option>
               <option value="ALB">Albania</option>
               <option value="DZA">Algeria</option>
               <option value="ASM">American Samoa</option>
               <option value="AND">Andorra</option>
               <option value="AGO">Angola</option>
               <option value="AIA">Anguilla</option>
               <option value="ATA">Antarctica</option>
               <option value="ATG">Antigua and Barbuda</option>
               <option value="ARG">Argentina</option>
               <option value="ARM">Armenia</option>
               <option value="ABW">Aruba</option>
               <option value="AUS">Australia</option>
               <option value="AUT">Austria</option>
               <option value="AZE">Azerbaijan</option>
               <option value="BHS">Bahamas</option>
               <option value="BHR">Bahrain</option>
               <option value="BGD">Bangladesh</option>
               <option value="BRB">Barbados</option>
               <option value="BLR">Belarus</option>
               <option value="BEL">Belgium</option>
               <option value="BLZ">Belize</option>
               <option value="BEN">Benin</option>
               <option value="BMU">Bermuda</option>
               <option value="BTN">Bhutan</option>
               <option value="BOL">Bolivia, Plurinational State of</option>
               <option value="BES">Bonaire, Sint Eustatius and Saba</option>
               <option value="BIH">Bosnia and Herzegovina</option>
               <option value="BWA">Botswana</option>
               <option value="BVT">Bouvet Island</option>
               <option value="BRA">Brazil</option>
               <option value="IOT">British Indian Ocean Territory</option>
               <option value="BRN">Brunei Darussalam</option>
               <option value="BGR">Bulgaria</option>
               <option value="BFA">Burkina Faso</option>
               <option value="BDI">Burundi</option>
               <option value="KHM">Cambodia</option>
               <option value="CMR">Cameroon</option>
               <option value="CAN">Canada</option>
               <option value="CPV">Cape Verde</option>
               <option value="CYM">Cayman Islands</option>
               <option value="CAF">Central African Republic</option>
               <option value="TCD">Chad</option>
               <option value="CHL">Chile</option>
               <option value="CHN">China</option>
               <option value="CXR">Christmas Island</option>
               <option value="CCK">Cocos (Keeling) Islands</option>
               <option value="COL">Colombia</option>
               <option value="COM">Comoros</option>
               <option value="COG">Congo</option>
               <option value="COD">Congo, the Democratic Republic of the</option>
               <option value="COK">Cook Islands</option>
               <option value="CRI">Costa Rica</option>
               <option value="CIV">Côte d'Ivoire</option>
               <option value="HRV">Croatia</option>
               <option value="CUB">Cuba</option>
               <option value="CUW">Curaçao</option>
               <option value="CYP">Cyprus</option>
               <option value="CZE">Czech Republic</option>
               <option value="DNK">Denmark</option>
               <option value="DJI">Djibouti</option>
               <option value="DMA">Dominica</option>
               <option value="DOM">Dominican Republic</option>
               <option value="ECU">Ecuador</option>
               <option value="EGY">Egypt</option>
               <option value="SLV">El Salvador</option>
               <option value="GNQ">Equatorial Guinea</option>
               <option value="ERI">Eritrea</option>
               <option value="EST">Estonia</option>
               <option value="ETH">Ethiopia</option>
               <option value="FLK">Falkland Islands (Malvinas)</option>
               <option value="FRO">Faroe Islands</option>
               <option value="FJI">Fiji</option>
               <option value="FIN">Finland</option>
               <option value="FRA">France</option>
               <option value="GUF">French Guiana</option>
               <option value="PYF">French Polynesia</option>
               <option value="ATF">French Southern Territories</option>
               <option value="GAB">Gabon</option>
               <option value="GMB">Gambia</option>
               <option value="GEO">Georgia</option>
               <option value="DEU">Germany</option>
               <option value="GHA">Ghana</option>
               <option value="GIB">Gibraltar</option>
               <option value="GRC">Greece</option>
               <option value="GRL">Greenland</option>
               <option value="GRD">Grenada</option>
               <option value="GLP">Guadeloupe</option>
               <option value="GUM">Guam</option>
               <option value="GTM">Guatemala</option>
               <option value="GGY">Guernsey</option>
               <option value="GIN">Guinea</option>
               <option value="GNB">Guinea-Bissau</option>
               <option value="GUY">Guyana</option>
               <option value="HTI">Haiti</option>
               <option value="HMD">Heard Island and McDonald Islands</option>
               <option value="VAT">Holy See (Vatican City State)</option>
               <option value="HND">Honduras</option>
               <option value="HKG">Hong Kong</option>
               <option value="HUN">Hungary</option>
               <option value="ISL">Iceland</option>
               <option value="IND">India</option>
               <option value="IDN">Indonesia</option>
               <option value="IRN">Iran, Islamic Republic of</option>
               <option value="IRQ">Iraq</option>
               <option value="IRL">Ireland</option>
               <option value="IMN">Isle of Man</option>
               <option value="ISR">Israel</option>
               <option value="ITA">Italy</option>
               <option value="JAM">Jamaica</option>
               <option value="JPN">Japan</option>
               <option value="JEY">Jersey</option>
               <option value="JOR">Jordan</option>
               <option value="KAZ">Kazakhstan</option>
               <option value="KEN">Kenya</option>
               <option value="KIR">Kiribati</option>
               <option value="PRK">Korea, Democratic People's Republic of</option>
               <option value="KOR">Korea, Republic of</option>
               <option value="KWT">Kuwait</option>
               <option value="KGZ">Kyrgyzstan</option>
               <option value="LAO">Lao People's Democratic Republic</option>
               <option value="LVA">Latvia</option>
               <option value="LBN">Lebanon</option>
               <option value="LSO">Lesotho</option>
               <option value="LBR">Liberia</option>
               <option value="LBY">Libya</option>
               <option value="LIE">Liechtenstein</option>
               <option value="LTU">Lithuania</option>
               <option value="LUX">Luxembourg</option>
               <option value="MAC">Macao</option>
               <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
               <option value="MDG">Madagascar</option>
               <option value="MWI">Malawi</option>
               <option value="MYS">Malaysia</option>
               <option value="MDV">Maldives</option>
               <option value="MLI">Mali</option>
               <option value="MLT">Malta</option>
               <option value="MHL">Marshall Islands</option>
               <option value="MTQ">Martinique</option>
               <option value="MRT">Mauritania</option>
               <option value="MUS">Mauritius</option>
               <option value="MYT">Mayotte</option>
               <option value="MEX">Mexico</option>
               <option value="FSM">Micronesia, Federated States of</option>
               <option value="MDA">Moldova, Republic of</option>
               <option value="MCO">Monaco</option>
               <option value="MNG">Mongolia</option>
               <option value="MNE">Montenegro</option>
               <option value="MSR">Montserrat</option>
               <option value="MAR">Morocco</option>
               <option value="MOZ">Mozambique</option>
               <option value="MMR">Myanmar</option>
               <option value="NAM">Namibia</option>
               <option value="NRU">Nauru</option>
               <option value="NPL">Nepal</option>
               <option value="NLD">Netherlands</option>
               <option value="NCL">New Caledonia</option>
               <option value="NZL">New Zealand</option>
               <option value="NIC">Nicaragua</option>
               <option value="NER">Niger</option>
               <option value="NGA">Nigeria</option>
               <option value="NIU">Niue</option>
               <option value="NFK">Norfolk Island</option>
               <option value="MNP">Northern Mariana Islands</option>
               <option value="NOR">Norway</option>
               <option value="OMN">Oman</option>
               <option value="PAK">Pakistan</option>
               <option value="PLW">Palau</option>
               <option value="PSE">Palestinian Territory, Occupied</option>
               <option value="PAN">Panama</option>
               <option value="PNG">Papua New Guinea</option>
               <option value="PRY">Paraguay</option>
               <option value="PER">Peru</option>
               <option value="PHL">Philippines</option>
               <option value="PCN">Pitcairn</option>
               <option value="POL">Poland</option>
               <option value="PRT">Portugal</option>
               <option value="PRI">Puerto Rico</option>
               <option value="QAT">Qatar</option>
               <option value="REU">Réunion</option>
               <option value="ROU">Romania</option>
               <option value="RUS">Russian Federation</option>
               <option value="RWA">Rwanda</option>
               <option value="BLM">Saint Barthélemy</option>
               <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
               <option value="KNA">Saint Kitts and Nevis</option>
               <option value="LCA">Saint Lucia</option>
               <option value="MAF">Saint Martin (French part)</option>
               <option value="SPM">Saint Pierre and Miquelon</option>
               <option value="VCT">Saint Vincent and the Grenadines</option>
               <option value="WSM">Samoa</option>
               <option value="SMR">San Marino</option>
               <option value="STP">Sao Tome and Principe</option>
               <option value="SAU">Saudi Arabia</option>
               <option value="SEN">Senegal</option>
               <option value="SRB">Serbia</option>
               <option value="SYC">Seychelles</option>
               <option value="SLE">Sierra Leone</option>
               <option value="SGP">Singapore</option>
               <option value="SXM">Sint Maarten (Dutch part)</option>
               <option value="SVK">Slovakia</option>
               <option value="SVN">Slovenia</option>
               <option value="SLB">Solomon Islands</option>
               <option value="SOM">Somalia</option>
               <option value="ZAF">South Africa</option>
               <option value="SGS">South Georgia and the South Sandwich Islands</option>
               <option value="SSD">South Sudan</option>
               <option value="ESP">Spain</option>
               <option value="LKA">Sri Lanka</option>
               <option value="SDN">Sudan</option>
               <option value="SUR">Suriname</option>
               <option value="SJM">Svalbard and Jan Mayen</option>
               <option value="SWZ">Swaziland</option>
               <option value="SWE">Sweden</option>
               <option value="CHE">Switzerland</option>
               <option value="SYR">Syrian Arab Republic</option>
               <option value="TWN">Taiwan, Province of China</option>
               <option value="TJK">Tajikistan</option>
               <option value="TZA">Tanzania, United Republic of</option>
               <option value="THA">Thailand</option>
               <option value="TLS">Timor-Leste</option>
               <option value="TGO">Togo</option>
               <option value="TKL">Tokelau</option>
               <option value="TON">Tonga</option>
               <option value="TTO">Trinidad and Tobago</option>
               <option value="TUN">Tunisia</option>
               <option value="TUR">Turkey</option>
               <option value="TKM">Turkmenistan</option>
               <option value="TCA">Turks and Caicos Islands</option>
               <option value="TUV">Tuvalu</option>
               <option value="UGA">Uganda</option>
               <option value="UKR">Ukraine</option>
               <option value="ARE">United Arab Emirates</option>
               <option value="GBR">United Kingdom</option>
               <option value="USA">United States</option>
               <option value="UMI">United States Minor Outlying Islands</option>
               <option value="URY">Uruguay</option>
               <option value="UZB">Uzbekistan</option>
               <option value="VUT">Vanuatu</option>
               <option value="VEN">Venezuela, Bolivarian Republic of</option>
               <option value="VNM">Viet Nam</option>
               <option value="VGB">Virgin Islands, British</option>
               <option value="VIR">Virgin Islands, U.S.</option>
               <option value="WLF">Wallis and Futuna</option>
               <option value="ESH">Western Sahara</option>
               <option value="YEM">Yemen</option>
               <option value="ZMB">Zambia</option>
               <option value="ZWE">Zimbabwe</option>
             </select>
           </div>
           <div class="form-group">
             <input type="text" name="dateNaiss" class="form-control" placeholder="Votre date de naissance*" />
           </div>
           <div class="form-group">
             <input type="text" name="Date_Permis_Exp" class="form-control" placeholder="Date d'experation de votre permis *" />
           </div>
         </div>
       </div>

       <h3 class="text-center">Saisissez vos informations de paiement</h3>
       <div class="form-group">
         <select class="form-control" name="type_carte">
           <option name="type_carte" class="hidden"  selected disabled>--Sélectionnez votre type de carte--</option>
           <option value="visa">Visa</option>
           <option value="master card">Master Card</option>
         </select>
       </div>

       <div class="form-group">
         <input type="text" name="No_Carte" class="form-control" placeholder="Numéro de votre carte *" />
       </div>
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <select name="Annee_Carte_Exp" class="form-control" required>
               <option value="" disabled selected >Année d'expération</option>
                                 <option  value="2022">2022</option>
               <option  value="2023">2023</option>
                                 <option  value="2025">2025</option>
               <option  value="2026">2026</option>
                                 <option  value="2027">2027</option>
               <option  value="2028">2028</option>

               <option  value="2029">2029</option>

               <option  value="2030">2030</option>

               <option  value="2031">2031</option>

               <option  value="2032">2032</option>
                                 <option  value="2033">2033</option>
               <option  value="2034">2034</option>
                                 <option  value="2035">2035</option>
               <option  value="2036">2036</option>
                                 <option  value="2037">2037</option>
               <option  value="2038">2038</option>
                                 <option  value="2039">2039</option>
               <option  value="2040">2040</option>
                               </select>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <select name="Mois_Carte_Exp" class="form-control" required>
               <option value="" disabled selected >Mois d'expération</option>
                                 <option  value="01">01</option>
               <option  value="02">02</option>
                                 <option  value="03">03</option>
               <option  value="04">04</option>
                                 <option  value="05">05</option>
               <option  value="06">06</option>

               <option  value="07">07</option>

               <option  value="08">08</option>

               <option  value="09">09</option>

               <option  value="10">10</option>
                                 <option  value="11">11</option>
               <option  value="12">12</option>
                               </select>
           </div>
         </div>
       </div>

       <div class="form-group">
         <input type="text" name="ccv" class="form-control" placeholder="CCV *" />
       </div>
       <div class="form-group">
         <input type="submit" name="payer" class="btn btn-primary" value="Payer et réserver">
       </div>

      </form>

  </div>

  <div class="col-md-4">

    <table class="table">
      <tr>
        <th class="text-center" colspan="2">Informations sur votre réservationr</th>
      </tr>
      <?php
         echo"<tr><td>Modèle choisi :</td><td>".$row['Marque']."</td></tr> " ;
        echo "<tr><td>Catégorie :</td><td>". $row['Categorie']."</td></tr>";
         echo"<tr><td>Lieu de départ :</td><td> ".$_SESSION['lieu_dep']."</td></tr>";
         echo"<tr><td>Date de départ :</td><td>".$_SESSION['date_dep']."</td></tr>";
         echo"<tr><td>Lieu de retour :</td><td>".$_SESSION['park_ret']."</td></tr>";
         echo"<tr><td>Date de retour :</td><td>".$_SESSION['date_ret']." </td></tr>" ;
         echo"<tr><td>Prix/jour :</td><td>".$row['Prix_Jour']." DH</td></tr>";
        echo"<tr><td>Prix/semaine :</td><td>".$row['Prix_Semaine']." DH (réduction de 25% par jour)</td></tr>";
        $start = strtotime($_SESSION['date_dep']);
        $end = strtotime($_SESSION['date_ret']);
        $days_between = ceil(abs($end - $start) / 86400);
        if($days_between<7){
          $montant=$row['Prix_Jour']*$days_between;
          echo"<tr><td class='font-weight-bold'>Prix total: </td><td><h4 class='font-weight-bold'>".$montant." DH</h4></td></tr>";
        } else {
          $resultat=intval($days_between/7);
          $reste=fmod($days_between,7);
          $montant=$row['Prix_Semaine']*$resultat + $reste*$row['Prix_Jour'];
          echo"<tr><td class='font-weight-bold'>Prix total: </td><td><h4 class='font-weight-bold'>".$montant." DH</h4></td></tr>";
        }
        $_SESSION['diff']=$days_between;
        $_SESSION['prix']=$montant;

     ?>
     </table><br>
  </div>



</div>
</div>

<?php

if(isset($_POST['payer'])){
  $Nom=$_POST['nom'];
  $_SESSION['nom']=$Nom;
  $Prenom=$_POST['prenom'];
  $D_Nais=$_POST['dateNaiss'];
  $Pays=$_POST['pays'];
  $Ville=$_POST['ville'];
  $Tel=$_POST['tele'];
  $Age=$_POST['age'];
  $No_Permis=$_POST['No_Permis'];

  $D_Permis_Ex=$_POST['Date_Permis_Exp'];
  $No_Cin=$_POST['No_Cin'];
  $D_Cin_Ex=$_POST['Date_Cin_Exp'];
  $dateContrat=date("Y-m-d");
  $tab_date_dep=explode("-",$_SESSION['date_dep']);
  $dateDepart=$tab_date_dep[2]."-".$tab_date_dep[1]."-".$tab_date_dep[0];
  $lieuDepart=$_SESSION['lieu_dep'];
  $tab_date_ret=explode("-",$_SESSION['date_dep']);
  $dateRetour=$tab_date_ret[2]."-".$tab_date_ret[1]."-".$tab_date_ret[0];
  $lieuRetour=$_SESSION['park_ret'];
  $Heure_Dep=$_SESSION['heure_dep'];
  $Heure_Ret=  $_SESSION['heure_ret'];
  $No_Carte=$_POST['No_Carte'];
  $Annee_Carte_Exp=$_POST['Annee_Carte_Exp'];
  $Mois_Carte_Exp=$_POST['Mois_Carte_Exp'];
  $CCV=$_POST['ccv'];
  $type_carte=$_POST['type_carte'];

  $Imm=$_GET['id'];
  $res1=mysqli_query($conn,"INSERT INTO `cin` VALUES ('$No_Cin','$D_Cin_Ex')");
  $res2=mysqli_query($conn,"INSERT INTO `permis` VALUES ('$No_Permis','$D_Permis_Ex')");
  $res3=mysqli_query($conn,"INSERT INTO `client` VALUES (NULL,'$Nom','$Prenom','$D_Nais','$Pays','$Ville','$Tel','$Age','$No_Permis','$No_Cin')");
  $res4=mysqli_query($conn,"SELECT Id_Client from client WHERE No_Cin='$No_Cin'");
  $Id=mysqli_fetch_assoc($res4);
  $IdClient=$Id['Id_Client'];
  $_SESSION['id']=$IdClient;
  $res5=mysqli_query($conn,"INSERT INTO  `contrat` VALUES (NULL,'$dateContrat','$dateDepart','$Heure_Dep','$lieuDepart','$dateRetour','$Heure_Ret','$lieuRetour','$IdClient','$Imm')");
  $res51=mysqli_query($conn,"INSERT INTO  `contrat_histo` VALUES (NULL,'$dateContrat','$dateDepart','$Heure_Dep','$lieuDepart','$dateRetour','$Heure_Ret','$lieuRetour','$IdClient','$Imm')");
  $res6=mysqli_query($conn,"UPDATE `voiture` SET `etat` = 0 WHERE `No_Imm`='$Imm'");
  $res7=mysqli_query($conn,"UPDATE `voiture` SET `Id_Client` = '$IdClient' WHERE `No_Imm`='$Imm'");
  $res8=mysqli_query($conn,"INSERT INTO `carte_bancaire` VALUES ('$No_Carte','$type_carte','$Mois_Carte_Exp','$Annee_Carte_Exp','$CCV','$IdClient')");
  echo "<script>
        alert('Merci pour votre réservation, Veuillez télecharger votre facture');
        window.location.href='final.php?idc=$IdClient';
  </script>";
}

 ?>



<?php
include ('footer.php');
?>

 </body>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

 </html>
