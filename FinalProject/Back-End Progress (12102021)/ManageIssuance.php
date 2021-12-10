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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Certificate Issuance</title>

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

    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="script.js"></script>


</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="logo">
                    <div class="row mx-auto">
                        <div class="col">
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Barangay Oranbo</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Pasig City</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Province of Rizal</p>
                        </div>
                    </div>
                </div>
                <div class="account2">

                    <div class="image img-cir img-140">
                        <img src="images/icon/brgy.png"/>
                    </div>

                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="Dashboard.php" style="text-decoration: none;">
                                <i class="fas fa-tachometer-alt"></i>Dashboard </a>
                        </li>

                            <li class="has-sub">
                            <a class="js-arrow" href="#" style="text-decoration: none;">
                                <i class="fas fa-users"></i>Resident Information
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
       
                                <li>
                                    <a href="ManageResident.php" style="text-decoration: none;">
                                        <i class="fas fa-tasks"></i>Manage Resident</a>
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
                            <a class="js-arrow" href="#" style="text-decoration: none;">
                                <i class="fas fa-cog"></i>Admin Config
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="ManageAdmin.php" style="text-decoration: none;">
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
                            <div class="logo d-block d-lg-none"></div>
                            <div class="header-button2">
                          
                             <!--BAR-->

                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="Destroy.php" style="text-decoration:none;">
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
                            <a class="js-arrow" href="Dashboard.php">
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
                                    <a href="ManageResident.php">
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
                                    <a href="ManageIssuance.php">
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
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="index_Main.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Manage Issuance</li>
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
            <!-- BREADCRUMB-->
            <form action="COR.php" method="POST">
                 <div class="shadow-sm p-3 mt-3 bg-body rounded">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- DATA TABLE -->
                                <div class="row">
                                    <div class="col mt-3">
                                        <h3 class="title-5 m-b-18">Issuing Barangay Certificate</h3>
                                    </div>
                                </div>
                                <div id="invoice" class="p-3">
                                    <h3 class="text-decoration-underline">Resident Details</h3>
                                    <div class="row">                                       
                                        <div class="col-lg-4">                                          
                                            <label class="mt-3 " for="lastname">Family Name</label>
                                            <input type="text" class="form-control" id="last-name" name="last-name">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="first-name" name="first-name">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="middleName">Last Name</label>
                                            <input type="text" class="form-control" id="middle-name" name="middle-name">
                                        </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">                                          
                                            <label class="mt-3 " for="residentID">Resident ID</label>
                                            <input type="text" class="form-control" id="resident-id" name="resident-id">
                                        </div>                                         
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="birthDate">Birth Date</label>
                                            <input type="date" class="form-control" id="birth-date" name="birth-date">
                                        </div>                                                          
                                        <div class="col-lg-4">
                                                <label class="mt-3" for="civilStatus">Select Civil Status</label>
                                                <select
                                                name="civil-status"
                                                id="civil-status"
                                                class="form-control"
                                                >
                                                <option value="" disabled selected>Select Civil Status</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="seperated">Seperated</option>
                                                <option value="widowed">Widowed</option>
                                                </select>
                                            </div>                                                                                                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                            <label class="mt-3" for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality">
                                        </div>                                             
                                        <div class="col-lg-4">
                                                <label class="mt-3" for="civilStatus">Select Resident Status</label>
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
                                            </div>
                                            <div class="col-lg-4">
                                            <input type="hidden" class="form-control" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" id="processedBy" name="processedBy">
                                        </div>                                                                                        
                                        </div>
                                    </div> 
                                <div class="modal-footer mt-1">
                                    <button class="btn modal-button-color text-white" type="submit">Generate PDF</button>
                                </div>        
                        </div>
                    </div>
                </div>
            </form>

            <form action="COR.php" method="POST">
                 <div class="shadow-sm p-3 mt-3 bg-body rounded">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- DATA TABLE -->
                                <div class="row">
                                    <div class="col mt-3">
                                        <h3 class="title-5 m-b-18">Issuing Barangay Certificate</h3>
                                    </div>
                                </div>
                                <div id="invoice" class="p-3">
                                    <h3 class="text-decoration-underline">Resident Details</h3>
                                    <div class="row">                                       
                                        <div class="col-lg-4">                                          
                                            <label class="mt-3 " for="lastname">Family Name</label>
                                            <input type="text" class="form-control" id="GenerateFamilyName" name="GenerateFamilyName">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="GenerateFirstName" name="GenerateFirstName">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="middleName">Last Name</label>
                                            <input type="text" class="form-control" id="GenerateMiddleName" name="GenerateMiddleName">
                                        </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">                                          
                                            <label class="mt-3 " for="residentID">Resident ID</label>
                                            <input type="text" class="form-control" id="GenerateResidentID" name="GenerateResidentID">
                                        </div>                                         
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="birthDate">Birth Date</label>
                                            <input type="date" class="form-control" id="GenerateBirthDate" name="GenerateBirthDate">
                                        </div>                                                          
                                        <div class="col-lg-4">
                                                <label class="mt-3" for="civilStatus">Select Civil Status</label>
                                                <select
                                                name="GenerateCivilStatus"
                                                id="GenerateCivilStatus"
                                                class="form-control"
                                                >
                                                <option value="" disabled selected>Select Civil Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Seperated">Seperated</option>
                                                <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>                                                                                                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                            <label class="mt-3" for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="GenerateNationality" name="GenerateNationality">
                                        </div>                                             
                                        <div class="col-lg-4">
                                                <label class="mt-3" for="residentStatus">Select Resident Status</label>
                                                <select
                                                name="GenerateResidentStatus"
                                                id="GenerateResidentStatus"
                                                class="form-control"
                                                >
                                                <option value="" disabled selected>Select Resident Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Deceased">Deceased</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                            <input type="hidden" class="form-control" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" id="GeneratedBy" name="GeneratedBy">
                                        </div>                                                                                        
                                        </div>
                                    </div> 
                                <div class="modal-footer mt-1">
                                    <button class="btn modal-button-color text-white" type="submit">Generate PDF</button>
                                </div>        
                        </div>
                    </div>
                </div>
            </form>     
            <!-- END BREADCRUMB--> 
       
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
        <!-- Main JS-->
        <script src="js/main.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/val.js"></script>

</html>