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
    $purpose =$_POST['GeneratePurpose'];
    $processedBy = trim($_POST["GeneratedBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $transactionID = $year.$month.$day.$hour.$minute.$seconds;
    $ORNumber = $year.$month.$day;
    $cedulaNumber = $seconds.$minute.$hour;  

    $create = "Created BC". " " .$residentID. " " .$transactionID;

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $monthLetter = date("F");
    $monthNumber = date("m");
    $day = date("d");

    $dateOfBirth = $birthDate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    $currentDate1 =  $monthLetter. " " .$day. ", " .$year;
    $currentDate2 =  $monthNumber. "/" .$day. "/" .$year;
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
    
    $pdf = new FPDF('P','mm',array(200,225));
    
    $pdf->AddPage(); 
    $pdf->Rect(10,55,50,115,'C');

    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,0,"The Republic of the Philippines",0,1,'C');
    $pdf->Cell(0,10,"Province of $province",0,1,'C');
    $pdf->Cell(0,0,"Municipality of $city",0,1,'C');
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,15,"Barangay $barangay",0,1,'C');

    $pdf->SetFont('Arial','B',18);

    $pdf->Cell(0,10,"Barangay Clearance",0,1,'C');



    $pdf->SetFont('Arial','',10);

    $pdf->Cell(43,50,"       __________________",0,1,'R');
    $pdf->Cell(41,-40,"Barangay Captain",0,1,'R');

    $pdf->Cell(43,60,"       __________________",0,0,'R');
    $pdf->Cell(-10,70,"Kagawad",0,0,'R');



    $pdf->Cell(10,90,"       __________________",0,0,'R');
    $pdf->Cell(-10,100,"Secretary",0,0,'R');



    $pdf->Cell(10,120,"       __________________",0,0,'R');
    $pdf->Cell(-10,130,"Treasurer",0,0,'R');



    $pdf->Cell(140,22,'This is to certify that '.$fullName.' that is '.$Age.', '.$nationality.'',0,1,'R');
    $pdf->Cell(175,-10,'and a bonafied resident of Barangay '.$barangay.' and that has no derogatory',0,1,'R');
    $pdf->Cell(173,20,'records in the Barangay prior to the date of issuance of this certificate',0,1,'R');
    $pdf->Cell(170,0,'This certificate is issued in '.$fullName.' request for:  ',0,1,'R');


    $pdf->SetFont('Arial','B',10);

    if($purpose != NULL){
    $pdf->Cell(125,10,''.$purpose.'',0,1,'R');
    }

    if($purpose == NULL){
    $pdf->Cell(137,15,'___________________',0,1,'R');
    }

    $pdf->SetFont('Arial','',10);
    $pdf->Cell(145,15,'Issued this '.$currentDate1.'',0,1,'R');


    $pdf->Cell(110,10,'___________________',0,0,'R');
    $pdf->Cell(60,10,'___________________',0,1,'R');
    $pdf->Cell(100,0,'Signature',0,0,'R');
    $pdf->Cell(65,0,'Barangay Captain',0,1,'R');

    $pdf->Cell(78,50,'OR Number: ',0,0,'R');
    $pdf->Cell(17,48,''.$ORNumber.'',0,0,'R');
    $pdf->Cell(10,50,'_____________',0,0,'R');
    $pdf->Cell(41,50,'Cedula Number: ',0,0,'R');
    $pdf->Cell(17,48,''.$cedulaNumber.'',0,0,'R');
    $pdf->Cell(10,50,'_____________',0,1,'R');

    $pdf->Cell(84,-20,'OR Date Issued: ',0,0,'R');
    $pdf->Cell(20,-21,''.$currentDate2.'',0,0,'R');
    $pdf->Cell(11,-20,'_____________',0,0,'R');

    $pdf->Cell(37,-20,'Cedula Date Issued: ',0,0,'R');
    $pdf->Cell(20,-21,''.$currentDate2.'',0,0,'R');
    $pdf->Cell(11,-20,'_____________',0,0,'R');

    $pdf->Output();

?>