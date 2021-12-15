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
    <link rel="stylesheet" href="ManageBarangayInfo.css" />
    <link href="logo/<?php echo $image?>" rel="icon" />
    <link href="logo/<?php echo $image?>" rel="icon" />
    <!-- Title Page-->
    <title>Barangay Details</title>

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
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Barangay <?php echo $barangay?></p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;"><?php echo $city?> City</p>
                            <p class="text-white text-start text-uppercase" style="font-weight: bolder;">Province of <?php echo $province?></p>
                        </div>
                    </div>
                </div>
                <div class="account2">

                    <div class="image img-cir img-140">
                        <img src="logo/<?php echo $image?>"/>
                    </div>

                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
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
                                        <i class="fas fa-users"></i>Manage Resident</a>
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
                        <li class="has-sub">
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
                                                <a href="Dashboard.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Manage Barangay</li>
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

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-auto">
            <form action="UpdateBarangay.php" method="POST" enctype="multipart/form-data">
                 <div class="shadow-lg p-3 mt-3 bg-body rounded">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- DATA TABLE -->
                                <div class="row">
                                    <div class="col mt-3">
                                    </div>
                                </div>
                                <div id="invoice" class="p-3">
                                    <h3 class="text-decoration-underline">Barangay Details</h3>
                                        <div class="row">
                                            <div class="col-lg-4">
                                            <label class="mt-3 font-weight-bold" for="barangayLogo">Barangay Logo</label>
                                                <div class="text-center">
                                                    <img id="upIm" src="logo/<?php echo $image?>" class="rounded" alt="logo"/>
                                                </div>
                                            <div class="input-file">
                                            <input style="display: none;" accept="image/*" type="file" name="updateImage" id="updateImage"/>
                                                <a
                                                    style="color: white;"
                                                    class="btn modal-button-color text-white"
                                                    onclick="document.getElementById('updateImage').click();"
                                                    >
                                                    Update Image
                                                </a>
                                            </div>                                                
                                            </div>
                                        <div class="col">                                        
                                        <div class="col-lg-6">
                                            <label class="mt-5 font-weight-bold" for="barangay">Barangay</label>
                                            <input type="text" placeholder="Enter Barangay" value="<?php echo $barangay?>" class="form-control" id="barangay" name="barangay" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="mt-5 font-weight-bold" for="city">City</label>
                                            <input type="text" placeholder="Enter City" value="<?php echo $city?>" class="form-control" id="city" name="city" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="mt-5 font-weight-bold" for="province">Province</label>
                                            <input type="text" placeholder="Enter Province" value="<?php echo $province?>" class="form-control" id="province" name="province" required>
                                        </div>                                            
                                        <div class="col-lg-4">
                                            <input type="hidden" class="form-control" value="<?php echo $_SESSION["firstName"]. " " .$_SESSION["lastName"] ?>" id="updateBy" name="updateBy">
                                        </div>                                                                                        
                                        </div> 
                                        </div>
                                    </div> 
                                <div class="modal-footer mt-1">
                                 <button class="btn modal-button-color text-white" type="submit">Update</button>
                            </div>        
                        </div>
                    </div>
                </div>
            </form>
        </div>
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

        <script>
        updateImage.onchange = (evt) => {
        const [file] = updateImage.files;
        if (file) {
        upIm.src = URL.createObjectURL(file);
        }
        };
        </script>

</body>
</html>