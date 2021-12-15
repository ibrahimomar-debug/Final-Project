<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   require_once "Database.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $password = trim($_POST["password"]);
    $residentID = trim($_POST["resident-id"]);

        // Prepare an insert statement
        $sql = "UPDATE admindata SET password = ? WHERE residentID = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_password, $param_residentID);

            // Set parameters
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_residentID = $residentID;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                session_destroy();
                header("location: index.php");

                exit();

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

?>

<?php
$sql = "SELECT * FROM barangaydetails";
$result = $mysqli->query($sql);
?>
          
<?php
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

$image = $row["barangayLogo"];
$barangay = $row["barangay"];
$city = $row["city"];
$province= $row["province"];

}
} else {
echo "0 results";
}        

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <link rel="stylesheet" href="ForgotPassword.css" />
        <link href="logo/<?php echo $image?>" rel="icon" />
        <link href="logo/<?php echo $image?>" rel="icon" />
        <!-- Title Page-->
        <title>Forgot Password</title>
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
    </head>
    <body class="bg">
        <div class="page-wrapper bg">
        <div class="bg">
            <div class="container bg">
                <div class="login-wrap bg">
                    <div class="login-content login-content-style text-white">
                        <div class="login-logo">
                            <a href="#">
                            
                            <img src="logo/<?php echo $image?>">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Resident ID</label>
                                    <input type="text" class="form-control" id="resident-id" name="resident-id" placeholder="Enter Resident ID" required>

                                </div>                            
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>

                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Confirm Password</label>
                                    <input type="password" class="form-control" id="password" name="confirm-password" placeholder="Enter Confirm Password" required>

                                    <div class="mt-2">
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" onclick=" return logInfunction()" name="register" id="register">Change Password</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <!-- Main JS-->
        <script src="js/main.js"></script>
        <script src="js/loginVal.js"></script>
    </body>
</html>
<!-- end document-->