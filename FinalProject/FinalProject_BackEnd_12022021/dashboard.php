<?php
// Initialize the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Destroy the session
session_destroy();

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

    <!-- Title Page-->
    <title>Main Dashboard</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-140">
                        <img src="images/icon/brgy.png" />
                    </div>

                </div>

                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index_main.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard </a>
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
                                        <i class="fas fa-tasks"></i>Manage Resident</a>
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
                                        <i class="fas fa-tasks"></i>Manage Issuance</a>
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
                            <div class="header-button2">
                          
                             <!--BAR-->

                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                                <a href="index_Main.html">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="fas fa-bell"></i>Notifications</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="fas fa-envelope"></i>Email</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="login_page.html">
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
                            <a class="js-arrow" href="index_main.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard </a>
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
                                        <i class="fas fa-tasks"></i>Manage Resident</a>
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
                                        <i class="fas fa-tasks"></i>Manage Issuance</a>
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
                                        <i class="fas fa-tasks"></i>Manage Admin</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-0">

            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">150</h2>
                                    <span class="desc">Total Registered Population</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-accounts-outline"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">87</h2>
                                    <span class="desc">Males</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-male-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">63</h2>
                                    <span class="desc">Females</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-female"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">90</h2>
                                    <span class="desc">Registered Voters</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-assignment-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->




<!--Beginning of First Table-->
         
     <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left"><h3 class="title-5 m-b-18">Barangay Officials</h3></div>
                                    <div class="table-data__tool-right">

                                       <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button> -->

                                    </div>
                                </div>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>resident id</th>
                                                <th>family name</th>
                                                <th>first name</th>
                                                <th>middle name</th>
                                                <th>position</th>
                                                <th>username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


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


         <section class="statistic1" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </section>


         <section class="statistic1" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
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
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
