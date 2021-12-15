<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   include "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $purok = trim($_POST["purok"]);
    $population = 0;
    $processedBy = trim($_POST["processed-by"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $transactionID = $year.$month.$day.$hour.$minute.$seconds;

    $create = "Created Purok". " " .$transactionID;

        // Prepare an insert statement
        $sql = "INSERT INTO purok (purok, population) VALUES ('$purok', '$population')";
        $query_run = mysqli_query($mysqli, $sql);

            // Attempt to execute the prepared statement
            if ($query_run) {

                $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
                ('$create', '$processedBy')";
                $query_run2 = mysqli_query($mysqli, $sql2);

                // Records created successfully. Redirect to landing page
                header("location: ManagePurok.php");

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

?>