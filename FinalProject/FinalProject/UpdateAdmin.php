<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   include "Database.php";

$image = $firstName = $middleName = $lastName = $residentID = $birthday = $gender = $position = $email = $phoneNumber = $username = $password = "";
$image_err = $firstName_err = $middleName_err = $lastName_err = $residentID_err = $birthday_err = $gender_err = $position_err = $email_err = $phoneNumber_err = $username_err = $password_err = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $updateResidentID = trim($_POST["UpdateResidentID"]);
    $imageUpdate = trim($_FILES["updateImage"]['name']);
    $updateFirstName = trim($_POST["UpdateFirstName"]);
    $updateMiddleName = trim($_POST["UpdateMiddleName"]);
    $updateLastName = trim($_POST["UpdateLastName"]);
    $updateResidentID = trim($_POST["UpdateResidentID"]);
    $updateBirthday = trim($_POST["UpdateBirthday"]);
    $updateGender = trim($_POST["UpdateGender"]);
    $updatePosition = trim($_POST["UpdatePosition"]);
    $updateEmail = trim($_POST["UpdateEmail"]);
    $updatePhoneNumber = trim($_POST["UpdatePhoneNumber"]);
    $updateUsername = trim($_POST["UpdateUsername"]);
    $updateID = trim($_POST["identification"]);
    $updatedBy = trim($_POST["UpdatedBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $updateTransactionID = $year.$month.$day.$hour.$minute.$seconds;

    $update = "Updated Admin". " " .$updateResidentID. " " .$updateTransactionID;

    $dateOfBirth = $updateBirthday;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $updateAge = $diff->format('%y');

        if ($_FILES["updateImage"]['name'] != NULL && $_FILES["updateImage"]['name'] != NULL){
            $sql3 = "UPDATE admindata SET image = '$imageUpdate' where id = $updateID";
            $query_run3 = mysqli_query($mysqli, $sql3);            
        }

        // Prepare an insert statement
        $sql = "UPDATE admindata SET firstName = '$updateFirstName', middleName = '$updateMiddleName', lastName = '$updateLastName', residentID = '$updateResidentID', birthday = '$updateBirthday', age = '$updateAge', gender = '$updateGender', position = '$updatePosition', email = '$updateEmail', phoneNumber = '$updatePhoneNumber', username = '$updateUsername' WHERE id = $updateID";
        $query_run = mysqli_query($mysqli, $sql);

            if ($query_run) {

                $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
                ('$update', '$updatedBy')";
                $query_run2 = mysqli_query($mysqli, $sql2);

                move_uploaded_file($_FILES["updateImage"]["tmp_name"], "upload/".$_FILES["updateImage"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageAdmin.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

?>