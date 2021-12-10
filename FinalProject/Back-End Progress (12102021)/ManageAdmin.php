<?php 

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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <link rel="stylesheet" href="ManageAdmin.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <!-- Title Page-->
        <title>Admin Information</title>
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <div class="row mx-auto ">
                        <div class="col">
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Barangay Oranbo</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Pasig City</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Province of Rizal</p>
                        </div>
                    </div>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-140">
                            <img src="images/icon/brgy.png"  />
                        </div>
                    </div>
                    <nav class="navbar-sidebar2 ">
                        <ul class="list-unstyled navbar__list ">
                            <li class="active has-sub">
                                <a class="js-arrow" href="Dashboard.php"  style="text-decoration: none;">
                                <i class="fas fa-tachometer-alt"></i>Dashboard </a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#"  style="text-decoration: none;">
                                <i class="fas fa-users  "></i>Resident Information
                                <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                                </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a  href="ManageResident.php"  style="text-decoration: none;">
                                        <i class="fas fa-tasks"></i>Manage Residence</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow " href="#"  style="text-decoration: none;">
                                <i class="fas fa-certificate"  style="text-decoration: none;"></i>Certificate Issuance
                                <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                                </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a  href="ManageIssuance.php"  style="text-decoration: none;">
                                        <i class="fas fa-certificate"></i>Manage Issuance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow " href="#"  style="text-decoration: none;">
                                <i class="fas fa-cog"></i>Admin Config
                                <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                                </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a  href="ManageAdmin.php"  style="text-decoration: none;">
                                        <i class="fas fa-tasks"></i>Manage Admin</a>
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
                                <div class="logo d-block d-lg-none">
                                    <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                    <!--BAR-->
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item ">
                                                <a href="Destroy.php" style="text-decoration: none;">
                                                <i class="fas fa-sign-out-alt"></i>Sign Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                    <div class="logo">
                        <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                            </div>
                            <h4 class="name">john doe</h4>
                            <a href="Destroy.php">Sign out</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li class="active has-sub ">
                                    <a class="js-arrow " href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="index.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-shopping-basket"></i>eCommerce</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                    <i class="fas fa-trophy"></i>Features
                                    <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="table.html">
                                            <i class="fas fa-table"></i>Tables</a>
                                        </li>
                                        <li>
                                            <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                        </li>
                                        <li>
                                            <a href="calendar.html">
                                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                                        </li>
                                        <li>
                                            <a href="map.html">
                                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages
                                    <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="login.html">
                                            <i class="fas fa-sign-in-alt"></i>Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">
                                            <i class="fas fa-user"></i>Register</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.html">
                                            <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>UI Elements
                                    <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="button.html">
                                            <i class="fab fa-flickr"></i>Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">
                                            <i class="fas fa-comment-alt"></i>Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.html">
                                            <i class="far fa-window-maximize"></i>Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.html">
                                            <i class="far fa-id-card"></i>Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.html">
                                            <i class="far fa-bell"></i>Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.html">
                                            <i class="fas fa-tasks"></i>Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.html">
                                            <i class="far fa-window-restore"></i>Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.html">
                                            <i class="fas fa-toggle-on"></i>Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">
                                            <i class="fas fa-th-large"></i>Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html">
                                            <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                        </li>
                                        <li>
                                            <a href="typo.html">
                                            <i class="fas fa-font"></i>Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                <!-- END HEADER DESKTOP-->
                <!-- BREADCRUMB-->
                <section class="au-breadcrumb m-t-75">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                <li class="list-inline-item active">
                                                    <a href="index2.html">Home</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">Admin Config</li>
                                            </ul>
                                        </div>
                                        <!-- <button class="au-btn au-btn-icon au-btn--green">
                                            <i class="zmdi zmdi-plus"></i>add item</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->

        <!--Beginning of First Table-->
          <section class="statistic">
          <div class="section__content section__content--p30">
          <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
          <!-- DATA TABLE -->
          <div class="table-data__tool">
          <div class="table-data__tool-left">
          <h3 class="title-5 m-b-18">Admin Information</h3>
          </div>
          <div class="table-data__tool-right">
          <button class="btn modal-button-color text-white" data-toggle="modal" data-target="#exampleModalCentered">
          <i class="zmdi zmdi-plus"></i> Add Admin</button>
          </div>
          </div>

          <?php
          require_once "AdminDatabase.php";
          $sql = "SELECT * FROM admindata";
          $result = $mysqli->query($sql);
          ?>

          <table class="mb-5"  cellspacing="5" cellpadding="5">
          <tbody>
          <tr> 
          <td class="mb-1">Minimum age:</td>
          <td><input class="form-control ms-1 mb-1" type="text" id="min" name="min"></td>
          </tr>
          <tr>
          <td>Maximum age:</td>
          <td><input class="form-control ms-1" type="text" id="max" name="max"></td>
          </tr>
          </tbody>
          </table>          

          <div class="table-responsive table-responsive-data2">
          <table id="myTable" class="table table-data2">
          <thead>
          <tr>
          <th>Image</th>
          <th>Resident ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Position</th>
          <th>Email</th>
          <th style="display:none;"></th>
          <th style="display:none;"></th>
          <th style="display:none;"></th>
          <th style="display:none;"></th>
          <th style="display:none;"></th>
          <th style="display:none;"></th>
          <th>Action</th>
          </tr>
          </thead>

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

          <tr>
          <td>
          <?php
          echo'
          <img style="width: 80px" src="upload/'.$row['image'].'" alt="your image" class="img-thumbnail"/>';
          ?>
          </td>
          <td class="desc"><?php echo $residentID; ?></td>
          <td><?php echo $lastName;?></td>
          <td><?php echo $firstName;?></td>
          <td><?php echo $age;?></td>
          <td><?php echo $gender;?></td>
          <td><?php echo $position;?></td>
          <td><?php echo $email;?></td>
          <td style="display:none;"><?php echo $middleName;?></td>
          <td style="display:none;"><?php echo $birthday;?></td>
          <td style="display:none;"><?php echo $phoneNumber;?></td>
          <td style="display:none;"><?php echo $username;?></td>
          <td style="display:none;"><?php echo $id;?></td>
          <td style="display:none;"><?php echo $image;?></td>
          <td>
          <div class="table-data-feature">
          <button class="item viewbtn" data-toggle="tooltip" data-placement="top" title="View">
          <i class="zmdi zmdi-eye"></i>
          </button>
          <a class="item editbtn" data-toggle="tooltip" data-placement="top" title="Edit">
          <i class="zmdi zmdi-edit"></i>
          </a>
          <a class="item deletebtn" data-toggle="tooltip" data-placement="top" title="Delete">
          <i class="zmdi zmdi-delete"></i>
          </a>
          </div>
          </td>
          </tr>
          
          <?php
          }
          } else {
          echo "0 results";
          }

          $mysqli->close();
          ?>

          </table>
          </div>
          </div>
          </div>
          </div>
          </div>
          </section>
        <!--End of first table -->

                <!--Beginning of 2nd table -->
                <section class="statistic2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!---- End of Second Table -->  

                <!-- Start of Delete Modal -->
                <section class="statistic1" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <!--  <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <form action="DeleteAdmin.php" method="POST">
                <div class="modal fade" id="deletemodal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-header-color">
                            <h5 class="modal-title modal-title-color-text">Delete Admin</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="text-white" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                <input type="hidden" name="deleteid" id="deleteid">
                                <input type="hidden" name="DeleteResidentID" id="DeleteResidentID">
                                <input type="hidden" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" name="DeletedBy" id="DeletedBy">
                                <p>Delete Admin?</p>
                                </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn modal-button-color text-white">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End of Delete Modal -->

                <!-- Start of Add Modal --> 
                <form action="InsertAdmin.php" method="POST" enctype="multipart/form-data">              
                <div class="modal fade" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header modal-header-color">
                                <h4 class="modal-title modal-title-color-text" id="exampleModalCenteredLabel">ADMIN REGISTRATION FORM</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="text-white" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-body-color">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img id="inIm" src="images/default-image.jpg" alt="your image" class="img-thumbnail"/>
                                            <div class="input-file">
                                            <input required style="display: none;" accept="image/*" type="file" name="imageInput" id="imageInput" />
                                                <a
                                                    style="color: white;"
                                                    class="btn modal-button-color text-white"
                                                    onclick="document.getElementById('imageInput').click();"
                                                    >
                                                    Upload Image
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="form-control-label">First Name</label>
                                                        <input type="text" id="first-name" name="first-name" placeholder="Enter First Name" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i> -->
                                                        <div class="invalid" id="fname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Last Name</label>
                                                        <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="lname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Middle Name</label>
                                                        <input type="text" id="middle-name" name="middle-name" placeholder="Enter Middle Name" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="mname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Resident ID</label>
                                                        <input type="text" id="resident-id" name="resident-id" placeholder="Enter Resident ID" class="form-control" required>
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="resID-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Position</label>
                                                        <select name="position" id="position" class="form-control" required>
                                                            <option value="" disabled selected>Select Position</option>
                                                            <option value="Barangay Captain">Barangay Captain</option>
                                                            <option value="Kagawad">Kagawad</option>
                                                            <option value="Secretary">Secretary</option>
                                                            <option value="Treasurer">Treasurer</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Birthday</label>
                                                        <input type="date" id="birthday" name="birthday" placeholder="Enter Username" class="form-control" required>
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="user-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Gender</label>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="" disabled selected>Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Prefer not to mention">Prefer not to mention</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Email</label>
                                                        <input type="Email" id="email" name="email" placeholder="Enter Email" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label  class="form-control-label">Phone Number</label>
                                                        <input type="Number" id="phone-number" name="phone-number" placeholder="Confirm Password" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="passrpt-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Username</label>
                                                        <input type="Text" id="username" name="username" placeholder="Enter Password" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Password</label>
                                                        <input onchange="if(this.checkValidity()) form.confirmPassword.pattern = this.value;" type="Password" id="password" name="password" placeholder="Enter Password" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label  class="form-control-label">Password Confirmation</label>
                                                        <input  onchange="if(this.checkValidity()) form.confirmPassword.pattern = this.value;" type="Password" id="confirmPassword" name="confirm-password" placeholder="Confirm Password" class="form-control" title="Confirm Password" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="passrpt-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="hidden" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" id="processed-by" name="processed-by" placeholder="Enter Password" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer modal-body-color">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn modal-button-color text-white" onclick="return myFunction()" id="register" name="register">Save Admin</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- End of Add Modal -->    

                <!-- Start of View Modal -->              
                <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header modal-header-color">
                                <h4 class="modal-title modal-title-color-text" id="exampleModalCenteredLabel">ADMIN DATASHEET</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="text-white" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-body-color">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <img id="ViewImage" src="images/default-image.jpg" alt="your image" class="img-thumbnail"/>
                                    </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="form-control-label ms-2half">First Name</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="text" id="ViewFirstName" name="ViewFirstName" placeholder="Enter First Name" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i> -->
                                                        <div class="invalid" id="fname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Last Name</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="text" id="ViewLastName" name="ViewLastName" placeholder="Enter Last Name" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="lname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Middle Name</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="text" id="ViewMiddleName" name="ViewMiddleName" placeholder="Enter Middle Name" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="mname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Resident ID</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="text" id="ViewResidentID" name="ViewResidentID" placeholder="Enter Resident ID" class="form-control">
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="resID-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label ms-2half">Position</label>
                                                        <select disabled style="border: none; background-color: transparent; outline: none" name="ViewPosition" id="ViewPosition" class="form-control">
                                                            <option value="" disabled selected>Select Position</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Barangay Captain">Barangay Captain</option>
                                                            <option value="Kagawad">Kagawad</option>
                                                            <option value="Secretary">Secretary</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Birthday</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="date" id="ViewBirthday" name="ViewBirthday" placeholder="Enter Username" class="form-control">
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="user-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label  class="form-control-label ms-2half">Age</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="Number" id="ViewAge" name="ViewAge" placeholder="Confirm Password" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="passrpt-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label ms-2half">Gender</label>
                                                        <select disabled style="border: none; background-color: transparent; outline: none" name="ViewGender" id="ViewGender" class="form-control">
                                                            <option value="" disabled selected>Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Prefer not to mention">Prefer not to mention</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Email</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="Email" id="ViewEmail" name="ViewEmail" placeholder="Enter Email" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label  class="form-control-label ms-2half">Phone Number</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="Number" id="ViewPhoneNumber" name="ViewPhoneNumber" placeholder="Confirm Password" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="passrpt-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label ms-2half">Username</label>
                                                        <input disabled style="border: none; background-color: transparent; outline: none" type="Text" id="ViewUsername" name="ViewUsername" placeholder="Enter Password" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer modal-body-color">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of View Modal -->                

                <!-- Start of Update Modal --> 
                <form action="UpdateAdmin.php" method="POST" enctype="multipart/form-data">              
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header modal-header-color">
                                <h4 class="modal-title modal-title-color-text" id="exampleModalCenteredLabel">UPDATE ADMIN DATASHEET</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="text-white" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-body-color">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img id="upIm" src="images/default-image.jpg" alt="your image" class="img-thumbnail"/>
                                            <div class="input-file">
                                            <input style="display: none;" accept="image/*" type="file" name="updateImage" id="updateImage" />
                                                <a
                                                    style="color: white;"
                                                    class="btn modal-button-color text-white"
                                                    onclick="document.getElementById('updateImage').click();"
                                                    >
                                                    Upload Image
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="form-control-label">First Name</label>
                                                        <input type="text" id="UpdateFirstName" name="UpdateFirstName" class="form-control" readonly>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i> -->
                                                        <div class="invalid" id="fname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Last Name</label>
                                                        <input type="text" id="UpdateLastName" name="UpdateLastName" class="form-control" readonly>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="lname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Middle Name</label>
                                                        <input type="text" id="UpdateMiddleName" name="UpdateMiddleName" class="form-control" readonly>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="mname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Resident ID</label>
                                                        <input type="text" id="UpdateResidentID" name="UpdateResidentID" class="form-control" readonly>
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="resID-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Position</label>
                                                        <select name="UpdatePosition" id="UpdatePosition" class="form-control">
                                                            <option value="" disabled selected></option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Barangay Captain">Barangay Captain</option>
                                                            <option value="Kagawad">Kagawad</option>
                                                            <option value="Secretary">Secretary</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Birthday</label>
                                                        <input type="Date" id="UpdateBirthday" name="UpdateBirthday" class="form-control" readonly>
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="user-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Gender</label>
                                                        <input type="Text" id="UpdateGender" name="UpdateGender" class="form-control" readonly>
                                                        <!--<i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="user-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Email</label>
                                                        <input type="Email" id="UpdateEmail" name="UpdateEmail" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label  class="form-control-label">Phone Number</label>
                                                        <input type="Number" id="UpdatePhoneNumber" name="UpdatePhoneNumber" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="passrpt-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Username</label>
                                                        <input type="Text" id="UpdateUsername" name="UpdateUsername" class="form-control">
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="hidden" id="identification" name="identification" class="form-control" readonly>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="hidden" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" id="UpdatedBy" name="UpdatedBy" class="form-control" readonly>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i>
                                                            <small>Error message</small> -->
                                                        <div class="invalid" id="pass-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer modal-body-color">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn modal-button-color text-white" onclick="return myFunction()" id="register" name="register">Save Admin</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- End of Update Modal -->
              

                <!-- END PAGE CONTAINER-->
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
        
        
        
        
        
        <!-- Main JS-->
        <script src="js/main.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/val.js"></script>
        <script src="ManageAdmin.js"></script>

        <script>
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var min = parseInt($("#min").val(), 10);
        var max = parseInt($("#max").val(), 10);
        var age = parseFloat(data[4]) || 0; // use data for the age column

        if (
          (isNaN(min) && isNaN(max)) ||
          (isNaN(min) && age <= max) ||
          (min <= age && isNaN(max)) ||
          (min <= age && age <= max)
        ) {
        return true;
        }
        return false;
        });

        $(document).ready(function () {
        $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
        extend: 'print',
        text: 'Print Report',
        className: 'btn modal-button-color text-white',
        exportOptions: {
            columns: [1,2,3,4,5,6,7]
        }
        },

        {
        extend: 'excel',
        text: 'Generate Report',
        className: 'btn modal-button-color text-white',
        href: 'Destroy.php',
        exportOptions: {
            columns: [1,2,3,4,5,6,7]
        }

        }]
        } );

            // Event listener to the two range filtering inputs to redraw on input
            $("#min, #max").keyup(function () {
            table.draw();
        });
        });
        </script>

        <script>
        imageInput.onchange = (evt) => {
        const [file] = imageInput.files;
        if (file) {
        inIm.src = URL.createObjectURL(file);
        }
        };
        </script>

        <script>
        updateImage.onchange = (evt) => {
        const [file] = updateImage.files;
        if (file) {
        upIm.src = URL.createObjectURL(file);
        }
        };
        </script>

        <script>
        $(document).ready(function(){
        $('.deletebtn').on('click', function(){
        $('#deletemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $('#DeleteResidentID').val(data[1]);
        $('#deleteid').val(data[12]);

        });
        });
        </script>

        <script>
        $(document).ready(function(){
        $('.editbtn').on('click', function(){
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        
        $('#UpdateResidentID').val(data[1]);
        $('#UpdateLastName').val(data[2]);
        $('#UpdateFirstName').val(data[3]);
        $('#UpdateAge').val(data[4]);
        $('#UpdateGender').val(data[5]);
        $('#UpdatePosition').val(data[6]);
        $('#UpdateEmail').val(data[7]);
        $('#UpdateMiddleName').val(data[8]);
        $('#UpdateBirthday').val(data[9]);
        $('#UpdatePhoneNumber').val(data[10]);
        $('#UpdateUsername').val(data[11]);
        $('#identification').val(data[12]);
        document.getElementById("upIm").src="upload/"+data[13];
        });
        });
        </script>

        <script>

        $(document).ready(function(){
        $('.viewbtn').on('click', function(){

        $('#viewmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $('#ViewResidentID').val(data[1]);
        $('#ViewLastName').val(data[2]);
        $('#ViewFirstName').val(data[3]);
        $('#ViewAge').val(data[4]);
        $('#ViewGender').val(data[5]);
        $('#ViewPosition').val(data[6]);
        $('#ViewEmail').val(data[7]);
        $('#ViewMiddleName').val(data[8]);
        $('#ViewBirthday').val(data[9]);
        $('#ViewPhoneNumber').val(data[10]);
        $('#ViewUsername').val(data[11]);
        document.getElementById("ViewImage").src="upload/"+data[13];

        });
        });

        </script>

    </body>
</html>
<!-- end document-->