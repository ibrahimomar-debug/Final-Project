<?php
    include 'header.php';
    include 'navbar.php';
?>
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
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>

                                                    <th class="fs-6">ID</th>
                                                    <th class="fs-6">family name</th>
                                                    <th class="fs-6">first name</th>
                                                    <th class="fs-6">middle name</th>
                                                    <th class="fs-6">position</th>
                                                    <th class="fs-6">username</th>                                              
                                                    <th class="fs-6">Action</th>
                                                </tr>
                                            </thead>
                                              <tbody>
                                                <tr class="tr-shadow">
                                                <?php
                                                    $dbServername = "Localhost";
                                                    $dbUsername = "root";
                                                    $dbPassword = "";
                                                    $dbName = "finalproject";
                                                    
                                                    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                                                    
                                                    
                                                    $query = "SELECT * from admins_db ;";
                                                    $result = mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_array($result)){ ?>

                                                    <td><?php echo $row['userid']?></td>
                                                    <td><?php echo $row['lastName']?></td>
                                                    <td><?php echo $row['firstName']?></td>
                                                    <td><?php echo $row['midName']?></td>
                                                    <td><?php echo $row['officePosition']?></td>
                                                    <td><?php echo $row['username']?></td>                   
                                                    <td>
                                                        <div class="table-data-feature justify-content-start">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                    
                                                        </div>
                                                    </td>

                                                <?php } ?>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="statistic2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">

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
                                <form action="includes/signup-inc.php" method="POST">
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
                                                        <input type="text" id="fname" name="fname" placeholder="Enter First Name" class="form-control" required>
                                                        <!-- <i class="fas fa-check-circle"></i>
                                                            <i class="fas fa-exclamation-circle"></i> -->
                                                        <div class="invalid" id="fname-tooltip">
                                                            error message 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Last Name </label>
                                                        <input type="text" id="lname" name="lname" placeholder="Enter Last Name" class="form-control" required>
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
                                                        <label for="nf-email" class="form-control-label">Middle Name <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
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
                                                        <label for="nf-email" class=" form-control-label">Position</label>
                                                        <select name="position" id="positionInput" class="form-control" required>
                                                            <option value="0">Select Position</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                        <div class="invalid" id="positionInput-tooltip">
                                                            Please select voter status 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="nf-email" class="form-control-label">Username</label>
                                                        <input type="text" id="user" name="user" placeholder="Enter Username" class="form-control" required>
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
                                                        <label for="nf-email" class="form-control-label">Password </label>
                                                        <input type="Password" id="pass" name="pass" placeholder="Enter Password" class="form-control" required>
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

                            </div>
                            <div class="modal-footer modal-body-color">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="register" name="registerAdmin">Save Admin</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->
                <!-- END PAGE CONTAINER-->
            </div>
        </div>
    </body>


<?php
    include 'footer.php';
?>