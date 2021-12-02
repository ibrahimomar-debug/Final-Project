<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require_once "AdminDatabase.php";

$firstName = $middleName = $lastName = $residentID = $birthday = $gender = $position = $email = $phoneNumber = $username = $password = "";
$firstName_err = $middleName_err = $lastName_err = $residentID_err = $birthday_err = $gender_err = $position_err = $email_err = $phoneNumber_err = $username_err = $password_err = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
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
    $id = trim($_POST["identification"]);

        // Prepare an insert statement
        $sql = "UPDATE admindata SET firstName = ?, middleName = ?, lastName = ?, residentID = ?, birthday = ?, gender = ?, position = ?, email = ?, phoneNumber = ?, username = ? WHERE id = $id";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssssss", $param_firstName, $param_middleName, $param_lastName, $param_residentID, $param_birthday, $param_gender, $param_position, $param_email, $param_phoneNumber, $param_username);

            // Set parameters
            $param_firstName = $firstName;
            $param_middleName = $middleName;
            $param_lastName = $lastName;
            $param_residentID = $residentID;
            $param_birthday = $birthday;
            $param_gender = $gender;
            $param_position = $position;
            $param_email = $email;
            $param_phoneNumber = $phoneNumber;
            $param_username = $username;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
              
                // Records created successfully. Redirect to landing page
                header("location: ManageAdmin.php");

                exit();

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();

    }

    // Close connection
    $mysqli->close();

?>