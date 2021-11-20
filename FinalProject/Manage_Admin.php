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
    <title>Admin Information</title>

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

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-140">
                        <img src="images/icon/SK1.png"  />
                    </div>

                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index_Main.html">
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
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/SK1.png" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
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
             <!--   <div class="section__content section__content--p30">
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

                                   <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- END BREADCRUMB-->

            <!-- 
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"></h2>
                                    <span class="desc">Total Registered Popolation</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-accounts-outline"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"></h2>
                                    <span class="desc">Males</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-male-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"></h2>
                                    <span class="desc">Females</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-female"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"></h2>
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
            -->




<!--Beginning of First Table-->
         
     <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     <div class="row">
                            <div class="col-xl-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left"><h3 class="title-5 m-b-18">Admin Information</h3></div>
                                    <div class="table-data__tool-right">

                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#exampleModalCentered">
                                            <i class="zmdi zmdi-plus"></i>add admin</button>

                                    </div>

                                </div>

                                <div class="table-responsive table-responsive-data2">

                                    <?php
                                        $connection = mysqli_connect("localhost", "root");
                                        $db = mysqli_select_db($connection, 'admins_db');

                                        $message = "SELECT * FROM admins_table";
                                        $query_run = mysqli_query($connection, $message);
                                    ?>
                                    <table id="fetch_data" class="table table-data2">

                                        <thead>
                                            <tr class="tr-shadow">                                             
                                                <th scope="col">first name</th>
                                                <th scope="col">last name</th>
                                                <th scope="col">middle name</th>
                                                <th scope="col">resident ID</th>
                                                <th scope="col">position</th>
                                                <th scope="col">username</th> 
                                               
                                            </tr>
                                        </thead>

                                    <?php
                                        if($query_run)
                                        {
                                            foreach($query_run as $row)
                                        {
                                    ?>

                                        <tbody class="table-body">
                                           <tr class="spacer"></tr>
                                                
                                                <td><?php echo $row['residentID']; ?></td>
                                                <td><?php echo $row['lasttName']; ?></td>
                                                <td><?php echo $row['firstName']; ?></td>
                                                <td><?php echo $row['midName']; ?></td>
                                                <td><?php echo $row['officePosition']; ?></td>
                                                <td><?php echo $row['username']; ?></td>

                                                <td>
                                                    <div class="table-data-feature">
                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                               
                                        </tbody>
                                    <?php
                                        }
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
			
<!-- Start of Modal -->

<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenteredLabel">ADMIN REGISTRATION FORM</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
                                                  
     <form method="POST" action="adminReg.php">

        <div class="row">
            <div class="col-md-3">
                <div class="imagePreview" id="imagePreview">
                    <img src="" alt="Image preview" class="image-preview">
                    <span class="imagePreview-text">Image</span>
                </div>
                <div class="input-file">
                    <input type="file" name="inputFile" id="inputFile">
                </div>  
            </div>

            <div class="col-xl-9">
                <div class="row"> 
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="FirstName" class="form-control-label">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Enter First Name" class="form-control">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>                                
                                <div class="invalid" id="fname-tooltip">                                 
                                    error message 
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nf-email" class="form-control-label">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" class="form-control">
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
                            <input type="text" id="mname" name="mname" placeholder="Enter Middle Name" class="form-control">
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
                            <input type="text" id="resID" name="resID" placeholder="Enter Resident ID" class="form-control" readonly="">
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
                            <select name="position" id="positionInput" class="form-control">
                                <option value="0">Select Position</option>
                                <option value="Brgy. Captain">Brgy. Captain </option>
                                <option value="Kagawad">Kagawad</option>
                                <option value="SK Chairman">SK Chairman</option>
                                <option value="Secretary">Secretary</option>
                            </select>
                                <div class="invalid" id="positionInput-tooltip">
                                    Please select position 
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nf-email" class="form-control-label">Username</label>
                            <input type="text" id="user" name="user" placeholder="Enter Username" class="form-control">
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
                            <label for="nf-email" class="form-control-label">Password</label>
                            <input type="Password" id="pass" name="pass" placeholder="Enter Password" class="form-control">
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
                            <input type="Password" id="passrpt" name="passrpt" placeholder="Confirm Password" class="form-control">
                                <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                                <div class="invalid" id="passrpt-tooltip">
                                    error message 
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                  

                <div class="modal-footer"> 
                    <br> <br>  <br> <br> <br> <br> <br> <br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="return myFunction()" id="register" name="register">Save Addmin</button>
              </div> 

    </form>

      </div>
    </div>
  </div>
</div>


<!-- End of Modal -->





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
	<script src="js/modal.js"></script>
    <script src="js/val.js"></script>

</body>

</html>
<!-- end document-->
