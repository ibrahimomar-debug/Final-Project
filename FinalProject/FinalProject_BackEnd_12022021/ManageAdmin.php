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
    <link rel="stylesheet" href="ManageAdmin.css" />

    <!-- Title Page-->
    <title>Admin Information</title>

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

    <link rel="stylesheet" type="text/css" href="css/style.css" />

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
              <img src="images/icon/SK1.png" />
            </div>
          </div>
          <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="index2.html">
                  <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>
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
                    <a href="Manage_Information.html">
                      <i class="fas fa-tasks"></i>Manage Residence</a
                    >
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
                      <i class="fas fa-tasks"></i>Manage Issuance</a
                    >
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
                        <a href="#">
                          <i class="zmdi zmdi-account"></i>Account</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#">
                          <i class="zmdi zmdi-settings"></i>Setting</a
                        >
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#">
                          <i class="zmdi zmdi-money-box"></i>Billing</a
                        >
                      </div>
                    </div>
                    <div class="account-dropdown__body">
                      <div class="account-dropdown__item">
                        <a href="#"> <i class="zmdi zmdi-globe"></i>Language</a>
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#"> <i class="zmdi zmdi-pin"></i>Location</a>
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#"> <i class="zmdi zmdi-email"></i>Email</a>
                      </div>
                      <div class="account-dropdown__item">
                        <a href="#">
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
                      <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small"
                        data-toggle="modal"
                        data-target="#exampleModalCentered"
                      >
                        <i class="zmdi zmdi-plus"></i>add admin
                      </button>
                    </div>
                  </div>

                  <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                      <thead>
                        <tr>
                          <th>Resident ID</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Birthday</th>
                          <th>Gender</th>
                          <th>Position</th>
                          <th>Email</th>
                        </tr>
                      </thead>
          <?php
          require_once "AdminDatabase.php";
          $sql = "SELECT id, residentID, firstName, middleName, lastName, birthday, gender, position, email, phoneNumber,username FROM admindata";
          $result = $mysqli->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

          $id = $row["id"];
          $residentID = $row["residentID"];
          $firstName = $row["firstName"];
          $middleName = $row["middleName"];
          $lastName = $row["lastName"];
          $birthday = $row["birthday"];
          $gender = $row["gender"];
          $position = $row["position"];
          $email = $row["email"];
          $phoneNumber = $row["phoneNumber"];
          $username = $row["username"];

          echo '<tbody>
          <tr class="tr-shadow">
          <td class="desc">'.$residentID.'</td>
          <td>'.$lastName.'</td>
          <td>'.$firstName.'</td>
          <td>'.$birthday.'</td>
          <td>'.$gender.'</td>
          <td>'.$position.'</td>
          <td>'.$email.'</td>
          <td style="display:none;">'.$middleName.'</td>
          <td style="display:none;">'.$phoneNumber.'</td>
          <td style="display:none;">'.$username.'</td>
          <td style="display:none;">'.$id.'</td>
          <td>
          <div class="table-data-feature">
          <a href="COR.php?firstName='.$firstName.'&middleName='.$middleName.'&lastName='.$lastName.'" class="item generatebtn" data-toggle="tooltip" data-placement="top" title="Generate PDF">
          <i class="zmdi zmdi-file"></i>
          </a>
          <button class="item viewbtn" data-toggle="tooltip" data-placement="top" title="View">
          <i class="zmdi zmdi-eye"></i>
          </button>
          <a class="item editbtn" data-toggle="tooltip" data-placement="top" title="Edit">
          <i class="zmdi zmdi-edit"></i>
          </a>
          <a class="item deletebtn" data-toggle="tooltip" data-placement="top" title="Delete">
          <i class="zmdi zmdi-delete"></i>
          </a>
          </div>
          </td>
          </tr>
          </tbody>';
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
                  <!--  <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Start of Modal (Delete) -->
        <form action="DeleteAdmin.php" method="POST">
        <div
          class="modal"
          id="deletemodal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenteredLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalCenteredLabel">
                  DELETE ADMIN DATASHEET
                </h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">

              <input type="hidden" name="deleteid" id="deleteid">

                    DELETE ADMIN DATASHEET?

                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button
                  id="delete"
                  name="delete"
                  type="submit"
                  class="btn btn-primary"
                  onclick="return myFunction()"
                >
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
        <!-- End of Modal (Delete) -->

        <!-- Start of Modal (Update) -->
        <form action="UpdateAdmin.php" method="POST">
        <div
          class="modal"
          id="editmodal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenteredLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalCenteredLabel">
                  UPDATE ADMIN DATASHEET
                </h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="imagePreview" id="imagePreview">
                        <img src="" alt="Image preview" class="image-preview" />
                        <span class="imagePreview-text">Image</span>
                      </div>
                      <div class="input-file">
                        <input type="file" name="inputFile" id="inputFile" />
                      </div>
                    </div>

                    <div class="col-xl-9">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="FirstName" class="form-control-label"
                              >First Name</label
                            >
                            <input
                              type="text"
                              id="UpdateFirstName"
                              name="UpdateFirstName"                            
                              placeholder="Enter First Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i> -->
                            <div class="invalid" id="fname-tooltip">
                              Enter First Name
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Middle Name</label
                            >
                            <input
                              type="text"
                              id="UpdateMiddleName"
                              name="UpdateMiddleName"
                              placeholder="Enter Last Name"
                              class="form-control"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Middle Name!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Last Name</label
                            >
                            <input
                              type="text"
                              id="UpdateLastName"
                              name="UpdateLastName"
                              placeholder="Enter Last Name"
                              class="form-control"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Last Name!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Resident ID</label
                            >
                            <input
                              type="text"
                              id="UpdateResidentID"
                              name="UpdateResidentID"
                              placeholder="Enter Resident ID"
                              class="form-control"
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="resID-tooltip">
                              Enter Resident ID
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Birthday</label
                            >
                            <input
                              type="date"
                              id="UpdateBirthday"
                              name="UpdateBirthday"
                              placeholder="Enter Birthday"
                              class="form-control"
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Birthday!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Gender</label
                            >
                            <select
                              name="UpdateGender"
                              id="UpdateGender"
                              id="positionInput"
                              class="form-control"
                            >
                              <option selected="">Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Prefer not to mention">Prefer not to mention</option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Gender!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Position</label
                            >
                            <select
                              name="UpdatePosition"
                              id="UpdatePosition"
                              id="positionInput"
                              class="form-control"
                            >
                              <option selected>Select Position</option>
                              <option value="Barangay Captain">Barangay Captain</option>
                              <option value="Kagawad">Kagawad</option>
                              <option value="SK Chairman">Prefer not to mention</option>
                              <option value="Secretary">Secretary</option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Position!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Email</label
                            >
                            <input
                              type="mail"
                              id="UpdateEmail"
                              name="UpdateEmail"
                              placeholder="Enter Last Name"
                              class="form-control"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Email!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Phone Number</label
                            >
                            <input
                              type="number"
                              id="UpdatePhoneNumber"
                              name="UpdatePhoneNumber"
                              placeholder="Enter Phone Number"
                              class="form-control"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Phone Number!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Username</label
                            >
                            <input
                              type="text"
                              id="UpdateUsername"
                              name="UpdateUsername"
                              placeholder="Enter Username"
                              class="form-control"
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Username!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              ></label
                            >
                            <input
                              type="hidden"
                              id="identification"
                              name="identification"
                              placeholder="Enter Identification"
                              class="form-control"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button
                  id="register"
                  name="register"
                  type="submit"
                  class="btn btn-primary"
                  onclick="return myFunction()"
                >
                  Update
                </button>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- End of Modal (Update) -->        

        <!-- Start of Modal (Add Admin) -->
        <form action="InsertAdmin.php" method="POST">
        <div
          class="modal"
          id="exampleModalCentered"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenteredLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalCenteredLabel">
                  ADMIN REGISTRATION FORM
                </h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="imagePreview" id="imagePreview">
                        <img src="" alt="Image preview" class="image-preview" />
                        <span class="imagePreview-text">Image</span>
                      </div>
                      <div class="input-file">
                        <input type="file" name="inputFile" id="inputFile" />
                      </div>
                    </div>

                    <div class="col-xl-9">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="FirstName" class="form-control-label"
                              >First Name</label
                            >
                            <input
                              type="text"
                              id="first-name"
                              name="first-name"
                              
                              placeholder="Enter First Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i> -->
                            <div class="invalid" id="fname-tooltip">
                              Enter First Name
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Middle Name</label
                            >
                            <input
                              type="text"
                              id="middle-name"
                              name="middle-name"
                              placeholder="Enter Last Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Middle Name!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Last Name</label
                            >
                            <input
                              type="text"
                              id="last-name"
                              name="last-name"
                              placeholder="Enter Middle Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Last Name!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Resident ID</label
                            >
                            <input
                              type="text"
                              id="resident-id"
                              name="resident-id"
                              placeholder="Enter Resident ID"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="resID-tooltip">
                              Enter Resident ID
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Birthday</label
                            >
                            <input
                              type="date"
                              id="birthday"
                              name="birthday"
                              placeholder="Enter Birthday"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Birthday!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Gender</label
                            >
                            <select
                              name="gender"
                              id="positionInput"
                              class="form-control"
                              required
                            >
                              <option selected="">Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Prefer not to mention">Prefer not to mention</option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Gender!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Position</label
                            >
                            <select
                              name="position"
                              id="positionInput"
                              class="form-control"
                              required
                            >
                              <option selected>Select Position</option>
                              <option value="Barangay Captain">Barangay Captain</option>
                              <option value="Kagawad">Kagawad</option>
                              <option value="SK Chairman">Prefer not to mention</option>
                              <option value="Secretary">Secretary</option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Position!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Email</label
                            >
                            <input
                              type="mail"
                              id="email"
                              name="email"
                              placeholder="Enter Last Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Email!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Phone Number</label
                            >
                            <input
                              type="number"
                              id="phone-number"
                              name="phone-number"
                              placeholder="Enter Phone Number"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Phone Number!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Username</label
                            >
                            <input
                              type="text"
                              id="username"
                              name="username"
                              placeholder="Enter Username"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Username!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Password</label
                            >
                            <input
                              type="Password"
                              id="password"
                              name="password"
                              placeholder="Enter Password"
                              class="form-control"
                              required
                              minlength="6"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="pass-tooltip">
                              Enter Password!
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="form-control-label"
                              >Password Confirmation</label
                            >
                            <input
                              type="Password"
                              id="confirm-password"
                              name="confirm-password"
                              placeholder="Confirm Password"
                              class="form-control"
                              minlength="6"
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="passrpt-tooltip">
                              Confirm Password!
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button
                  id="register"
                  name="register"
                  type="submit"
                  class="btn btn-primary"
                  onclick="return myFunction()"
                >
                  Save Admin
                </button>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- End of Modal (Add Admin) -->

        <!-- Start of Modal (View) -->
        <div
          class="modal"
          id="viewmodal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenteredLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalCenteredLabel">
                  ADMIN DATASHEET
                </h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="imagePreview" id="imagePreview">
                        <img src="" alt="Image preview" class="image-preview" />
                        <span class="imagePreview-text">Image</span>
                      </div>
                    </div>

                    <div class="col-xl-9">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="FirstName" class="form-control-label"
                              >First Name</label
                            >
                            <input
                              type="text"
                              id="ViewFirstName"
                              name="ViewFirstName"
                              disabled
                              placeholder="Enter First Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i> -->
                            <div class="invalid" id="fname-tooltip">
                              Enter First Name!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Middle Name</label
                            >
                            <input
                              type="text"
                              id="ViewMiddleName"
                              name="ViewMiddleName"
                              disabled
                              placeholder="Enter Last Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Middle Name!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Last Name</label
                            >
                            <input
                              type="text"
                              id="ViewLastName"
                              name="ViewLastName"
                              disabled
                              placeholder="Enter Last Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Last Name!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Resident ID</label
                            >
                            <input
                              type="text"
                              id="ViewResidentID"
                              name="ViewResidentID"
                              disabled
                              placeholder="Enter Resident ID"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="resID-tooltip">
                              Enter Resident ID
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Birthday</label
                            >
                            <input
                              type="date"
                              id="ViewBirthday"
                              name="ViewBirthday"
                              disabled
                              placeholder="Enter Birthday"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Birthday!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                            >Gender</label
                            >
                            <select
                            name="ViewGender"
                            id="ViewGender"
                            class="form-select"
                            aria-label=".form-select-lg example"
                            disabled
                            required
                            >
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to mention">
                            Prefer not to mention
                            </option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Gender!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Position</label
                            >
                            <select
                            name="ViewPosition"
                            id="ViewPosition"
                            class="form-select"
                            aria-label=".form-select-lg example"
                            disabled
                            required
                            >
                              <option selected></option>
                              <option value="Barangay Captain">Barangay Captain</option>
                              <option value="Kagawad">Kagawad</option>
                              <option value="SK Chairman">Prefer not to mention</option>
                              <option value="Secretary">Secretary</option>
                            </select>
                            <div class="invalid" id="positionInput-tooltip">
                              Select Position!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Email</label
                            >
                            <input
                              type="mail"
                              id="ViewEmail"
                              name="ViewEmail"
                              disabled
                              placeholder="Enter Last Name"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="lname-tooltip">
                              Enter Email!
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Phone Number</label
                            >
                            <input
                              type="number"
                              id="ViewPhoneNumber"
                              name="ViewPhoneNumber"
                              disabled
                              placeholder="Enter Phone Number"
                              class="form-control"
                              required
                            />
                            <!-- <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="mname-tooltip">
                              Enter Phone Number!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="nf-email" class="form-control-label"
                              >Username</label
                            >
                            <input
                              type="text"
                              id="ViewUsername"
                              name="ViewUsername"
                              disabled
                              placeholder="Enter Username"
                              class="form-control"
                              required
                            />
                            <!--<i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small> -->
                            <div class="invalid" id="user-tooltip">
                              Enter Username!
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Modal (View) -->

<!--#################################################################################################################################################################################################################-->

        <!-- END PAGE CONTAINER-->
      </div>
    </div>

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

    $(document).ready(function(){
      $('.viewbtn').on('click', function(){

        $('#viewmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $('#ViewResidentID').val(data[0]);
        $('#ViewLastName').val(data[1]);
        $('#ViewFirstName').val(data[2]);
        $('#ViewBirthday').val(data[3]);
        $('#ViewGender').val(data[4]);
        $('#ViewPosition').val(data[5]);
        $('#ViewEmail').val(data[6]);
        $('#ViewMiddleName').val(data[7]);
        $('#ViewPhoneNumber').val(data[8]);
        $('#ViewUsername').val(data[9]);

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

        $('#UpdateResidentID').val(data[0]);
        $('#UpdateLastName').val(data[1]);
        $('#UpdateFirstName').val(data[2]);
        $('#UpdateBirthday').val(data[3]);
        $('#UpdateGender').val(data[4]);
        $('#UpdatePosition').val(data[5]);
        $('#UpdateEmail').val(data[6]);
        $('#UpdateMiddleName').val(data[7]);
        $('#UpdatePhoneNumber').val(data[8]);
        $('#UpdateUsername').val(data[9]);
        $('#identification').val(data[10]);

      });
    });
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

        $('#deleteid').val(data[10]);

      });
    });
    </script>

    <script>
      const wrapper = document.querySelector(".wrapper");
      const fileName = document.querySelector(".file-name");
      const defaultBtn = document.querySelector("#default-btn");
      const customBtn = document.querySelector("#custom-btn");
      const cancelBtn = document.querySelector("#cancel-btn i");
      const img = document.querySelector("img");
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      function defaultBtnActive() {
        defaultBtn.click();
      }
      defaultBtn.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function () {
            const result = reader.result;
            img.src = result;
            wrapper.classList.add("active");
          };
          cancelBtn.addEventListener("click", function () {
            img.src = "";
            wrapper.classList.remove("active");
          });
          reader.readAsDataURL(file);
        }
        if (this.value) {
          let valueStore = this.value.match(regExp);
          fileName.textContent = valueStore;
        }
      });
    </script>

  </body>
</html>
<!-- end document-->
