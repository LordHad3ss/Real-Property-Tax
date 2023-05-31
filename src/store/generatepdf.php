<?php
require 'connect.php';
include_once('../../FPDF/fpdf.php');


class PDF extends FPDF
{
// Page header
function Header()
{
    // Arial bold 20 FOR SCHOOL NAME
    $this->SetFont('Times','B',20);
    // Logo


    $this->Cell(100,18,'SAN JOSE HEALTH CENTER',0,0,'R');
    $this->Ln(7);
    $this->SetFont('Times','',10);
    $this->Cell(100,18,'Lopez Jaena St. Bgy San Jose, Pasig City',0,0,'L');

}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    //$this->Cell(110,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    //$this->Ln();
    $this->Cell(160,5,'Date printed ' . date('M/d/Y'),0,0,'C');
}
}
//****QUERY START***//



// $qryPatientInfo = "";
// $PatientInfoResult = mysqli_query($connection, $qryPatientInfo);


//****QUERY END***//
$pdf = new PDF('P','mm','Legal');
//table for center
$pdf->SetLeftMargin(30);
//header
$pdf->AddPage();
//foter page
//$pdf->AliasNbPages();
$pdf->SetFont('Times','B',20);





$pdf->Output();



?>
