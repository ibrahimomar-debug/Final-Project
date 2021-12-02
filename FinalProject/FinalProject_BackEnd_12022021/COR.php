<?php

require("GeneratePDF/fpdf.php");

$firstName=$_GET['firstName'];
$middleName=$_GET['middleName'];
$lastName=$_GET['lastName'];
$fullName = $firstName." ".$middleName." ".$lastName;

$pdf = new FPDF();

$pdf->AddPage(); 

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,0,'Republic of the Philippines',0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(-190,10,'Province of Nueva Ecija',0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,20,'Municipality of Gapan',0,0,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(-190,30,'Barangay Balante',0,0,'C');

$pdf->SetFont('Arial','B',18);
$pdf->Cell(190,60,'Certificate of Residency',0,0,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(-190,95,'This is to certify that '.$fullName.' of legal age, married, Filipino Citizen, whose',0,0,'C');
$pdf->Cell(190,105,'specimen signature appears below is a PERMANENT RESIDENT of this Barangay Balante, Gapan City,',0,0,'C');
$pdf->Cell(-190,115,'Nueva Ecija Province.',0,0,'C');

$pdf->Cell(190,135,'Based on the records of this office, '.$fullName.' has been residing at Barangay Balante,',0,0,'C');
$pdf->Cell(-190,145,'Gapan City, Nueva Ecija Province.',0,0,'C');

$pdf->Cell(190,165,'This CERTIFICATION is being issued upon the request of the above-named person of whatever legal',0,0,'C');
$pdf->Cell(-190,175,'purpose it may serve.',0,0,'C');

$pdf->Cell(190,195,'Issued this December 31, 2021 at Barangay Balante, Gapan City, Nueva Ecija Province.',0,0,'C');

$pdf->Cell(-302,240,'__________________',0,0,'C');
$pdf->Cell(302,250,'Specimen Signature',0,0,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(-78,238,'Barangay Balante',0,0,'C');
$pdf->Cell(78,240,'__________________',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(-78,250,'Barangay Captain',0,0,'C');

$pdf->Output();

?>