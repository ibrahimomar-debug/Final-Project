<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require "ResidentDatabase.php";

   $image = $residentID = $familyName = $firstName = $middleName = $alias = $faceMarks = $birthPlace = $birthPlace = $sex = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $image = trim($_FILES["imageInput"]['name']);
    $residentID = mt_rand(100000,999999);
    $familyName = trim($_POST["family-name"]);
    $firstName = trim($_POST["first-name"]);
    $middleName = trim($_POST["middle-name"]);
    $alias = trim($_POST["alias"]);
    $faceMarks = trim($_POST["face-marks"]);
    $birthDate = trim($_POST["birth-date"]);
    $birthPlace = trim($_POST["birth-place"]);
    $sex = trim($_POST["sex"]);

    $civilStatus = trim($_POST["civil-status"]);
    $nationality = trim($_POST["nationality"]);
    $religionBelief = trim($_POST["religion-belief"]);
    $occupation= trim($_POST["occupation"]);
    $spouseName = trim($_POST["spouse-name"]);
    $spouseOccupation = trim($_POST["spouse-occupation"]);
    $voterStatus = trim($_POST["voter-status"]);

    $cityAddress = trim($_POST["city-address"]);
    $provincialAddress = trim($_POST["provincial-address"]);
    $purok = trim($_POST["purok"]);
    $emailAddress = trim($_POST["email-address"]);
    $homeNumberOne = trim($_POST["homenumber-one"]);
    $homeNumberTwo = trim($_POST["homenumber-two"]);
    $mobileNumberOne = trim($_POST["mobilenumber-one"]);
    $mobileNumberTwo = trim($_POST["mobilenumber-two"]);

    $residentType = trim($_POST["resident-type"]);
    $residentStatus = trim($_POST["resident-status"]);
    $processedBy = trim($_POST["processed-by"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $transactionID = $year.$month.$day.$hour.$minute.$seconds;

    $create = "Created Resident". " " .$residentID. " " .$transactionID;
    
    $dateOfBirth = $birthDate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    if(file_exists("upload/". $_FILES["imageInput"]["name"])){

    $store =  $_FILES["imageInput"]["name"];
    $_SESSION['status'] = "Image already exist. '$store'";

    }else{
        // Prepare an insert statement
        /**$sql = "INSERT INTO residentdata (image, residentID, familyName, firstName, middleName, alias, faceMarks, birthDate, birthPlace, sex, 
        nationality, religionBelief, occupation, spouseName, spouseOccupation, voterStatus, 
        cityAddress, provincialAddress, purok, emailAddress, homeNumberOne, homeNumberTwo, mobileNumberOne, mobileNumberTwo,
        residentType, residentStatus, processedBy, transactionID) VALUES ('$image', '$residentID', '$familyName', '$firstName', '$middleName', '$alias', '$faceMarks', '$birthDate', '$birthPlace', '$sex', 
        '$nationality', '$religionBelief', '$occupation', '$spouseName', '$spouseOccupation', '$voterStatus',
        '$cityAddress', '$provincialAddress', '$purok', '$emailAddress', '$homeNumberOne', '$homeNumberTwo', '$mobileNumberOne', '$mobileNumberTwo',
        '$residentType', '$residentStatus', '$processedBy', '$transactionID')";**/
        
        $sql = "INSERT INTO residentdata (image, residentID, familyName, firstName, middleName, alias, faceMarks, birthDate, birthPlace, age, sex,
        civilStatus, nationality, religionBelief, occupation, spouseName, spouseOccupation, voterStatus,
        cityAddress, provincialAddress, purok, emailAddress, homeNumberOne, homeNumberTwo, mobileNumberOne, mobileNumberTwo,
        residentType, residentStatus, processedBy, transactionID) VALUES 
        ('$image', '$residentID', '$familyName', '$firstName', '$middleName', '$alias', '$faceMarks', '$birthDate', '$birthPlace', '$age', '$sex',
        '$civilStatus', '$nationality', '$religionBelief', '$occupation', '$spouseName', '$spouseOccupation', '$voterStatus',
        '$cityAddress', '$provincialAddress', '$purok', '$emailAddress', '$homeNumberOne', '$homeNumberTwo', '$mobileNumberOne', '$mobileNumberTwo',
        '$residentType', '$residentStatus', '$processedBy', '$transactionID')";
         $query_run = mysqli_query($mysqli, $sql);


            // Attempt to execute the prepared statement
            if ($query_run) {

                $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
                ('$create', '$processedBy')";
                $query_run2 = mysqli_query($mysqli, $sql2);

                move_uploaded_file($_FILES["imageInput"]["tmp_name"], "upload/".$_FILES["imageInput"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageResident.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

    }
    
?>