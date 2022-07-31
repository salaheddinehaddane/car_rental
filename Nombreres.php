<?php
session_start();
include("connexion.php");
include('includes/config.php');

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Nombre de réservation</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<h2 class="page-title">Nombre de réservation</h2>

         <table class="table table-striped">
   <thead>
     <tr>
       <th scope="col">Numéro du contrat</th>
       <th scope="col">Date du contrat</th>
       <th scope="col">Date du départ</th>
       <th scope="col">Lieu du départ</th>
       <th scope="col">Date du retour</th>
       <th scope="col">Lieu du retour</th>
       <th scope="col">Nom du client</th>
       <th scope="col">Voiture louée</th>
			 <th scope="col">Prix</th>
     </tr>
   </thead>
   <tbody>

     <?php
     $res=mysqli_query($conn,"SELECT * FROM `contrat` NATURAL JOIN `voiture` NATURAL JOIN `client` NATURAL JOIN `facture`");
   while ($row=mysqli_fetch_assoc($res)){
     echo "<tr>";
     echo "<th scope='row'>{$row['No_Contrat']}</th>";
     echo "<td>{$row['Date_Contrat']}</td>";
     echo "<td>{$row['Date_Depart']}</td>";
     echo "<td>{$row['Lieu_Retour']}</td>";
     echo "<td>{$row['Date_Retour']}</td>";
     echo "<td>{$row['Lieu_Retour']}</td>";
     echo "<td>{$row['Nom']}</td>";
     echo "<td>{$row['Marque']}</td>";
		 echo "<td>{$row['Mont_Total']} DH</td>";
     echo "</tr>";
   }
         ?>


			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
