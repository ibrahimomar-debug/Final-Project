 <?php

require("GeneratePDF/fpdf.php");
require_once "AdminDatabase.php";

$pdf = new FPDF();

    $firstName = trim($_POST["GenerateFirstName"]);
    $lastName = trim($_POST["GenerateFamilyName"]);
    $middleName = trim($_POST["GenerateMiddleName"]);
    $residentID = trim($_POST["GenerateResidentID"]);
    $birthDate = trim($_POST["GenerateBirthDate"]);
    $civilStatus = trim($_POST["GenerateCivilStatus"]);
    $nationality = trim($_POST["GenerateNationality"]);
    $residentStatus = trim($_POST["GenerateResidentStatus"]);
    $processedBy = trim($_POST["GeneratedBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $transactionID = $year.$month.$day.$hour.$minute.$seconds;    

    $create = "Created COR". " " .$residentID. " " .$transactionID;

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("F");
    $day = date("d");

    $dateOfBirth = $birthDate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    $currentDate =  $month. " " .$day. ", " .$year;
    $fullName = $firstName. " " .$middleName. " " .$lastName;

    if ($age < "18") {
        $Age = "Underage";
    }

    else if ($age >= "18") {
        $Age = "Legal Age";
    }

    if($residentStatus == "Active"){

        $sql = "INSERT INTO logs (action, processedBy) VALUES 
        ('$create', '$processedBy')";
        $query_run = mysqli_query($mysqli, $sql);

    }

    if($residentStatus == "Inactive"){

        header("location: ManageIssuance.php");
    }

    else if($residentStatus == "Deceased"){

        header("location: ManageIssuance.php");
    }



$pdf->AddPage(); 

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,0,'Republic of the Philippines',0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(-190,10,'Province of Rizal',0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,20,'Municipality of Pasig',0,0,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(-190,30,'Barangay Oranbo',0,0,'C');

$pdf->SetFont('Arial','B',18);
$pdf->Cell(190,60,'Certificate of Residency',0,0,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(-190,95,'This is to certify that '.$fullName.' of '.$Age.', '.$civilStatus.', '.$nationality.', whose',0,0,'C');
$pdf->Cell(190,105,'specimen signature appears below is a PERMANENT RESIDENT of this Barangay Oranbo, Pasig City,',0,0,'C');
$pdf->Cell(-190,115,'Rizal Province.',0,0,'C');

$pdf->Cell(190,135,'Based on the records of this office, '.$fullName.' has been residing at Barangay Balante,',0,0,'C');
$pdf->Cell(-190,145,'Gapan City, Nueva Ecija Province.',0,0,'C');

$pdf->Cell(190,165,'This CERTIFICATION is being issued upon the request of the above-named person of whatever legal',0,0,'C');
$pdf->Cell(-190,175,'purpose it may serve.',0,0,'C');

$pdf->Cell(190,195,'Issued this '.$currentDate.' at Barangay Balante, Gapan City, Nueva Ecija Province.',0,0,'C');

$pdf->Cell(-302,240,'__________________',0,0,'C');
$pdf->Cell(302,250,'Specimen Signature',0,0,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(-78,238,'Barangay Balante',0,0,'C');
$pdf->Cell(78,240,'__________________',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(-78,250,'Barangay Captain',0,0,'C');

$pdf->Output();

?>