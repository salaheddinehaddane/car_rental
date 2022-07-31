<?php
require("FPDF/fpdf.php");
session_start();
include("connexion.php");
if(isset($_GET['idc']))
{
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',40);
$pdf->Image('logo2.png',10,15,20);
$pdf->Ln(10);
$titre = 'Facture';
$w=$pdf->GetStringWidth($titre);
$x=(210-$w)/2;
$pdf->SetX($x);
$pdf->Cell($w,10,$titre,0,1);
$pdf->SetFont('Arial','I',15);
$pdf->Ln(30);
$req1="Select * from contrat natural join client where Id_Client='{$_GET['idc']}'";
$res1=mysqli_query($conn,$req1);
$row=mysqli_fetch_assoc($res1);
$req2="Select * from contrat natural join voiture where contrat.Id_Client='{$_GET['idc']}'";
$res2=mysqli_query($conn,$req2);
$row2=mysqli_fetch_assoc($res2);
$d=date('d-m-Y');
mysqli_query($conn,"INSERT INTO facture VALUES (NULL,'$d','{$_SESSION['prix']}','{$_GET['idc']}')");
$res3=mysqli_query($conn,"Select * from facture where facture.Id_Client='{$_GET['idc']}'");
$row3=mysqli_fetch_assoc($res3);
$pdf->Cell(46,10,'Facture No: ',0,0);
$pdf->Cell(20,10,$row3['No_Fact'],0,0);
$pdf->SetX(100);
$pdf->Cell(46,10,'Date de facture:',0,0);
$pdf->Cell(46,10,date('d/m/Y'),0,1);
$pdf->Cell(46,10,'Contrat No: ',0,0);
$pdf->Cell(20,10,$row['No_Contrat'],0,0);
$pdf->SetX(100);
$pdf->Cell(46,10,'Nom et Prénom: '.$row['Nom'].' '.$row['Prenom'],0,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',15);
$pdf->Cell(50,10,'Designation',1,0,'C');
$pdf->Cell(36,10,'Date départ',1,0,'C');
$pdf->Cell(36,10,'Date retour',1,0,'C');
$pdf->Cell(32,10,'Nb jours',1,0,'C');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(33,10,'Prix TTC',1,1,'C');
$pdf->Cell(50,50,$row2['Marque'],1,0,'C');
$pdf->Cell(36,50,$row['Date_Depart'],1,0,'C');
$pdf->Cell(36,50,$row['Date_Retour'],1,0,'C');
$pdf->Cell(32,50,$_SESSION['diff'],1,0,'C');
$pdf->Cell(33,50,$_SESSION['prix'].',00 DH',1,0,'C');
  $pdf->output('I','facture_LOC26');
}
?>
