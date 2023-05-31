<?php
include "db.php";
include_once('../fpdf.php');


class PDF extends FPDF
{
// Page header
function Header()
{
    // Arial bold 20 FOR SCHOOL NAME
    $this->SetFont('Times','B',20);
    // Logo

    $this->Image('../../Images/Profile/PASIGE.jpg',140,-5,100,50);
    $this->Ln();
    $this->Image('../../Images/Profile/line.png',0,2,150,50);
    $this->Ln();
    $this->Image('../../Images/Profile/DOH.png',10,13,15,15);
    $this->SetTextColor(255,255,255);

    $this->Cell(100,18,'SAN JOSE HEALTH CENTER',0,0,'L');
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

$PatientID = $_GET['pid'];

$qryPatientInfo = "
                    SELECT
                      A.*,
                      B.comment,
                      B.illness,
                      C.lab_result_xray,
                      C.lab_result_blood,
                      D.user_name

                    FROM
                      tbl_patient AS A

                    INNER JOIN
                      tbl_prescribe AS B
                    ON
                      B.patientid = A.patientid

                    INNER JOIN
                      tbl_laboratory AS C
                    ON
                      C.patientid = A.patientid

                      INNER JOIN
                      tbl_user AS D
                    ON
                      D.userid = A.userid

                    WHERE
                      A.patientid = '$PatientID'
                  ";
$PatientInfoResult = mysqli_query($connection, $qryPatientInfo);


//****QUERY END***//
$pdf = new PDF('P','mm','Legal');
//table for center
$pdf->SetLeftMargin(30);
//header
$pdf->AddPage();
//foter page
//$pdf->AliasNbPages();
$pdf->SetFont('Times','B',20);
$pdf->Image('../../Images/Profile/line.png',20,98,80,3);
$pdf->Text(20,97,'Presciption');
$pdf->Image('../../Images/Profile/line.png',20,182,80,3);
$pdf->Text(20,180,'Laboratory');

while ($row = mysqli_fetch_assoc($PatientInfoResult))
    {
      $PFname = $row['p_firstname'] . ' ' .$row['p_lastname'];
      $date = $row['p_bday'];
      $PBday = date("M d, Y", strtotime($date));
      $PGender = $row['p_gender'];
      $Prescribe = $row['comment'];
      $LabXray = $row['lab_result_xray'];
      $LabBlood = $row['lab_result_blood'];
      $Illness = $row['illness'];
      $nurse = $row['user_name'];

      //$Prescribe = "dsajdasdlacnh das da klddl jdh jkd fjfjk sfjs fjds fjhfjs lffns jdjfhsd df fhsd jfhdsjfhds  jfhdsf shfjdhfsdhfjksdf jfhj jfhsdjf hfjklds djfdhsf fjhsd fndsfhus  af sff sdgf";


      $pdf->SetFont('Arial','',12);
      $pdf->Text(20,60,'Patient Name: ');
      $pdf->SetFont('Arial','U',12);
      $pdf->Text(50,60,$PFname);

      $pdf->SetFont('Arial','',12);
      $pdf->Text(20,68,'Birthday: ');
      $pdf->SetFont('Arial','U',12);
      $pdf->Text(50,68,$PBday);

      $pdf->SetFont('Arial','',12);
      $pdf->Text(20,76,'Gender: ');
      $pdf->SetFont('Arial','U',12);
      $pdf->Text(50,76,$PGender);

      $pdf->SetFont('Arial','',12);
      $pdf->Text(20,84,'Nurse: ');
      $pdf->SetFont('Arial','U',12);
      $pdf->Text(50,84,$nurse);



      $pdf->SetXY(25,105);
      $pdf->SetFont('Arial','',12);
      $pdf->MultiCell(160,10,$Illness . ' - ' . $Prescribe,0,'J');

      $pdf->SetFont('Arial','B',12);
      $pdf->Text(25,195,'X-ray Result: ');
      $pdf->SetXY(30,195);
      $pdf->SetFont('Arial','',12);
      $pdf->MultiCell(160,10,$LabXray,0,'J');

      $pdf->SetFont('Arial','B',12);
      $pdf->Text(25,220,'Blood Result: ');
      $pdf->SetXY(30,220);
      $pdf->SetFont('Arial','',12);
      $pdf->MultiCell(160,10,$LabBlood,0,'J');

    
    }


$pdf->Output();



?>
