<?php

include "Database.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

$sql = "SELECT * FROM barangaydetails";
$result = $mysqli->query($sql);

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
        <link rel="stylesheet" href="ActivityLogs.css" />
        <link href="logo/<?php echo $image?>" rel="icon" />
        <link href="logo/<?php echo $image?>" rel="icon" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <!-- Title Page-->
        <title>Activity Logs</title>
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


            <aside class="menu-sidebar2">
                <div class="logo">
                    <div class="row mx-auto ">
                        <div class="col">
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Barangay <?php echo $barangay?></p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;"><?php echo $city?> City</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Province of <?php echo $province?></p>
                        </div>
                    </div>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-140">
                            <img src="logo/<?php echo $image?>"/>
                        </div>
                    </div>
                    <nav class="navbar-sidebar2 ">
                        <ul class="list-unstyled navbar__list ">
                            <li class="has-sub">
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
                                        <i class="fas fa-users"></i>Manage Residence</a>
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
                                    <i class="fas fa-cog"></i>Manage Admin</a>
                                </li>                                    
                                <li>
                                    <a href="ManageBarangayInfo.php" style="text-decoration: none;">
                                    <i class="fas fa-cog"></i>Manage Barangay</a>
                                </li>                                      
                                    <li>
                                        <a  href="ManagePurok.php"  style="text-decoration: none;">
                                        <i class="fas fa-cog"></i>Manage Purok</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow " href="#"  style="text-decoration: none;">
                                <i class="fas fa-tasks"></i>Logs
                                <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                                </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a  href="ActivityLogs.php"  style="text-decoration: none;">
                                    <i class="fas fa-tasks"></i>Activity Logs</a>
                                </li>                                    
                                <li>
                                    <a href="AccountLogs.php" style="text-decoration: none;">
                                    <i class="fas fa-tasks"></i>Account Logs</a>
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
                                                    <a href="Dashboard.php">Home</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">Activity Logs</li>
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
          <h3 class="title-5 m-b-18">Activity Logs</h3>
          </div>
          </div>

          <?php
          $sql = "SELECT * FROM logs";
          $result = $mysqli->query($sql);
          ?>

          <!--
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
          -->

          <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 myTable">
          <thead>
          <tr>          
          <th>Action</th>
          <th>Timestamp</th>
          <th>Processed By</th>
          </tr>
          </thead>

          <?php
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

	      $timestamp = $row["timestamp"];
          $action = $row["action"];
          $processedBy = $row["processedBy"];

          ?>

          <tr>
          <td class="desc"><?php echo $action; ?></td>
          <td><?php echo $timestamp;?></td>
          <td><?php echo $processedBy;?></td>
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
        $(document).ready(function () {
        $('.myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
        extend: 'print',
        text: 'Print Report',
        className: 'btn modal-button-color text-white mt-3',
        exportOptions: {
            columns: [0,1]
        }
        },

        {
        extend: 'excel',
        text: 'Generate Report',
        className: 'btn modal-button-color text-white mt-3',
        href: 'Destroy.php',
        exportOptions: {
            columns: [0,1]
        }

        }]
        });
        });
        </script>

        <script>

        $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[1] ) || 0;
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
        }
        );
 
        $(document).ready(function() {
        var table = $('.myTable').DataTable();
     
        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').keyup( function() {
        table.draw();
        } );
        } );
        </script>
    </body>
</html>
<!-- end document-->