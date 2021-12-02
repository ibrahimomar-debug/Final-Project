<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require "LogDatabase.php";

    $residentID = "";
    $residentID_err = "";

if (isset($_GET['residentid'])){

    $residentID = trim($_GET["residentid"]);


        // Prepare an insert statement
        $sql = "INSERT INTO activity (residentID) VALUES (?)";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_residentID);

            // Set parameters
            $param_residentID = $residentID;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                header("location: dashboard.php");

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