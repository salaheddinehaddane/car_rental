<?php include
"includes/loc26.php";
Require('includes/fpdf/fpdf.php');
class PDF extends FPDF {
// Page header function Header() { // Logo
$this->Image('assets/img/find_user.png',10,6,30);
// Arial bold 15
$this->SetFont('Arial','B',12); // Move to the right $this->Cell(80); // Title
$this->Cell(60,10,'Shekhat test',0,0,'C'); // Line break $this->Ln(8);
$this->SetFont('Arial','B',7);
$this->Cell(220,10,'Pune, Maharashtra',0,0,'C');
$this->Ln(30);
$this->SetDrawColor(188,188,188);
$this->Line(0,45,350,45); } // Page footer function
Footer() { // Position at 1.5 cm from bottom $this->SetY(-15); // Arial italic 8
$this->SetFont('Arial','I',8); // Page number $this->Cell(0,10,'Page '.$this->PageNo().'/
{nb}',0,0,'C'); } }
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
if(isset($_GET['print_slider'])){ $get_id = $_GET['print_slider'];
$result="SELECT FROM homeslider WHERE banner_id='$get_id'";
//$result="SELECT * FROM homeslider";
$rows = mysqli_query($con, $result); while($row=mysqli_fetch_array($rows,
MYSQLI_ASSOC)) {
$pdf->Cell(0,10,'Banner id:' ,$row['banner_id']);
$pdf->Ln();
$pdf->Cell(0,10,'Banner Title:' ,$row['banner_title']); $pdf->Ln(); $pdf->Cell(0,10,'Banner Image:' ,
$row['banner_image']); } } $pdf->Output(); ?>