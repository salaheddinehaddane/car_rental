<?php
session_start();
include("connexion.php");
if (isset($_SESSION['Nom'])) {
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

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Bonjour <?php echo $_SESSION['Nom']." ".$_SESSION['Prenom']; ?></h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php
$res=mysqli_query($conn,"SELECT count(*) as 'nb'  from `voiture`");
$row=mysqli_fetch_assoc($res);
//echo
?>
													<div class="stat-panel-number h1 "><?php echo $row['nb'];?></div>
													<div class="stat-panel-title text-uppercase">Toutes les voitures</div>
												</div>
											</div>
											<a href="voidispo.php" class="block-anchor text-center panel-footer">Plus du détail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php
												$res1=mysqli_query($conn,"SELECT count(*) as 'nb1' from `contrat`");
												$row1=mysqli_fetch_assoc($res1);

?>
													<div class="stat-panel-number h1 "><?php echo $row1['nb1']; ?></div>
													<div class="stat-panel-title text-uppercase">Nombre de réservation</div>
												</div>
											</div>
											<a href="Nombreres.php" class="block-anchor panel-footer text-center">Plus du détail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php
$res3=mysqli_query($conn,"SELECT count(*) as 'nb3' from `voiture` where etat=1 AND No_Park = 1");
$row3=mysqli_fetch_assoc($res3);
?>

													<div class="stat-panel-number h1 "><?php echo $row3['nb3']; ?></div>
													<div class="stat-panel-title text-uppercase">Nombre de voiture dans le Parking 1</div>
												</div>
											</div>
											<a href="parking1.php" class="block-anchor panel-footer text-center">Plus du détail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
<?php
$res6=mysqli_query($conn,"SELECT count(*) as 'nb6' FROM `annulation` WHERE etat=1");
$row6=mysqli_fetch_assoc($res6);

?>
													<div class="stat-panel-number h1 "><?php echo $row6['nb6'];   ?></div>
													<div class="stat-panel-title text-uppercase">Annulation</div>
												</div>
											</div>
											<a href="annulation.php" class="block-anchor panel-footer text-center">Plus du détail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">


						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php
$res5=mysqli_query($conn,"SELECT count(*) as 'nb1' from `client`");
$row5=mysqli_fetch_assoc($res5);
?>
													<div class="stat-panel-number h1 "><?php echo $row5['nb1'];  ?></div>
													<div class="stat-panel-title text-uppercase">Nombre du client</div>
												</div>
											</div>
											<!-- <a href="manage-subscribers.php" class="text-center block-anchor panel-footer">Plus de détail <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php
												$res4=mysqli_query($conn,"SELECT count(*) as 'nb1' from `contrat_histo`");
												$row4=mysqli_fetch_assoc($res4);

?>
													<div class="stat-panel-number h1 "><?php echo $row4['nb1'] ?></div>
													<div class="stat-panel-title text-uppercase">Nombre de réservation total de LOC26</div>
												</div>
											</div>
											<!-- <a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Plus du détail <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php
$res4=mysqli_query($conn,"SELECT count(*) as 'nb3' from `voiture` where etat=1 AND No_Park = 2");
$row4=mysqli_fetch_assoc($res4);

?>

													<div class="stat-panel-number h1 "><?php echo $row4['nb3']; ?></div>
													<div class="stat-panel-title text-uppercase">Nombre de voiture dans le Parking 2</div>
												</div>
											</div>
											<a href="parking2.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>









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
	<?php
}
else {
	header('location:authentification.php');
}
	 ?>
</body>
</html>
