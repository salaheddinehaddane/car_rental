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

	<title>Administration</title>

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

				<h2 class="page-title">Les voitures disponnible</h2>

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Marque</th>
      <th scope="col">Categorie</th>
      <th scope="col">Carburant</th>
      <th scope="col">Parking No</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $res=mysqli_query($conn,"SELECT * from `voiture`");
  while ($row=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<th scope='row'>{$row['Marque']}</th>";
    echo "<td>{$row['Categorie']}</td>";
    echo "<td>{$row['Carburant']}</td>";
    echo  "<td>{$row['No_Park']}</td>";
		echo  "<td>
      <a href='reservervoi2.php?i={$row['No_Imm']}' >disponible </a>
    </td>";
		echo  "<td>
      <a href='reservervoi.php?i={$row['No_Imm']}' >n'est pas disponible </a>
    </td>";
    echo "</tr>";
    }
        ?>

  </tbody>
</table>

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