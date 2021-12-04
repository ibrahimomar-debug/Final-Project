<?php
    include 'header.php';
    include 'navbar.php';
?>
    
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
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="title-5 m-b-18">Resident Information Management</h3>
                                        </div>

                                        <div class="col-6 d-flex justify-content-end mb-4">
                                            <button type="button" class="btn modal-button-color text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="zmdi zmdi-plus"></i>
                                                New Resident
                                            </button>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-4">
                                                <form action="" autocomplete="off" class="form-horizontal" method="post" accept-charset="utf-8">
                                                    <div class="input-group">
                                                        <input name="searchtext" value="" class="form-control" type="text">
                                                        <span class="input-group-btn">
                                                            <button class="btn modal-button-color text-white" type="submit">Search</button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                            <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#exampleModalCentered">
                                                <i class="zmdi zmdi-plus"></i>New Resident
                                                </button> -->


                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <!--   <th>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                        </th> -->
                                                    <th class="fs-6">resident id</th>
                                                    <th class="fs-6">family name</th>
                                                    <th class="fs-6">first name</th>
                                                    <th class="fs-6">middle name</th>
                                                    <th class="fs-6">resident type</th>
                                                    <th class="fs-6">resident status</th>
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
                                                
                                                
                                        $query = "SELECT * from residentinfo_table ;";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result)){ ?>

                                                <td><?php echo $row['residentID']?></td>
                                                <td><?php echo $row['famName']?></td>
                                                <td><?php echo $row['firstName']?></td>
                                                <td><?php echo $row['midName']?></td>
                                                <td><?php echo $row['residentType']?></td>
                                                <td><?php echo $row['residentStatus']?></td>                   
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
                                            <!--   <tbody>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                
                                                    <td>Lori Lynch</td>
                                                
                                                    <td>
                                                        <span class="block-email">lori@example.com</span>
                                                    </td>
                                                    <td class="desc">Samsung S8 Black</td>
                                                    <td>2018-09-27 02:12</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$679.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
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
                                                </tr>
                                                
                                                
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">john@example.com</span>
                                                    </td>
                                                    <td class="desc">iPhone X 64Gb Grey</td>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$999.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
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
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">lyn@example.com</span>
                                                    </td>
                                                    <td class="desc">iPhone X 256Gb Black</td>
                                                    <td>2018-09-25 19:03</td>
                                                    <td>
                                                        <span class="status--denied">Denied</span>
                                                    </td>
                                                    <td>$1199.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
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
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">doe@example.com</span>
                                                    </td>
                                                    <td class="desc">Camera C430W 4k</td>
                                                    <td>2018-09-24 19:10</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$699.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
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
                                                </tr>
                                                </tbody> -->
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
                                    <!--<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END PAGE CONTAINER-->
            </div>
        </div>
        <!-- Start of Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header modal-header-color">
                        <h4 class="modal-title modal-title-color-text" id="exampleModalCenteredLabel">RESIDENT REGISTRATION FORM</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal-body-color">
                        <form action="includes/signup-inc.php" method= "POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="imagePreview mb-3" id="imagePreview">
                                        <img src="" alt="Image preview" class="image-preview">
                                        <span class="imagePreview-text">Image</span>
                                    </div>
                                    <div class="input-file">
                                        <input type="file" name="inputFile" id="inputFile">
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="pb-2 fw-bolder" style="text-decoration: underline;">BASIC INFORMATION</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">Family Name</label>
                                                <input type="text" id="famName" name="famName" placeholder="Enter Family Name" class="form-control" required>
                                                <div class="invalid" id="famName-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">First Name</label>
                                                <input type="text" id="fName" name="fName" placeholder="Enter First Name" class="form-control" required>
                                                <div class="invalid" id="fName-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;" >Middle Name <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                                <input type="text" id="mName" name="mName" placeholder="Enter Middle Name" class="form-control" >
                                                <div class="invalid" id="mName-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">Alias <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                                <input type="text" id="alias" name="alias" placeholder="Enter Alias" class="form-control">
                                                <div class="invalid" id="alias-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">Face Marks </label>
                                                <input type="text" id="fmark" name="fmark" placeholder="Enter Face Mark" class="form-control" required>
                                                <div class="invalid" id="fmark-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">Birth Date </label>
                                                <input type="date" id="bdate" name="bdate" placeholder="Enter Birth Date" class="form-control" required>
                                                <div class="invalid" id="resID-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label" style="font-weight: bold;">Birth Place </label>
                                                <input type="text" id="bplace" name="bplace" placeholder="Enter Birth Place" class="form-control" required>
                                                <div class="invalid" id="bplace-tooltip">
                                                    error message 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Sex</label>
                                                <select name="sexOption" id="sexOption" class="form-control" required>
                                                    <option value="0">Select Sex</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                                <div class="invalid" id="sexOption-tooltip">
                                                    Please select sex
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Civil Status</label>
                                                <select name="civilstatus" id="civilstatus" class="form-control" required>
                                                    <option selected>Please select Civil Status</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="separated">Separated</option>
                                                    <option value="widowed">Widowed</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;"> Nationality</label>
                                            <input type="text" id="nation" name="nation" placeholder="Enter Nationality" class="form-control" required>
                                            <div class="invalid" id="nation-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Religion / Belief <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="relbel" name="relbel" placeholder="Enter Religion/Belief" class="form-control">
                                            <div class="invalid" id="relbel-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Occupation <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="occupation" name="occupation" placeholder="Enter Occupation" class="form-control">
                                            <div class="invalid" id="occupation-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;" >Spouse’s Name <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input disabled type="text" id="spousename" name="spousename" placeholder="Enter Spouse Name" class="form-control">
                                            <div class="invalid" id="spname-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;"> Spouse’s Occupation <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input disabled type="text" id="spouseOcc" name="spouseoccupation" placeholder="Enter Spouse Occupation" class="form-control">
                                            <div class="invalid" id="spOccu-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Voter Status</label>
                                            <select name="voterOption" id="voterOption" class="form-control" required>
                                                <option selected>Select Voter Status</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-9">
                                        <h3 class="pb-2 fw-bolder" style="text-decoration: underline;">CONTACT INFORMATION</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">City Address</label>
                                            <input type="text" id="cityAdd" name="cityAdd" placeholder="Enter City Address" class="form-control" required>
                                            <div class="invalid" id="cityAdd-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Provincial Address </label>
                                            <input type="text" id="provinceAdd" name="provinceAdd" placeholder="Enter Provincial Address" class="form-control"  >
                                            <div class="invalid" id="provinceAdd-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Purok <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="purok" name="purok" placeholder="Enter Purok" class="form-control">
                                            <div class="invalid" id="purok-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Email Address <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="email" id="emailAdd" name="emailAdd" placeholder="Enter Email Address" class="form-control">
                                            <div class="invalid" id="emailAdd-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Home Number 1 <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="hNumberOne" name="hNumberOne" placeholder="Enter Home Number 1" class="form-control">
                                            <div class="invalid" id="hNumberOne-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Home Number 2 <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="hNumberTwo" name="hNumberTwo" placeholder="Enter Home Number 2" class="form-control">
                                            <div class="invalid" id="hNumberTwo-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Mobile Number 1 <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="mNumberOne" name="mNumberOne" placeholder="Enter Mobile number 1" class="form-control">
                                            <div class="invalid" id="mNumberOne-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Mobile Number 2 <span class="text-secondary" style="font-size:10px">(Optional)</span></label>
                                            <input type="text" id="mNumberTwo" name="mNumberTwo" placeholder="Enter Mobile Number 2" class="form-control">
                                            <div class="invalid" id="mNumberTwo-tooltip">
                                                error message 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>            
                            </div>
                            <hr>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <h3 class="pb-2 fw-bolder" style="text-decoration: underline;">REGISTRATION DETAILS</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Resident Type </label>
                                            <select name="resType" id="resType" class="form-control" required>
                                                <option selected>Select Resident Type</option>
                                                <option value="native">Native</option>
                                                <option value="rentee">Rentee</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Voter Status </label>
                                            <select name="resStatus" id="resStatus" class="form-control" required>
                                                <option selected>Select Voter Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="deceased">Deceased</option>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">First Name</label>
                                            <input type="email" id="nf-email" name="nf-email" placeholder="Enter Middle Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label " style="font-weight: bold;">Resident ID</label>
                                            <input type="text" id="nf-email" name="nf-email" placeholder="Enter Last Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nf-email" class="form-control-label" style="font-weight: bold;">Family Name</label>
                                            <input type="email" id="nf-email" name="nf-email" placeholder="Enter Middle Name" class="form-control">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="modal-footer  modal-body-color">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"  name="registerResident">Save New Resident</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
            <div class="modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header modal-header-color">
                  <h4 class="modal-title modal-title-color-text" id="exampleModalCenteredLabel">RESIDENT REGISTRATION FORM</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                  </button>
                </div>
            
                <div class="modal-body modal-body-color">
                                                            
               <form>
            
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
                              <div class="col-sm-12">
                                  <h3 class="pb-2 display-5" style="text-decoration: underline;">BASIC INFORMATION</h3>
                              </div>
                          </div>
            
                         
            
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label fw-bolder">Resident ID</label>
                                      <input type="text" id="resID" name="resID" placeholder="Enter Resident ID" class="form-control" readonly="">
                                          <div class="invalid" id="resID-tooltip">
                                              error message 
                                          </div>
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Family Name</label>
                                      <input type="text" id="famName" name="famName" placeholder="Enter Family Name" class="form-control">
                                          <div class="invalid" id="famName-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">First Name</label>
                                      <input type="text" id="fName" name="fName" placeholder="Enter First Name" class="form-control">
                                          <div class="invalid" id="fName-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                          </div>
            
            
                          <div class="row"> 
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Middle Name</label>
                                      <input type="text" id="mName" name="mName" placeholder="Enter Middle Name" class="form-control">
                                          <div class="invalid" id="mName-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Alias</label>
                                      <input type="text" id="alias" name="alias" placeholder="Enter Alias" class="form-control">
                                          <div class="invalid" id="alias-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Face Marks</label>
                                      <input type="text" id="fmark" name="fmark" placeholder="Enter Face Mark" class="form-control">
                                          <div class="invalid" id="fmark-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                          </div> 
            
                        
                          <div class="row"> 
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Birth Date</label>
                                      <input type="date" id="bdate" name="bdate" placeholder="Enter Birth Date" class="form-control">
                                          <div class="invalid" id="resID-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label">Birth Place</label>
                                      <input type="text" id="bplace" name="bplace" placeholder="Enter Birth Place" class="form-control">
                                          <div class="invalid" id="bplace-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                      <label for="nf-email" class=" form-control-label">Sex</label>
                                      <select name="sexOption" id="sexOption" class="form-control">
                                          <option value="0">Select Sex</option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                      </select>
                                          <div class="invalid" id="sexOption-tooltip">
                                              Please select sex
                                          </div>
                                  </div>
                              </div>
                          </div>
            
                      </div>
                  </div>
            
                  <hr>
            
                  <div class="col-xl-12">
            
                          <div class="row"> 
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;"> Nationality</label>
                                      <input type="text" id="nation" name="nation" placeholder="Enter Nationality" class="form-control">
                                          <div class="invalid" id="nation-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Religion / Belief</label>
                                      <input type="text" id="relbel" name="relbel" placeholder="Enter Religion/Belief" class="form-control">
                                          <div class="invalid" id="relbel-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Occupation</label>
                                      <input type="text" id="occupation" name="occupation" placeholder="Enter Occupation" class="form-control">
                                          <div class="invalid" id="occupation-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
                          </div>
            
                         
            
                          <div class="row"> 
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Spouse’s Name </label>
                                      <input type="text" id="spname" name="spname" placeholder="Enter Spouse Name" class="form-control">
                                          <div class="invalid" id="spname-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;"> Spouse’s Occupation</label>
                                      <input type="text" id="spOccu" name="spOccu" placeholder="Enter Spouse Occupation" class="form-control">
                                          <div class="invalid" id="spOccu-tooltip">
                                              error message 
                                          </div>                            
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                   <div class="form-group">
                                      <label for="nf-email" class=" form-control-label" style="font-weight: bold;">Voter Status</label>
                                      <select name="voterOption" id="voterOption" class="form-control">
                                          <option value="0">Select Voter Status</option>
                                          <option value="1">Yes</option>
                                          <option value="2">No</option>
                                      </select>
                                          <div class="invalid" id="voterOption-tooltip">
                                              Please select voter status
                                          </div>
                                  </div>
                              </div>
                          </div>
                      <br>
                      <hr>                
                          <div class="row"> 
                              <div class="col-xl-9">
                                  <h3 class="pb-2 display-5" style="text-decoration: underline;">CONTACT INFORMATION</h3>
                              </div>
                          </div>
            
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">City Address</label>
                                      <input type="text" id="cityAdd" name="cityAdd" placeholder="Enter City Address" class="form-control">
                                          <div class="invalid" id="cityAdd-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Provincial Address</label>
                                      <input type="text" id="provinceAdd" name="provinceAdd" placeholder="Enter Provincial Address" class="form-control">
                                          <div class="invalid" id="provinceAdd-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Purok</label>
                                      <input type="text" id="purok" name="purok" placeholder="Enter Purok" class="form-control">
                                          <div class="invalid" id="purok-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
                          </div>
            
                                  <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Email Address</label>
                                      <input type="email" id="emailAdd" name="emailAdd" placeholder="Enter Email Address" class="form-control">
                                          <div class="invalid" id="emailAdd-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Home Number 1</label>
                                      <input type="text" id="hNumberOne" name="hNumberOne" placeholder="Enter Home Number 1" class="form-control">
                                          <div class="invalid" id="hNumberOne-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Home Number 2</label>
                                      <input type="text" id="hNumberTwo" name="hNumberTwo" placeholder="Enter Home Number 2" class="form-control">
                                          <div class="invalid" id="hNumberTwo-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
                          </div>
            
            
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Mobile Number 1</label>
                                      <input type="text" id="mNumberOne" name="mNumberOne" placeholder="Enter Mobile number 1" class="form-control">
                                          <div class="invalid" id="mNumberOne-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Mobile Number 2</label>
                                      <input type="text" id="mNumberTwo" name="mNumberTwo" placeholder="Enter Mobile Number 2" class="form-control">
                                          <div class="invalid" id="mNumberTwo-tooltip">
                                              error message 
                                          </div>                              
                                  </div>
                              </div>
                          </div>
            
                          <br>            
                          </div>
                          <hr>
            
                              <div class="col-xl-12">
                          <div class="row"> 
                              <div class="col-xl-9">
                                  <h3 class="pb-2 display-5" style="text-decoration: underline;">REGISTRATION DETAILS</h3>
                              </div>
                          </div>
            
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Resident Type</label>
                                      <input type="text" id="resType" name="resType" placeholder="Select Resident Type" class="form-control">
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Resident Status</label>
                                      <input type="text" id="resStatus" name="resStatus" placeholder="Select Resident Status" class="form-control">
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">First Name</label>
                                      <input type="email" id="nf-email" name="nf-email" placeholder="Enter Middle Name" class="form-control">
                                  </div>
                              </div>
                          </div>
            
                                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label " style="font-weight: bold;">Resident ID</label>
                                      <input type="text" id="nf-email" name="nf-email" placeholder="Enter Last Name" class="form-control">
                                  </div>
                              </div>
            
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="nf-email" class="form-control-label" style="font-weight: bold;">Family Name</label>
                                      <input type="email" id="nf-email" name="nf-email" placeholder="Enter Middle Name" class="form-control">
                                  </div>
                              </div>
                          </div>
                      </div>
              </form>
            
                </div>
            
                <div class="modal-footer modal-body-color">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary" onclick="return residentFunction()" id="register" name="register">Save New Resident</button>
                </div>
              </div>
            </div>
            </div> -->
        <!-- End of Modal -->
<?php
    include 'footer.php';
?>