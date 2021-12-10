<?php
// Initialize the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />
    <link rel="stylesheet" href="Dashboard.css" />
    <!-- Title Page-->
    <title>Main Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all" />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Bootstrap CSS-->
    <link
      href="vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Vendor CSS-->
    <link
      href="vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link
      href="vendor/css-hamburgers/hamburgers.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/perfect-scrollbar/perfect-scrollbar.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/vector-map/jqvmap.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all" />
  </head>
  <body class="animsition">
    <div class="page-wrapper">
      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar2">
        <div class="menu-sidebar2__content js-scrollbar1">
          <div class="logo">
            <div class="row mx-auto">
              <div class="col">
                <p
                  class="text-white text-start text-uppercase"
                  style="font-weight: bolder"
                >
                  Barangay Oranbo
                </p>
                <p
                  class="text-white text-start text-uppercase"
                  style="font-weight: bolder"
                >
                  Pasig City
                </p>
                <p
                  class="text-white text-start text-uppercase"
                  style="font-weight: bolder"
                >
                  Province of Rizal
                </p>                
              </div>
            </div>
          </div>
          <div class="account2">
            <div class="image img-cir img-140">
              <img src="images/icon/brgy.png" />
            </div>
          </div>
          <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="Dashboard.php">
                  <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-users"></i>Resident Information
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a class="" href="ManageResident.php">
                      <i class="fas fa-tasks"></i>Manage Resident</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-certificate"></i>Certificate Issuance
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="ManageIssuance.php">
                      <i class="fas fa-tasks"></i>Manage Issuance</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-cog"></i>Admin Config
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="ManageAdmin.php">
                      <i class="fas fa-tasks"></i>Manage Admin</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->
      <!-- PAGE CONTAINER-->
      <div class="page-container2">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop2">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap2">
                <div class="header-button2">
                  <!--BAR-->
                  <div class="header-button-item mr-0 js-sidebar-btn">
                    <i class="zmdi zmdi-menu"></i>
                  </div>
                  <div class="setting-menu js-right-sidebar d-none d-lg-block">
                    <div class="account-dropdown__body">
                      <div class="account-dropdown__item">
                        <a href="Destroy.php">
                          <i class="fas fa-sign-out-alt"></i>Sign Out</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
          <div class="logo"></div>
          <div class="menu-sidebar2__content js-scrollbar2">
            <div class="account2">
              <div class="image img-cir img-120">
                <img src="images/icon/brgy.png" alt="John Doe" />
              </div>
            </div>
            <nav class="navbar-sidebar2">
              <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                  <a class="js-arrow" href="Dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>Dashboard
                  </a>
                </li>
                <li class="has-sub">
                  <a class="js-arrow" href="#">
                    <i class="fas fa-users"></i>Resident Information
                    <span class="arrow">
                      <i class="fas fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                      <a href="Manage_Information.php">
                        <i class="fas fa-tasks"></i>Manage Resident</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-sub">
                  <a class="js-arrow" href="#">
                    <i class="fas fa-certificate"></i>Certificate Issuance
                    <span class="arrow">
                      <i class="fas fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                      <a href="Manage_Issuance.html">
                        <i class="fas fa-tasks"></i>Manage Issuance</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-sub">
                  <a class="js-arrow" href="#">
                    <i class="fas fa-cog"></i>Admin Config
                    <span class="arrow">
                      <i class="fas fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                      <a href="Manage_Admin.php">
                        <i class="fas fa-tasks"></i>Manage Admin</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
        <!-- END HEADER DESKTOP-->
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-0"></section>
        <!-- END BREADCRUMB-->

        <!-- STATISTIC-->

        <?php include "AdminDatabase.php"?>

        <?php
          $sql = "SELECT id from residentdata";
          $result = $mysqli->query($sql);

          $total = mysqli_num_rows($result);
          
        ?>

         <?php
          $sql = "SELECT sex from residentdata where sex = 'male'";
          $result = $mysqli->query($sql);

          $male = mysqli_num_rows($result);

          ?>

        <?php
          $sql = "SELECT sex from residentdata where sex = 'female'";
          $result = $mysqli->query($sql);

          $female = mysqli_num_rows($result);

          ?>

        <?php
          $sql = "SELECT voterStatus from residentdata where voterStatus = 'active'";
          $result = $mysqli->query($sql);

          $active = mysqli_num_rows($result);

          ?>

        <?php
          $sql = "SELECT voterStatus from residentdata where voterStatus = 'inactive'";
          $result = $mysqli->query($sql);

          $inactive = mysqli_num_rows($result);

          ?>
          
        <?php
          $sql = "SELECT residentType from residentdata where residentType = 'native'";
          $result = $mysqli->query($sql);

          $native = mysqli_num_rows($result);

          ?>
          
        <?php
          $sql = "SELECT residentType from residentdata where residentType = 'rentee'";
          $result = $mysqli->query($sql);

          $rentee = mysqli_num_rows($result);

          ?> 

          <?php
          $sql = "SELECT residentStatus from residentdata where residentStatus = 'active'";
          $result = $mysqli->query($sql);

          $activeResident = mysqli_num_rows($result);

          ?>

        <?php
          $sql = "SELECT residentStatus from residentdata where residentStatus = 'inactive'";
          $result = $mysqli->query($sql);

          $inactiveResident = mysqli_num_rows($result);

          ?>
          
        <?php
          $sql = "SELECT residentStatus from residentdata where residentStatus = 'deceased'";
          $result = $mysqli->query($sql);

          $deceased = mysqli_num_rows($result);

          ?>           


        <section class="statistic">
          <div class="section__content section__content--p30">
            <div class="container-fluid">

              <h1 class="mt-3 mb-5">Population Breakdown</h1>

              <div class="row">
                <div class="col-md-8 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $total?></h2>
                    <span class="text-dark">Total Registered Population</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $male?></h2>
                    <span class="text-dark">Males</span>
                    <div class="icon">
                      <i class="zmdi zmdi-male-alt"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $female?></h2>
                    <span class="text-dark">Females</span>
                    <div class="icon">
                      <i class="zmdi zmdi-female"></i>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $active?></h2>
                    <span class="text-dark">Registered Voters</span>
                    <div class="icon">
                      <i class="zmdi zmdi-assignment-o"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $inactive?></h2>
                    <span class="text-dark">Unregistered Voters</span>
                    <div class="icon">
                      <i class="zmdi zmdi-assignment-o"></i>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $native?></h2>
                    <span class="text-dark">Native</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $rentee?></h2>
                    <span class="text-dark">Rentee</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $activeResident?></h2>
                    <span class="text-dark">Active Residents</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $inactiveResident?></h2>
                    <span class="text-dark">Inactive Residents</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="statistic__item">
                    <h2 class="text-dark"><?php echo $deceased?></h2>
                    <span class="text-dark">Deceased</span>
                    <div class="icon">
                      <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                  </div>
                </div>
                </div>

                <!--Barangay Officials-->

                <h1 class="mt-5 mb-5">Barangay Officials</h1>

                <?php
                $sql = "SELECT * FROM admindata";
                $result = $mysqli->query($sql);
                ?>

                <div class="table-responsive-lg">
                <table class="table">
                <thead>
                <tr>
                <th>Image</th>
                <th>Resident ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Position</th>
                </tr>
                </thead>
                <tr>                
                
                <?php
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                $id = $row["id"];
                $image = $row["image"];
                $residentID = $row["residentID"];
                $firstName = $row["firstName"];
                $middleName = $row["middleName"];
                $lastName = $row["lastName"];
                $birthday = $row["birthday"];
                $age = $row["age"];
                $gender = $row["gender"];
                $position = $row["position"];
                $email = $row["email"];
                $phoneNumber = $row["phoneNumber"];
                $username = $row["username"];
                  
                ?>

                <td>
                <?php
                echo'
                <img style="width: 80px" src="upload/'.$row['image'].'" alt="your image" class="img-thumbnail"/>';
                ?>
                </td>
                <td><?php echo $residentID;?></td>
                <td><?php echo $lastName;?></td>
                <td><?php echo $firstName;?></td>
                <td><?php echo $position;?></td>
                </tr>
                <?php
                }
                } else {
                echo "0 results";
                }
                ?>
                </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END STATISTIC-->


        <section class="statistic1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12"></div>
            </div>
          </div>
        </section>
        <section class="statistic1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12"></div>
            </div>
          </div>
        </section>
        <!-- END PAGE CONTAINER-->
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
  </body>
</html>
<!-- end document-->
