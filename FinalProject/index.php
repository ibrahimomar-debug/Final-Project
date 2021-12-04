<?php
    include 'header.php';

?>

<body class="bg">
        <div class="page-wrapper bg">
        <div class="bg">
            <div class="container bg">
                <div class="login-wrap bg">
                    <div class="login-content login-content-style text-white">
                        <div class="login-logo">
                            <a href="#">
                            <img src="images/icon/brgy.png">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="includes/login-inc.php" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                    <div class="invalid" id="user-tooltip">
                                        error message 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Password</label>
                                    <input type="password" class="form-control" name="pwd" placeholder="Enter Password">
                                    <div class="invalid" id="pass-tooltip">
                                        error message 
                                    </div>
                                    </div class="mt-2">
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"name="login">Sign in</button>
                            </form>
                            <div class="register-link">
                            <!--   <p>
                                Don't you have account?
                                <a href="#">Sign Up Here</a>
                                </p> -->
                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>



<?php
    include 'footer.php';
?>