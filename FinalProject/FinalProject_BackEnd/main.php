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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link href="photos/welcome.png" rel="icon" />
    <link href="photos/welcome.png" rel="icon" />
    <title>Main Page</title>
  </head>
  <body style="background-color: chocolate">
    <div class="container my-sm-5 mt-4">
      <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-6 col-xl-6 mx-auto">

          <div class="shadow-lg p-3 mt-3 bg-body rounded">
            <form name="main" onsubmit="return checkValidates()">

          <h2
            class="title-left"
            unselectable="on"
            onselectstart="return false;"
            onmousedown="return false;"
          >
            Hello, <?php echo $_SESSION["firstName"]?> <?php echo $_SESSION["lastName"]?>
          </h2>

              <div class="row mt-5">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="text"
                      name="first-name"
                      value= <?php echo $_SESSION["firstName"] ?>
                      disabled
                      readonly
                      id="form3Example1m"
                      class="form-control rounded-pill"
                    />
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >First name</label
                    >
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="text"
                      name="last-name"
                      value=<?php echo $_SESSION["lastName"] ?>
                      disabled
                      readonly
                      id="form3Example1n"
                      class="form-control rounded-pill"
                    />
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1n"
                      >Last name</label
                    >
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="number"
                      name="student-number"
                      value=<?php echo $_SESSION["residentID"] ?>
                      disabled
                      readonly
                      onKeyDown="if(this.value.length==11 && event.keyCode>47 && event.keyCode < 58)return false;"
                      id="form3Example1m"
                      class="form-control rounded-pill"
                    />
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >Student Number</label
                    >
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                  <select
                    name="course"
                    disabled
                    readonly
                    class="form-select rounded-pill"
                    aria-label=".form-select-lg example"
                  >
                    <option selected><?php echo $_SESSION["position"] ?></option>
                    <option value="Bachelor of Science in Civil Engineering">
                      Bachelor of Science in Civil Engineering
                    </option>
                    <option value="Bachelor of Science in Computer Engineering">
                      Bachelor of Science in Computer Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Electrical Engineering"
                    >
                      Bachelor of Science in Electrical Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Mechanical Engineering"
                    >
                      Bachelor of Science in Mechanical Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Associate in Computer Technology"
                    >
                      Bachelor of Science in Associate in Computer Technology
                    </option>
                    <option value="Bachelor of Science in Computer Science">
                      Bachelor of Science in Computer Science
                    </option>
                    <option
                      value="Bachelor of Science in Entertainment and Multimedia
                      Computing"
                    >
                      Bachelor of Science in Entertainment and Multimedia
                      Computing
                    </option>
                    <option value="Bachelor of Science in Information System">
                      Bachelor of Science in Information System
                    </option>
                    <option
                      value="Bachelor of Science in Information Technology"
                    >
                      Bachelor of Science in Information Technology
                    </option>
                    <option value="Master in Information Management">
                      Master in Information Management
                    </option>
                  </select>
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >Course</label
                    >
                </div>
              </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-6 mb-4 w-25">
                  <div class="form-outline">
                  <select
                    name="birth-day"
                    disabled
                    readonly
                    class="form-select rounded-pill"
                    aria-label=".form-select-lg example"
                  >
                    <option selected><?php echo $_SESSION["birthday"] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                   <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >Birth Day</label
                    >
                </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="email"
                      name="email"
                      disabled
                      readonly
                      value=<?php echo $_SESSION["email"] ?>
                      placeholder="Use UE Domain Email."
                      pattern="^[a-zA-Z0-9-.]+@ue.edu\.ph$"
                      id="form3Example1m"
                      class="form-control rounded-pill"
                    />
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >Email</label
                    >
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      name="phone-number"
                      type="number"
                      disabled
                      readonly
                      value="<?php echo $_SESSION["phoneNumber"] ?>"
                      onKeyDown="if(this.value.length==11 && event.keyCode>47 && event.keyCode < 58)return false;"
                      id="form3Example1n"
                      class="form-control rounded-pill"
                    />
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1n"
                      >Phone Number</label
                    >
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <select
                    name="gender"
                    disabled
                    readonly
                    class="form-select rounded-pill"
                    aria-label=".form-select-lg example"
                  >
                    <option selected><?php echo $_SESSION["gender"] ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to mention">
                      Prefer not to mention
                    </option>
                  </select>
                    <label
                      unselectable="on"
                      onselectstart="return false;"
                      onmousedown="return false;"
                      class="form-label ms-2"
                      for="form3Example1m"
                      >Gender</label
                    >
                  </div>
                </div>
              </div>

              <div class="col d-flex justify-content-center">
                <a
                  href="UpdateAccount.php?updateid=<?php echo $_SESSION["id"]?>&updateyearLevel=<?php echo $_SESSION["yearLevel"]?>&updatecourse=<?php echo $_SESSION["course"]?>&updateemail=<?php echo $_SESSION["email"]?>&updatephoneNumber=<?php echo $_SESSION["phoneNumber"]?>&updategender=<?php echo $_SESSION["gender"]?>"
                  class="btn btn-outline-dark mt-2 w-50 mb-2 rounded-pill"
                >
                  Edit
                </a>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark mt-2 w-50 mb-2 ms-1 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Delete
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Delete Account?
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
              <a
              href="DeleteAccount.php?deleteid=<?php echo $_SESSION["id"]?>"
              class="btn btn-outline-dark"
              >
              Delete
              </a>
              </div>
              </div>
              </div>
              </div>
              </div>

                <a
                  href="index.php"
                  class="btn btn-outline-dark mt-2 w-100 mb-2 rounded-pill"
                >
                  Logout
                </a>

            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.js"></script>
  </body>
</html>