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
    $barangayLogo = trim($_FILES["updateImage"]['name']);
    $barangay = trim($_POST["barangay"]);
    $city= trim($_POST["city"]);
    $province = trim($_POST["province"]);
    $updatedBy= trim($_POST["updateBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $updateTransactionID = $year.$month.$day.$hour.$minute.$seconds;

    //$Barangay = "Barangay". " " .$barangay;
    //$cityOf = $city. " " ."City";
    //$provinceOf = "Province of". " " .$province;

    $update = "Updated Barangay Details". " " .$updateTransactionID;

        if ($_FILES["updateImage"]['name'] != NULL && $_FILES["updateImage"]['name'] != NULL){
            $sql3 = "UPDATE barangaydetails SET barangayLogo = '$barangayLogo' where id = 1";
            $query_run3 = mysqli_query($mysqli, $sql3);            
        }

        // Prepare an insert statement
        $sql = "UPDATE barangaydetails SET barangay = '$barangay', city = '$city', province = '$province' where id  = 1";
        $query_run = mysqli_query($mysqli, $sql);

            if ($query_run) {

                $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
                ('$update', '$updatedBy')";
                $query_run2 = mysqli_query($mysqli, $sql2);

                move_uploaded_file($_FILES["updateImage"]["tmp_name"], "logo/".$_FILES["updateImage"]["name"]);
                $_SESSION['success'] = "Image Added";
                // Records created successfully. Redirect to landing page
                header("location: ManageBarangayInfo.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

?>