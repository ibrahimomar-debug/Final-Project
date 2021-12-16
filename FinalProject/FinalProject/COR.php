 <?php

require("GeneratePDF/fpdf.php");
include "Database.php";

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

        header("location: Invalid.php");
    }

    else if($residentStatus == "Deceased"){

        header("location: Invalid.php");
    }

    $sql = "SELECT firstName, middleName, lastName from admindata where position =  'barangay captain'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $captainFirstName = $row["firstName"];
        $captainMiddleName = $row["middleName"];
        $captainLastName = $row["lastName"];
        $barangayCaptain = $captainFirstName. " ".$captainMiddleName." " .$captainLastName;

    }
    } else {
    echo "0 results";
    }

    $sql = "SELECT * FROM barangaydetails";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    $image = $row["barangayLogo"];
    $barangay = $row["barangay"];
    $city = $row["city"];
    $province= $row["province"];
    }
    }


$pdf->AddPage(); 

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,0,'Republic of the Philippines',0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(-190,10,"Province of $province",0,0,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,20,"Municipality of $city",0,0,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(-190,30,"Barangay $barangay",0,0,'C');

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
$pdf->Cell(-78,238,'',0,0,'C');
$pdf->Cell(78,240,'__________________',0,0,'C');
$pdf->SetFont('Arial','',11);
$pdf->Cell(-78,250,'Barangay Captain',0,0,'C');

$pdf->Output();

?>