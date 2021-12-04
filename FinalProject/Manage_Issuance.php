
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
            <!-- END BREADCRUMB-->



            <!-- <section class="statistic">

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
            </section> -->
           




<!--Beginning of First Table-->
         

                                <!-- DATA TABLE -->
                                
                        <!--        <div class="table-data__tool">
                                    <div class="table-data__tool-left"><h3 class="title-5 m-b-18">Issuance Details</h3></div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>New</button>
                                    </div>
                                </div>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>description</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div> -->
    <!-- <div class="main1">
        <div id="invoice" class="clearance">
            <label class="asd"> <strong> Issuing Barangay Clearance </strong> </label><br>
            <label class="resident"> Resident Details </label><br><br>
                   <label> Family Name: </label>
                   <input class="family_name" type="text" name="lname" autocomplete="off" required>
               <br>
                   <label> First Name: </label>
                   <input class="first_name" type="text" name="fname" autocomplete="off" required> 
               <br>
                   <label class="mddlname"> Middle Name: </label>
                   <input class="middle_name" type="text" name="midname" autocomplete="off" required>
               <br>
                   <label class="Gender_1"> Gender: </label>
                   <select class="gender_1" name="gender" id="gender" required>
                       <option value="Male"> Male </option>
                       <option value="Female"> Female </option>
                   </select>
               <br>
                   <label class="birthday"> Birthday: </label>
                   <input type="date" id="birthday" name="birthday" required>
               <br>
                   <label class="status_label"> Civil Status: </label>
                   <select class="status_1" name="status" id="status" required>
                       <option value="Single"> Single </option>
                       <option value="Married"> Married </option>
                       <option value="Seperated"> Seperated </option>
                       <option value="Widowed"> Widowed - Drop Down </option>
                   </select>
               <br>
                   <label class="Purpose"> Purpose: </label>
                   <input class="purpose" type="text" name="purpose" autocomplete="off" required>
               <br>
               <hr class="line">
               <br>
                   <label class="OR"> OR Details </label><br>
                   <label class="Ornumber"> OR Number: </label>
                   <input class="ornumber" type="text" name="ornumber" autocomplete="off" required>
               <br>
                   <label class="ordate"> OR Date: </label>
                   <input type="date" id="ordate" name="ordate" required>
               <br>
               <hr class="line">
               <br>
                   <label class="cedula"> Cedula Details </label><br>
                   <label class="Cedulanumber"> Cedula No. </label>
                   <input class="cedulanumber" type="text" name="cedulanumber" autocomplete="off" required>
               <br>
                   <label class="ceduladate"> Cedula Date </label>
                   <input type="date" id="ceduladate" name="ceduladate" required>

            <button onclick="generatePDF();">download</button>
        </div>  
    </div>  -->



<!--End of first table -->



<!--Beginning of 2nd table -->

                                <!-- DATA TABLE -->
                                
                           <!--     <div class="table-data__tool">
                                    <div class="table-data__tool-left"> <h3 class="title-5 m-b-18">Logs</h3> </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>New</button>
                                    </div>
                                </div>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>description</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div> -->


<!---- End of Second Table -->   


<?php
    include 'footer.php';
?>
