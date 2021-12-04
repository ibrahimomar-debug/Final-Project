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
                                                <a href="index_Main.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Barangay Clearance</li>
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
                <div class="clearance">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="row">
                                    <div class="col mt-3">
                                        <h3 class="title-5 m-b-18">Issuing Barangay Clearance</h3>
                                    </div>


                                        <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#exampleModalCentered">
                                            <i class="zmdi zmdi-plus"></i>New Resident
                                            </button> -->
                                </div>
                                <hr>
                                <div id="invoice" class="p-3">
                                    <h3 class="text-decoration-underline">Resident Details</h3>
                                    <div class="row">
                                        <div class="col-lg-4">
                                          
                                            <label class="mt-3 " for="Lastname">Family Name</label>
                                            <input type="text" class="form-control" id="Lastname" aria-describedby="Lastname">

                                            <label class="mt-3 " for="Gender">Gender</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            <label class="mt-3 " for="Purpose">Purpose</label>
                                            <input type="text" class="form-control" id="Purpose" aria-describedby="Purpose">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3" for="Lastname">First Name</label>
                                            <input type="text" class="form-control" id="Lastname" aria-describedby="Lastname">

                                            <label class="mt-3 " for="Gender">Gender</label><br>
                                            <input  class="form-control"  type="date" id="birthday" name="birthday">
                                        </div>
                                        <div class="col-lg-4">

                                            <label class="mt-3" for="Lastname">Middle Name</label>
                                            <input type="text" class="form-control" id="Lastname" aria-describedby="Lastname">

                                            <label class="mt-3 " for="civilStatus">Civil Status</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="separated">Separated</option>
                                                <option value="widowed">Widowed – Drop Down</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>
                                    <h3 class="text-decoration-underline">OR Details</h3>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="mt-3 " for="ORnumber">OR Number</label>
                                            <input type="text" class="form-control" id="ORnumber" aria-describedby="ORnumber">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3 " for="ORdate">OR Date</label><br>
                                            <input  class="form-control"  type="date" id="ORdate" name="ORdate">
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="text-decoration-underline">Cedula Details</h3>
                                    <div class="row mb-3">
                                        <div class="col-lg-4">
                                            <label class="mt-3 " for="ORnumber">Cedula Number</label>
                                            <input type="text" class="form-control" id="ORnumber" aria-describedby="ORnumber">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="mt-3 " for="ORdate">Cedula Date</label><br>
                                            <input  class="form-control"  type="date" id="ORdate" name="ORdate">
                                        </div>
                                    </div>

                                </div>    
                                <div class="modal-footer mt-1">
                                    <button class="btn modal-button-color text-white" onclick="generatePDF();">Generate PDF</button>
                                </div>        
                        </div>
                    </div>
                </div>

<?php
    include 'footer.php';

?>