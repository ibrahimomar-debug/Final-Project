<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require_once "AdminDatabase.php";

$image = $firstName = $middleName = $lastName = $residentID = $birthday = $gender = $position = $email = $phoneNumber = $username = $password = "";
$image_err = $firstName_err = $middleName_err = $lastName_err = $residentID_err = $birthday_err = $gender_err = $position_err = $email_err = $phoneNumber_err = $username_err = $password_err = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $updateResidentID = trim($_POST["UpdateResidentID"]);
    $updateImage = trim($_FILES["updateImage"]['name']);
    $updateFamilyName = trim($_POST["UpdateFamilyName"]);
    $updateFirstName = trim($_POST["UpdateFirstName"]);
    $updateMiddleName = trim($_POST["UpdateMiddleName"]);
    $updateAlias = trim($_POST["UpdateAlias"]);
    $updateFaceMarks = trim($_POST["UpdateFaceMarks"]);
    $updateBirthDate = trim($_POST["UpdateBirthDate"]);
    $updateBirthPlace = trim($_POST["UpdateBirthPlace"]);
    $updateSex = trim($_POST["UpdateSex"]);

    $updateCivilStatus = trim($_POST["UpdateCivilStatus"]);
    $updateNationality = trim($_POST["UpdateNationality"]);
    $updateReligionBelief = trim($_POST["UpdateReligionBelief"]);
    $updateOccupation= trim($_POST["UpdateOccupation"]);
    $updateSpouseName = trim($_POST["UpdateSpouseName"]);
    $updateSpouseOccupation = trim($_POST["UpdateSpouseOccupation"]);
    $updateVoterStatus = trim($_POST["UpdateVoterStatus"]);

    $updateCityAddress = trim($_POST["UpdateCityAddress"]);
    $updateProvincialAddress = trim($_POST["UpdateProvincialAddress"]);
    $updatePurok = trim($_POST["UpdatePurok"]);
    $updateEmailAddress = trim($_POST["UpdateEmailAddress"]);
    $updateHomeNumberOne = trim($_POST["UpdateHomeNumberOne"]);
    $updateHomeNumberTwo = trim($_POST["UpdateHomeNumberTwo"]);
    $updateMobileNumberOne = trim($_POST["UpdateMobileNumberOne"]);
    $updateMobileNumberTwo = trim($_POST["UpdateMobileNumberTwo"]);

    $residentType = trim($_POST["UpdateResidentType"]);
    $residentStatus = trim($_POST["UpdateResidentStatus"]);
    $updateID = trim($_POST["UpdateID"]);
    //$updateTransactionID = trim($_POST["UpdateTransactionID"]);
    $updatedBy = trim($_POST["UpdatedBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $updateTransactionID = $year.$month.$day.$hour.$minute.$seconds;

    $update = "Updated Resident". " " .$updateResidentID. " " .$updateTransactionID;

    $dateOfBirth = $updateBirthDate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $updateAge = $diff->format('%y');

        if ($_FILES["updateImage"]['name'] != NULL && $_FILES["updateImage"]['name'] != NULL){
            $sql3 = "UPDATE residentdata SET image = '$updateImage' where id = $updateID";
            $query_run3 = mysqli_query($mysqli, $sql3);            
        }

        // Prepare an insert statement
        $sql = "UPDATE residentdata SET familyName = '$updateFamilyName', firstName = '$updateFirstName', middleName = '$updateMiddleName', alias = '$updateAlias', faceMarks = '$updateFaceMarks', birthDate = '$updateBirthDate', birthPlace = '$updateBirthPlace', age = '$updateAge', sex = '$updateSex', 
        civilStatus = '$updateCivilStatus', nationality = '$updateNationality', religionBelief = '$updateReligionBelief', occupation = '$updateOccupation', spouseName = '$updateSpouseName', spouseOccupation = '$updateSpouseOccupation', voterStatus = '$updateVoterStatus',
        cityAddress = '$updateCityAddress', provincialAddress = '$updateProvincialAddress', purok = '$updatePurok', emailAddress = '$updateEmailAddress', homeNumberOne = '$updateHomeNumberOne', homeNumberTwo = '$updateHomeNumberTwo', residentType = '$residentType', residentStatus = '$residentStatus' WHERE id = $updateID";
        $query_run = mysqli_query($mysqli, $sql);

            if ($query_run) {

                $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
                ('$update', '$updatedBy')";
                $query_run2 = mysqli_query($mysqli, $sql2);

                move_uploaded_file($_FILES["updateImage"]["tmp_name"], "upload/".$_FILES["updateImage"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageResident.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

?>