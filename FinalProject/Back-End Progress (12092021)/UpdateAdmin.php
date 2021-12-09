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
    $imageUpdate = $_FILES["updateImage"]['name'];
    $firstName = trim($_POST["UpdateFirstName"]);
    $middleName = trim($_POST["UpdateMiddleName"]);
    $lastName = trim($_POST["UpdateLastName"]);
    $residentID = trim($_POST["UpdateResidentID"]);
    $birthday = trim($_POST["UpdateBirthday"]);
    $gender = trim($_POST["UpdateGender"]);
    $position = trim($_POST["UpdatePosition"]);
    $email = trim($_POST["UpdateEmail"]);
    $phoneNumber = trim($_POST["UpdatePhoneNumber"]);
    $username = trim($_POST["UpdateUsername"]);
    $updateID = trim($_POST["identification"]);

    $dateOfBirth = $birthday;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

        // Prepare an insert statement
        $sql = "UPDATE admindata SET image = '$imageUpdate', firstName = '$firstName', middleName = '$middleName', lastName = '$lastName', residentID = '$residentID', birthday = '$birthday', age = '$age', gender = '$gender', position = '$position', email = '$email', phoneNumber = '$phoneNumber', username = '$username' WHERE id = $updateID";
        $query_run = mysqli_query($mysqli, $sql);

            if ($query_run) {

                move_uploaded_file($_FILES["updateImage"]["tmp_name"], "upload/".$_FILES["updateImage"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageAdmin.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

?>