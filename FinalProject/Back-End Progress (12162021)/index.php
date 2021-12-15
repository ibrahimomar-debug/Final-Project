<?php

  // PHP7 specific, fails fast, this file only 
   declare(strict_types=1); 
  // this file and all included/required files
   error_reporting(-1); 
   ini_set('display_errors', 'true');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to main page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;

}

// Include config file
include "Database.php";

// Define variables and initialize with empty values
$residentID = $password = "";
$residentID_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
        // Prepare a select statement
        $sql = "SELECT id, firstName, lastName, residentID, position, birthday, email, phoneNumber, username, gender, password FROM admindata WHERE username = ?";
    
        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if residentID exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $firstName, $lastName, $residentID, $position, $birthday, $email, $phoneNumber, $gender, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["firstName"] = $firstName;
                            $_SESSION["lastName"] = $lastName;
                            $_SESSION["residentID"] = $residentID;
                            $_SESSION["position"] = $position;
                            $_SESSION["birthday"] = $birthday;
                            $_SESSION["email"] = $email;
                            $_SESSION["phoneNumber"] = $phoneNumber;
                            $_SESSION["gender"] = $gender;
                            $_SESSION["username"] = $username;
                            $_SESSION["password"] = $hashed_password;

                            $log = 'Admin'." ".$_SESSION["firstName"]. " ".$_SESSION["lastName"]. " " ."Logged In";

                            $sql2 = "INSERT INTO accountlog (log) VALUES 
                            ('$log')";
                            $query_run2 = mysqli_query($mysqli, $sql2);

                            // Redirect user to welcome page
                            header("location: Dashboard.php");
                        }
                    }
                }
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
        <link rel="stylesheet" href="index.css" />
        <link href="logo/<?php echo $image?>" rel="icon" />
        <link href="logo/<?php echo $image?>" rel="icon" />        
        <!-- Title Page-->
        <title>Login</title>
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
                                    <label for="formGroupExampleInput">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                                    <div class="invalid" id="user-tooltip">
                                        error message 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                    <div class="invalid" id="pass-tooltip">
                                        error message 
                                    </div>
                                    </div class="mt-2">
                                    <button class="btn modal-button-color text-white au-btn au-btn--block au-btn--green m-b-20" type="submit" onclick=" return logInfunction()" name="register" id="register">Sign In</button>
                            </form>
                            <p class="text-center">
                            <a style="color: white;" href="ForgotPassword.php">Forgot Password?</a>
                            </p>
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