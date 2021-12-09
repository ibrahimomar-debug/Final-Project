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
    <link rel="stylesheet" href="ManageResident.css" />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Title Page-->
    <title>Resident Information Management</title>
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
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
        <div class="logo">
          <div class="row mx-auto">
            <div class="col">
              <p class="fw-bolder text-white text-start text-uppercase">
                Barangay Oranbo
              </p>
              <p class="fw-bolder text-white text-start text-uppercase">
                Pasig City
              </p>
              <p class="fw-bolder text-white text-start text-uppercase">
                Province of Rizal
              </p>              
            </div>
          </div>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
          <div class="account2">
            <div class="image img-cir img-140">
              <img src="images/icon/brgy.png" />
            </div>
          </div>
          <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a
                  class="js-arrow"
                  href="Dashboard.php"
                  style="text-decoration: none"
                >
                  <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#" style="text-decoration: none">
                  <i class="fas fa-users"></i>Resident Information
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a
                      href="ManageResident.php"
                      style="text-decoration: none"
                    >
                      <i class="fas fa-tasks"></i>Manage Resident</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#" style="text-decoration: none">
                  <i class="fas fa-certificate"></i>Certificate Issuance
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a
                      href="Manage_Issuance.html"
                      style="text-decoration: none"
                    >
                      <i class="fas fa-tasks"></i>Manage Issuance</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#" style="text-decoration: none">
                  <i class="fas fa-cog"></i>Admin Config
                  <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="ManageAdmin.php" style="text-decoration: none">
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
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-account"></i>Account</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-settings"></i>Setting</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-money-box"></i>Billing</a
                        >
                      </div>
                    </div>
                    <div class="account-dropdown__body">
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-globe"></i>Language</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-pin"></i>Location</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-email"></i>Email</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#" style="text-decoration: none">
                          <i class="zmdi zmdi-notifications"></i
                          >Notifications</a
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
              <a href="#">Sign out</a>
            </div>
            <nav class="navbar-sidebar2">
              <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                  <a class="js-arrow" href="#">
                    <i class="fas fa-tachometer-alt"></i>Dashboard
                    <span class="arrow">
                      <i class="fas fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                      <a href="index.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard 1</a
                      >
                    </li>
                    <li>
                      <a href="index2.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard 2</a
                      >
                    </li>
                    <li>
                      <a href="index3.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard 3</a
                      >
                    </li>
                    <li>
                      <a href="index4.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard 4</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-shopping-basket"></i>eCommerce</a
                  >
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
                        <i class="fas fa-table"></i>Tables</a
                      >
                    </li>
                    <li>
                      <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a
                      >
                    </li>
                    <li>
                      <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a
                      >
                    </li>
                    <li>
                      <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a
                      >
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
                        <i class="fas fa-sign-in-alt"></i>Login</a
                      >
                    </li>
                    <li>
                      <a href="register.html">
                        <i class="fas fa-user"></i>Register</a
                      >
                    </li>
                    <li>
                      <a href="forget-pass.html">
                        <i class="fas fa-unlock-alt"></i>Forget Password</a
                      >
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
                        <i class="fab fa-flickr"></i>Button</a
                      >
                    </li>
                    <li>
                      <a href="badge.html">
                        <i class="fas fa-comment-alt"></i>Badges</a
                      >
                    </li>
                    <li>
                      <a href="tab.html">
                        <i class="far fa-window-maximize"></i>Tabs</a
                      >
                    </li>
                    <li>
                      <a href="card.html">
                        <i class="far fa-id-card"></i>Cards</a
                      >
                    </li>
                    <li>
                      <a href="alert.html">
                        <i class="far fa-bell"></i>Alerts</a
                      >
                    </li>
                    <li>
                      <a href="progress-bar.html">
                        <i class="fas fa-tasks"></i>Progress Bars</a
                      >
                    </li>
                    <li>
                      <a href="modal.html">
                        <i class="far fa-window-restore"></i>Modals</a
                      >
                    </li>
                    <li>
                      <a href="switch.html">
                        <i class="fas fa-toggle-on"></i>Switchs</a
                      >
                    </li>
                    <li>
                      <a href="grid.html">
                        <i class="fas fa-th-large"></i>Grids</a
                      >
                    </li>
                    <li>
                      <a href="fontawesome.html">
                        <i class="fab fa-font-awesome"></i>FontAwesome</a
                      >
                    </li>
                    <li>
                      <a href="typo.html">
                        <i class="fas fa-font"></i>Typography</a
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
        <section class="au-breadcrumb m-t-75">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                      <ul class="list-unstyled list-inline au-breadcrumb__list">
                        <li class="list-inline-item active">
                          <a href="index_Main.html">Home</a>
                        </li>
                        <li class="list-inline-item seprate">
                          <span>/</span>
                        </li>
                        <li class="list-inline-item">Resident Information</li>
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
                      <h3 class="title-5 m-b-18">Resident Information</h3>
                    </div>
                    <div class="table-data__tool-right">
                      <button
                        class="btn modal-button-color text-white"
                        data-toggle="modal"
                        data-target="#staticBackdrop"
                      >
                        <i class="zmdi zmdi-plus"></i> Add Resident
                      </button>
                    </div>
                  </div>

                  <?php
                  require_once "ResidentDatabase.php";
                  $sql = "SELECT * FROM residentdata";
                  $result = $mysqli->query($sql);
                  ?>

                  <table class="mb-5" cellspacing="5" cellpadding="5">
                    <tbody>
                      <tr>
                        <td class="mb-1">Minimum age:</td>
                        <td>
                          <input
                            class="form-control ms-1 mb-1"
                            type="text"
                            id="min"
                            name="min"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>Maximum age:</td>
                        <td>
                          <input
                            class="form-control ms-1"
                            type="text"
                            id="max"
                            name="max"
                          />
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2" id="myTable">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>resident id</th>
                          <th>family name</th>
                          <th>first name</th>
                          <th>Alias</th>
                          <th>age</th>
                          <th>sex</th>
                          <th>civil status</th>
                          <th>voter status</th>
                          <th>Action</th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                          <th style="display: none"></th>
                        </tr>
                      </thead>
                      <tr>

                      <?php
                      if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {

	                    $id = $row["id"];
                      $image = $row["image"]; //Check
                      $residentID = $row["residentID"]; //Check
                      $familyName= $row["familyName"]; // Check
                      $firstName = $row["firstName"]; //Check
                      $middleName = $row["middleName"]; //Check
                      $alias = $row["alias"]; //Check
                      $faceMarks = $row["faceMarks"]; //Check
                      $birthDate = $row["birthDate"]; //Check
                      $birthPlace = $row["birthPlace"]; //Check
                      $age = $row["age"]; //Check
                      $sex = $row["sex"]; //Check

                      $civilStatus = $row["civilStatus"]; 
                      $nationality = $row["nationality"];
                      $religionBelief = $row["religionBelief"];
                      $occupation= $row["occupation"];
                      $spouseName = $row["spouseName"];
                      $spouseOccupation = $row["spouseOccupation"];
                      $voterStatus = $row["voterStatus"]; //Check

                      $cityAddress = $row["cityAddress"];
                      $provincialAddress = $row["provincialAddress"];
                      $purok = $row["purok"];
                      $emailAddress = $row["emailAddress"];
                      $homeNumberOne = $row["homeNumberOne"];
                      $homeNumberTwo = $row["homeNumberTwo"];
                      $mobileNumberOne = $row["mobileNumberOne"];
                      $mobileNumberTwo = $row["mobileNumberTwo"];

                      $residentType = $row["residentType"];
                      $residentStatus = $row["residentStatus"];
                      $processedBy = $row["processedBy"];
                      $transcationID = $row["transactionID"];
                      $dateAndTimeRegistered = $row["dateAndTimeResgistered"];

                      ?>

                        <td>
                        <?php
                        echo'
                        <img style="width: 80px" src="upload/'.$row['image'].'" alt="your image" class="img-thumbnail"/>';
                        ?>
                        </td>
                        <td class="desc"><?php echo $residentID; ?></td>
                        <td><?php echo $familyName; ?></td>
                        <td><?php echo $firstName; ?></td>
                        <td><?php echo $alias; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $sex; ?></td>
                        <td><?php echo $civilStatus; ?></td>
                        <td><?php echo $voterStatus; ?></td>
                        <td style="display: none"><?php echo $id; ?></td>
                        <td style="display: none"><?php echo $middleName; ?></td>
                        <td style="display: none"><?php echo $faceMarks; ?></td>
                        <td style="display: none"><?php echo $birthDate; ?></td>
                        <td style="display: none"><?php echo $birthPlace; ?></td>
                        <td style="display: none"><?php echo $civilStatus; ?></td>
                        <td style="display: none"><?php echo $nationality; ?></td>
                        <td style="display: none"><?php echo $religionBelief; ?></td>
                        <td style="display: none"><?php echo $occupation; ?></td>
                        <td style="display: none"><?php echo $spouseName; ?></td>
                        <td style="display: none"><?php echo $spouseOccupation; ?></td>
                        <td style="display: none"><?php echo $cityAddress; ?></td>
                        <td style="display: none"><?php echo $provincialAddress; ?></td>
                        <td style="display: none"><?php echo $purok; ?></td>
                        <td style="display: none"><?php echo $emailAddress; ?></td>
                        <td style="display: none"><?php echo $homeNumberOne; ?></td>
                        <td style="display: none"><?php echo $homeNumberTwo; ?></td>
                        <td style="display: none"><?php echo $mobileNumberOne; ?></td>
                        <td style="display: none"><?php echo $mobileNumberTwo; ?></td>
                        <td style="display: none"><?php echo $residentType; ?></td>
                        <td style="display: none"><?php echo $residentStatus; ?></td>
                        <td style="display: none"><?php echo $processedBy; ?></td>
                        <td style="display: none"><?php echo $transcationID; ?></td>
                        <td style="display: none"><?php echo $dateAndTimeRegistered; ?></td>
                        <td style="display: none"><?php echo $image;?></td>
                        <td>
                          <div class="table-data-feature">
                            <button
                              class="item viewbtn"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="View"
                            >
                              <i class="zmdi zmdi-eye"></i>
                            </button>
                            <a
                              class="item editbtn"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Edit"
                            >
                              <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a
                              class="item deletebtn"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Delete"
                            >
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

        <section class="statistic1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="copyright">
                  <!--<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END PAGE CONTAINER-->
      </div>
    </div>

                <!-- End of Delete Modal -->
                <form action="DeleteResident.php" method="POST">
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
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header modal-header-color">
            <h4
              class="modal-title modal-title-color-text"
              id="exampleModalCenteredLabel"
            >
              RESIDENT REGISTRATION FORM
            </h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span class="text-white" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-body-color">
            <form action="InsertResident.php" method="POST" enctype="multipart/form-data">
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
                    <div class="col-sm-12">
                      <h3
                        class="pb-2 fw-bolder"
                        style="text-decoration: underline"
                      >
                        BASIC INFORMATION
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Family Name</label
                        >
                        <input
                          type="text"
                          id="family-name"
                          name="family-name"
                          placeholder="Enter Family Name"
                          class="form-control"
                        />
                        <div class="invalid" id="famName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >First Name</label
                        >
                        <input
                          type="text"
                          id="first-name"
                          name="first-name"
                          placeholder="Enter First Name"
                          class="form-control"
                        />
                        <div class="invalid" id="fName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Middle Name</label
                        >
                        <input
                          type="text"
                          id="middle-name"
                          name="middle-name"
                          placeholder="Enter Middle Name"
                          class="form-control"
                        />
                        <div class="invalid" id="mName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                     
                  </div>                 
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Alias</label
                        >
                        <input
                          type="text"
                          id="alias"
                          name="alias"
                          placeholder="Enter Alias"
                          class="form-control"
                        />
                        <div class="invalid" id="alias-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Face Marks</label
                        >
                        <input
                          type="text"
                          id="face-marks"
                          name="face-marks"
                          placeholder="Enter Face Marks"
                          class="form-control"
                        />
                        <div class="invalid" id="fmark-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Birth Date</label
                        >
                        <input
                          type="date"
                          id="birth-date"
                          name="birth-date"
                          placeholder="Enter Birth Date"
                          class="form-control"
                        />
                        <div class="invalid" id="resID-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Birth Place</label
                        >
                        <input
                          type="text"
                          id="birth-place"
                          name="birth-place"
                          placeholder="Enter Birth Place"
                          class="form-control"
                        />
                        <div class="invalid" id="bplace-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="nf-email" class="form-control-label"
                          >Sex</label
                        >
                        <select
                          name="sex"
                          id="sex"
                          class="form-control"
                        >
                          <option value="" disabled selected>Select Sex</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <div class="invalid" id="sexOption-tooltip">
                          Please select sex
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Civil Status</label
                      >
                      <select
                        name="civil-status"
                        id="civil-status"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Voter Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Widowed">Widowed</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div>                 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                      >
                        Nationality</label
                      >
                      <input
                        type="text"
                        id="nationality"
                        name="nationality"
                        placeholder="Enter Nationality"
                        class="form-control"
                      />
                      <div class="invalid" id="nation-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Religion/Belief</label
                      >
                      <input
                        type="text"
                        id="religion-belief"
                        name="religion-belief"
                        placeholder="Enter Religion/Belief"
                        class="form-control"
                      />
                      <div class="invalid" id="relbel-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Occupation</label
                      >
                      <select
                        name="occupation"
                        id="occupation"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Occupation</option>
                        <option value="Private">Private</option>
                        <option value="Public">Public</option>
                        <option value="Private">Government</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Out of School Youth (OSY)">Out of School Youth (OSY)</option>
                        <option value="Out of School Children (OSC)">Out of School Children (OSC)</option>
                        <option value="Person with Disability (PWD)">Person with Disability (PWD)</option>
                        <option value="Senior Citizen (SC)">Senior Citizen (SC)</option>
                        <option value="Overseas Filipino Worker (OFW)">Overseas Filipino Worker (OFW)</option>
                        <option value="Solo Parent">Solo Parent</option>
                        <option value="Indigenous People">Indigenous People</option>
                        <option value="Others">Others</option>

                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Spouse’s Name
                      </label>
                      <input
                        type="text"
                        id="spouse-name"
                        name="spouse-name"
                        placeholder="Enter Spouse Name"
                        class="form-control"
                      />
                      <div class="invalid" id="spname-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                      >
                        Spouse’s Occupation</label
                      >
                      <input
                        type="text"
                        id="spouse-occupation"
                        name="spouse-occupation"
                        placeholder="Enter Spouse Occupation"
                        class="form-control"
                      />
                      <div class="invalid" id="spOccu-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Voter Status</label
                      >
                      <select
                        name="voter-status"
                        id="voter-status"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Voter Status</option>
                        <option value="Active">Yes</option>
                        <option value="Inactive">No</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div>                  
                </div>             
                <br />
                <hr />
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      CONTACT INFORMATION
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >City Address</label
                      >
                      <input
                        type="text"
                        id="city-address"
                        name="city-address"
                        placeholder="Enter City Address"
                        class="form-control"
                      />
                      <div class="invalid" id="cityAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Provincial Address</label
                      >
                      <input
                        type="text"
                        id="provincial-address"
                        name="provincial-address"
                        placeholder="Enter Provincial Address"
                        class="form-control"
                      />
                      <div class="invalid" id="provinceAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Purok</label
                      >
                      <input
                        type="text"
                        id="purok"
                        name="purok"
                        placeholder="Enter Purok"
                        class="form-control"
                      />
                      <div class="invalid" id="purok-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Email Address</label
                      >
                      <input
                        type="email"
                        id="email-address"
                        name="email-address"
                        placeholder="Enter Email Address"
                        class="form-control"
                      />
                      <div class="invalid" id="emailAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Home Number 1</label
                      >
                      <input
                        type="text"
                        id="homenumber-one"
                        name="homenumber-one"
                        placeholder="Enter Home Number 1"
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Home Number 2</label
                      >
                      <input
                        type="text"
                        id="homenumber-two"
                        name="homenumber-two"
                        placeholder="Enter Home Number 2"
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Mobile Number 1</label
                      >
                      <input
                        type="text"
                        id="mobilenumber-one"
                        name="mobilenumber-one"
                        placeholder="Enter Mobile number 1"
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Mobile Number 2</label
                      >
                      <input
                        type="text"
                        id="mobilenumber-two"
                        name="mobilenumber-two"
                        placeholder="Enter Mobile Number 2"
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <br />
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      REGISTRATION DETAILS
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Voter Status</label
                      >
                      <select
                        name="resident-type"
                        id="resident-type"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Resident Type</option>
                        <option value="Native">Native</option>
                        <option value="Rentee">Rentee</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Voter Status</label
                      >
                      <select
                        name="resident-status"
                        id="resident-status"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Resident Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Deceased">Deceased</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Processed By</label
                      >
                      <input
                        type="hidden"
                        id="processed-by"
                        name="processed-by"
                        value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>"
                        placeholder="Admin Name"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer modal-body-color">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <button
              type="submit"
              class="btn modal-button-color text-white"
              onclick="return residentFunction()"
              id="register"
              name="register"
            >
              Save New Resident
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of Add Modal -->

    <!-- Start of View Modal -->
    <div
      class="modal fade"
      id="viewmodal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header modal-header-color">
            <h4
              class="modal-title modal-title-color-text"
              id="exampleModalCenteredLabel"
            >
              RESIDENT DATASHEET
            </h4>
            <button
              type="button"
              class="close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <span class="text-white" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-body-color">
            <form action="InsertResident.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-3">
                  <img type="image" id="ViewImage" alt="your image" class="img-thumbnail"/>
                  </div>
                <div class="col-xl-9">
                  <div class="row">
                    <div class="col-sm-12">
                      <h3
                        class="pb-2 fw-bolder"
                        style="text-decoration: underline"
                      >
                        BASIC INFORMATION
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Family Name</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewFamilyName"
                          name="ViewFamilyName"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="famName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >First Name</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewFirstName"
                          name="ViewFirstName"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="fName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                   <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Middle Name</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewMiddleName"
                          name="ViewMiddleName"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="mName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Alias</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewAlias"
                          name="ViewAlias"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="alias-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Face Marks</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewFaceMarks"
                          name="ViewFaceMarks"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="fmark-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Birth Date</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="date"
                          id="ViewBirthDate"
                          name="ViewBirthDate"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="resID-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Birth Place</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewBirthPlace"
                          name="ViewBirthPlace"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="bplace-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label ms-2half"
                          style="font-weight: bold"
                          >Age</label
                        >
                        <input
                          style="border: none; background-color: transparent; outline: none"
                          type="text"
                          id="ViewAge"
                          name="ViewAge"
                          disabled
                          class="form-control"
                        />
                        <div class="invalid" id="bplace-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="nf-email" style="font-weight: bold;" class="form-control-label ms-2half"
                          >Sex</label
                        >
                        <select
                          style="border: none; background-color: transparent; outline: none;"
                          name="ViewSex"
                          id="ViewSex"
                          disabled
                          class="form-control"
                        >
                          <option value="" disabled selected>Select Sex</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <div class="invalid" id="sexOption-tooltip">
                          Please select sex
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                      >
                        Civil Status</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewCivilStatus"
                        name="ViewCivilStatus"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="nation-tooltip">
                        error message
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                      >
                        Nationality</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewNationality"
                        name="ViewNationality"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="nation-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Religion/Belief</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewReligionBelief"
                        name="ViewReligionBelief"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="relbel-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Spouse’s Name
                      </label>
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewSpouseName"
                        name="ViewSpouseName"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="spname-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                      >
                        Spouse’s Occupation</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewSpouseOccupation"
                        name="ViewSpouseOccupation"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="spOccu-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                      >
                        Voter Status</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewVoterStatus"
                        name="ViewVoterStatus"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="spOccu-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Occupation</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewOccupation"
                        name="ViewOccupation"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="occupation-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>             
                <br />
                <hr />
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      CONTACT INFORMATION
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >City Address</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewCityAddress"
                        name="ViewCityAddress"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="cityAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Provincial Address</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewProvincialAddress"
                        name="ViewProvincialAddress"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="provinceAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Purok</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewPurok"
                        name="ViewPurok"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="purok-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Email Address</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="email"
                        id="ViewEmailAddress"
                        name="ViewEmailAddress"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="emailAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Home Number 1</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewHomeNumberOne"
                        name="ViewHomeNumberOne"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Home Number 2</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewHomeNumberTwo"
                        name="ViewHomeNumberTwo"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Mobile Number 1</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewMobileNumberOne"
                        name="ViewMobileNumberOne"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Mobile Number 2</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewMobileNumberTwo"
                        name="ViewMobileNumberTwo"
                        disabled
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <br />
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      REGISTRATION DETAILS
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Resident Type</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewResidentType"
                        name="ViewResidentType"
                        disabled
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Resident Status</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewResidentStatus"
                        name="ViewResidentStatus"
                        disabled
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Date and Time Registered</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewDateAndTimeRegistered"
                        name="ViewDateAndTimeRegistered"
                        disabled
                        class="form-control"
                      />
                    </div>
                  </div>                                  
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Processed By</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewProcessedBy"
                        name="ViewProcessedBy"
                        disabled
                        class="form-control"
                      />
                    </div>
                  </div>                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label ms-2half"
                        style="font-weight: bold"
                        >Transaction ID</label
                      >
                      <input
                        style="border: none; background-color: transparent; outline: none"
                        type="text"
                        id="ViewTransactionID"
                        name="ViewTransactionID"
                        disabled
                        class="form-control"
                      />
                    </div>
                  </div>  
                </div>
              </div>
          </div>
          <div class="modal-footer modal-body-color">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of View Modal -->

    <!-- Start of Update Modal -->
    <div
      class="modal fade"
      id="editmodal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header modal-header-color">
            <h4
              class="modal-title modal-title-color-text"
              id="exampleModalCenteredLabel"
            >
              UPDATE RESIDENT DATASHEET
            </h4>
            <button
              type="button"
              class="close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <span class="text-white" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-body-color">
            <form action="UpdateResident.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-3">
                  <img id="upIm" src="images/default-image.jpg" alt="your image" class="img-thumbnail"/>
                    <div class="input-file">
                      <input required style="display: none;" accept="image/*" type="file" name="updateImage" id="updateImage" />
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
                    <div class="col-sm-12">
                      <h3
                        class="pb-2 fw-bolder"
                        style="text-decoration: underline"
                      >
                        BASIC INFORMATION
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Family Name</label
                        >
                        <input
                          type="text"
                          id="UpdateFamilyName"
                          name="UpdateFamilyName"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="famName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >First Name</label
                        >
                        <input
                          type="text"
                          id="UpdateFirstName"
                          name="UpdateFirstName"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="fName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Middle Name</label
                        >
                        <input
                          type="text"
                          id="UpdateMiddleName"
                          name="UpdateMiddleName"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="mName-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Alias</label
                        >
                        <input
                          type="text"
                          id="UpdateAlias"
                          name="UpdateAlias"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="alias-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Face Marks</label
                        >
                        <input
                          type="text"
                          id="UpdateFaceMarks"
                          name="UpdateFaceMarks"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="fmark-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Birth Date</label
                        >
                        <input
                          type="date"
                          id="UpdateBirthDate"
                          name="UpdateBirthDate"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="resID-tooltip">
                          error message
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Birth Place</label
                        >
                        <input
                          type="text"
                          id="UpdateBirthPlace"
                          name="UpdateBirthPlace"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="bplace-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label
                          for="nf-email"
                          class="form-control-label"
                          style="font-weight: bold"
                          >Sex</label
                        >
                        <input
                          type="text"
                          id="UpdateSex"
                          name="UpdateSex"
                          class="form-control"
                          readonly
                        />
                        <div class="invalid" id="bplace-tooltip">
                          error message
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Civil Status</label
                      >
                      <select
                        name="UpdateCivilStatus"
                        id="UpdateCivilStatus"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Voter Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Widowed">Widowed</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                      >
                        Nationality</label
                      >
                      <input
                        type="text"
                        id="UpdateNationality"
                        name="UpdateNationality"
                        class="form-control"
                        readonly
                      />
                      <div class="invalid" id="nation-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Religion/Belief</label
                      >
                      <input
                        type="text"
                        id="UpdateReligionBelief"
                        name="UpdateReligionBelief"
                        class="form-control"
                      />
                      <div class="invalid" id="relbel-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Occupation</label
                      >
                      <select
                        name="UpdateOccupation"
                        id="UpdateOccupation"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Occupation</option>
                        <option value="Private">Private</option>
                        <option value="Public">Public</option>
                        <option value="Private">Government</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Out of School Youth (OSY)">Out of School Youth (OSY)</option>
                        <option value="Out of School Children (OSC)">Out of School Children (OSC)</option>
                        <option value="Person with Disability (PWD)">Person with Disability (PWD)</option>
                        <option value="Senior Citizen (SC)">Senior Citizen (SC)</option>
                        <option value="Overseas Filipino Worker (OFW)">Overseas Filipino Worker (OFW)</option>
                        <option value="Solo Parent">Solo Parent</option>
                        <option value="Indigenous People">Indigenous People</option>
                        <option value="Others">Others</option>

                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select occupation
                      </div>
                    </div>
                  </div>                   
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Spouse’s Name
                      </label>
                      <input
                        type="text"
                        id="UpdateSpouseName"
                        name="UpdateSpouseName"
                        class="form-control"
                      />
                      <div class="invalid" id="spname-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                      >
                        Spouse’s Occupation</label
                      >
                      <input
                        type="text"
                        id="UpdateSpouseOccupation"
                        name="UpdateSpouseOccupation"
                        class="form-control"
                      />
                      <div class="invalid" id="spOccu-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Voter Status</label
                      >
                      <select
                        name="UpdateVoterStatus"
                        id="UpdateVoterStatus"
                        class="form-control"
                      >
                        <option value="" disabled selected></option>
                        <option value="Active">Yes</option>
                        <option value="Inactive">No</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select voter status
                      </div>
                    </div>
                  </div>                  
                </div>             
                <br />
                <hr />
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      CONTACT INFORMATION
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >City Address</label
                      >
                      <input
                        type="text"
                        id="UpdateCityAddress"
                        name="UpdateCityAddress"
                        class="form-control"
                      />
                      <div class="invalid" id="cityAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Provincial Address</label
                      >
                      <input
                        type="text"
                        id="UpdateProvincialAddress"
                        name="UpdateProvincialAddress"
                        class="form-control"
                      />
                      <div class="invalid" id="provinceAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Purok</label
                      >
                      <input
                        type="text"
                        id="UpdatePurok"
                        name="UpdatePurok"
                        class="form-control"
                      />
                      <div class="invalid" id="purok-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Email Address</label
                      >
                      <input
                        type="email"
                        id="UpdateEmailAddress"
                        name="UpdateEmailAddress"
                        class="form-control"
                      />
                      <div class="invalid" id="emailAdd-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Home Number 1</label
                      >
                      <input
                        type="text"
                        id="UpdateHomeNumberOne"
                        name="UpdateHomeNumberOne"
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Home Number 2</label
                      >
                      <input
                        type="text"
                        id="UpdateHomeNumberTwo"
                        name="UpdateHomeNumberTwo"
                        class="form-control"
                      />
                      <div class="invalid" id="hNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Mobile Number 1</label
                      >
                      <input
                        type="text"
                        id="UpdateMobileNumberOne"
                        name="UpdateMobileNumberOne"
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberOne-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Mobile Number 2</label
                      >
                      <input
                        type="text"
                        id="UpdateMobileNumberTwo"
                        name="UpdateMobileNumberTwo"
                        class="form-control"
                      />
                      <div class="invalid" id="mNumberTwo-tooltip">
                        error message
                      </div>
                    </div>
                  </div>
                </div>
                <br />
              </div>
              <hr />
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-9">
                    <h3
                      class="pb-2 fw-bolder"
                      style="text-decoration: underline"
                    >
                      REGISTRATION DETAILS
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Resident Type</label
                      >
                      <select
                        name="UpdateResidentType"
                        id="UpdateResidentType"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Resident Type</option>
                        <option value="Native">Native</option>
                        <option value="Rentee">Rentee</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select resident type
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Resident Status</label
                      >
                      <select
                        name="UpdateResidentStatus"
                        id="UpdateResidentStatus"
                        class="form-control"
                      >
                        <option value="" disabled selected>Select Resident Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Deceased">Deceased</option>
                      </select>
                      <div class="invalid" id="voterOption-tooltip">
                        Please select resident status
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label
                        for="nf-email"
                        class="form-control-label"
                        style="font-weight: bold"
                        >Updated By</label
                      >
                      <input
                        type="text"
                        id="UpdatedBy"
                        name="UpdatedBy"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input
                        type="hidden"
                        id="UpdateID"
                        name="UpdateID"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer modal-body-color">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <button
              type="submit"
              class="btn modal-button-color text-white"
              onclick="return residentFunction()"
              id="register"
              name="register"
            >
              Save New Resident
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of Update Modal -->

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
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
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/residentVal.js"></script>
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
        var table = $("#myTable").DataTable();

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

    $('#deleteid').val(data[9]);

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
    $('#ViewFamilyName').val(data[2]);
    $('#ViewFirstName').val(data[3]);
    $('#ViewAlias').val(data[4]);
    $('#ViewAge').val(data[5]);
    $('#ViewSex').val(data[6]);
    $('#ViewCivilStatus').val(data[7]);
    $('#ViewVoterStatus').val(data[8]);
    $('#ViewID').val(data[9]);
    $('#ViewMiddleName').val(data[10]);
    $('#ViewFaceMarks').val(data[11]);
    $('#ViewBirthDate').val(data[12]);
    $('#ViewBirthPlace').val(data[13]);
    $('#ViewCivilStatus').val(data[14]);
    $('#ViewNationality').val(data[15]);
    $('#ViewReligionBelief').val(data[16]);
    $('#ViewOccupation').val(data[17]);
    $('#ViewSpouseName').val(data[18]);
    $('#ViewSpouseOccupation').val(data[19]);
    $('#ViewCityAddress').val(data[20]);
    $('#ViewProvincialAddress').val(data[21]);
    $('#ViewPurok').val(data[22]);
    $('#ViewEmailAddress').val(data[23]);
    $('#ViewHomeNumberOne').val(data[24]);
    $('#ViewHomeNumberTwo').val(data[25]);
    $('#ViewMobileNumberOne').val(data[26]);
    $('#ViewMobileNumberTwo').val(data[27]);
    $('#ViewResidentType').val(data[28]);
    $('#ViewResidentStatus').val(data[29]);
    $('#ViewProcessedBy').val(data[30]);
    $('#ViewTransactionID').val(data[31]);
    $('#ViewDateAndTimeRegistered').val(data[32]);
    document.getElementById("ViewImage").src="upload/"+data[33];

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
    $('#UpdateFamilyName').val(data[2]);
    $('#UpdateFirstName').val(data[3]);
    $('#UpdateAlias').val(data[4]);
    $('#UpdateAge').val(data[5]);
    $('#UpdateSex').val(data[6]);
    $('#UpdateCivilStatus').val(data[7]);
    $('#UpdateVoterStatus').val(data[8]);
    $('#UpdateID').val(data[9]);
    $('#UpdateMiddleName').val(data[10]);
    $('#UpdateFaceMarks').val(data[11]);
    $('#UpdateBirthDate').val(data[12]);
    $('#UpdateBirthPlace').val(data[13]);
    $('#UpdateCivilStatus').val(data[14]);
    $('#UpdateNationality').val(data[15]);
    $('#UpdateReligionBelief').val(data[16]);
    $('#UpdateOccupation').val(data[17]);
    $('#UpdateSpouseName').val(data[18]);
    $('#UpdateSpouseOccupation').val(data[19]);
    $('#UpdateCityAddress').val(data[20]);
    $('#UpdateProvincialAddress').val(data[21]);
    $('#UpdatePurok').val(data[22]);
    $('#UpdateEmailAddress').val(data[23]);
    $('#UpdateHomeNumberOne').val(data[24]);
    $('#UpdateHomeNumberTwo').val(data[25]);
    $('#UpdateMobileNumberOne').val(data[26]);
    $('#UpdateMobileNumberTwo').val(data[27]);
    $('#UpdateResidentType').val(data[28]);
    $('#UpdateResidentStatus').val(data[29]);
    $('#UpdatedBy').val(data[30]);
    $('#UpdateTransactionID').val(data[31]);
    $('#UpdatedateAndTimeRegistered').val(data[32]);
    document.getElementById("upIm").src="upload/"+data[33];

    });
    });
    </script>

  </body>
</html>
<!-- end document-->
