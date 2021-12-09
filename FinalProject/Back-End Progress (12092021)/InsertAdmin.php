<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require "AdminDatabase.php";

$firstName = $middleName = $lastName = $residentID = $birthday = $gender = $position = $email = $phoneNumber = $username = $password = "";
$firstName_err = $middleName_err = $lastName_err = $residentID_err = $birthday_err = $gender_err = $position_err = $email_err = $phoneNumber_err = $username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $image = trim($_FILES["imageInput"]['name']);
    $firstName = trim($_POST["first-name"]);
    $middleName = trim($_POST["middle-name"]);
    $lastName = trim($_POST["last-name"]);
    $residentID = trim($_POST["resident-id"]);
    $birthday = trim($_POST["birthday"]);
    $gender = trim($_POST["gender"]);
    $position = trim($_POST["position"]);
    $email = trim($_POST["email"]);
    $phoneNumber = trim($_POST["phone-number"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $passwordEncrypt = password_hash($password, PASSWORD_DEFAULT);

    $dateOfBirth = $birthday;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    if(file_exists("upload/". $_FILES["imageInput"]["name"])){

    $store =  $_FILES["imageInput"]["name"];
    $_SESSION['status'] = "Image already exist. '$store'";

    }else{
        // Prepare an insert statement
        $sql = "INSERT INTO admindata (image, firstName, middleName, lastName, residentID, birthday, age, gender, position, email, phoneNumber, username, password) VALUES ('$image', '$firstName', '$middleName', '$lastName', '$residentID', '$birthday', '$age', '$gender', '$position', '$email', '$phoneNumber', '$username', '$passwordEncrypt')";
        $query_run = mysqli_query($mysqli, $sql);


            // Attempt to execute the prepared statement
            if ($query_run) {

                move_uploaded_file($_FILES["imageInput"]["tmp_name"], "upload/".$_FILES["imageInput"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageAdmin.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

?>