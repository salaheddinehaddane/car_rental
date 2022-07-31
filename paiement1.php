
<?php
session_start();
include("connexion.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
    <title>Paiement LOC26</title>

    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

.container{
width: 100%;
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
}
@media (min-width: 1200px)
{
.container{
  max-width: 1140px;
}
}
.d-flex{
display: flex;
flex-direction: row;
background: #f6f6f6;
border-radius: 0 0 5px 5px;
padding: 25px;
}
form{
flex: 4;
}
.Yorder{
flex: 2;
}
.title{
background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
border-radius:5px 5px 0 0 ;
padding: 20px;
color: #f6f6f6;
}
h2{
margin: 0;
padding-left: 15px;
}
.required{
color: red;
}
label, table{
display: block;
margin: 15px;
}
label>span{
float: left;
width: 25%;
margin-top: 12px;
padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
width: 70%;
height: 30px;
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid #dadada;
color: #888;
}
select{
width: 70%;
height: 45px;
padding: 5px 10px;
margin-bottom: 10px;
}
.Yorder{
margin-top: 15px;
height: 600px;
padding: 20px;
border: 1px solid #dadada;
}
table{
margin: 0;
padding: 0;
}
th{
border-bottom: 1px solid #dadada;
padding: 10px 0;
}
tr>td:nth-child(1){
text-align: left;
color: #2d2d2a;
width: 40%;
}
tr>td:nth-child(2){
text-align: center;
color: #52ad9c;
width: 60%;
}
td{
border-bottom: 1px solid #dadada;
padding: 10px 5px 10px 5px;
}

p{
display: block;
color: #888;
margin: 0;
padding-left: 25px;
}
.Yorder>div{
padding: 15px 0;
}

button{
width: 100%;
margin-top: 10px;
padding: 10px;
border: none;
border-radius: 30px;
background: #52ad9c;
color: #fff;
font-size: 15px;
font-weight: bold;
}
button:hover{
cursor: pointer;
background: #428a7d;
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
             $start = strtotime($_SESSION['date_dep']);
             $end = strtotime($_SESSION['date_ret']);
             $days_between = ceil(abs($end - $start) / 86400);
             if($days_between<7){
               $montant=$row['Prix_Jour']*$days_between;
               echo"<h4 class='text-center mt-4 font-weight-bold'>Prix total: ".$montant." DH</h4>";
             } else {
               $montant=$row['Prix_Semaine']*$days_between;
               echo"<li>Prix total: ".$montant." DH</li>";
             }
 					 ?>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div> -->


  <div class="container">
<div class="d-flex">
  <form action="" method="post">
    <h1 class="text-center">Vos cordonnées</h1>
    <label>
      <span class="nom">Nom <span class="required">*</span></span>
      <input type="text" name="fname">
    </label>
    <label>
      <span class="prenom">Prénom <span class="required">*</span></span>
      <input type="text" name="lname">
    </label>
    <label>
      <span>Pays <span class="required">*</span></span>
      <select name="selection">
        <option value="" selected disabled>Choisir votre pays</option>
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
    </label>
    <label>
      <span>Ville<span class="required" required>*</span></span>
      <input type="text" name="ville">
    </label>
    <label>
      <span>Date de naissance<span class="required">*</span></span>
      <input type="text" name="D_Naiss">
    </label>
    <label>
      <span>Age<span class="required">*</span></span>
      <input type="text" name="city">
    </label>
    <label>
      <span>Numéro de télephone<span class="required">*</span></span>
      <input type="tel" name="city">
    </label>
    <label>
      <span>Numéro de votre CIN<span class="required">*</span></span>
      <input type="email" name="city">
    </label>
    <label>
      <span>Numéro de votre permis<span class="required">*</span></span>
      <input type="email" name="city">
    </label>

        <h1 class="text-center">Votre méthode de paiement</h1>

  </form>
  <div class="Yorder">
    <table>
      <tr>
        <th colspan="2">Informations sur votre réservationr</th>
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
          $montant=$row['Prix_Semaine']*$days_between;
          echo"<li>Prix total: ".$montant." DH</li>";
        }

      ?>
    </table><br>


    <button type="button">Payer et réserver</button>
  </div>
 </div>
</div>

<?php
include ('footer.php');
?>


 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
