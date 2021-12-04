<?php

if(isset($_POST['login'])){

    $uid = $_POST['username'];
    $pwd = $_POST['pwd'];

    include "../classes/db-classes.php";
    include "../classes/login-classes.php";
    include "../classes/login-control-classes.php";
    $login = new loginContr($uid,$pwd);

    
    $login->loginUser();

    header("location: ../dashboard.php?error=none");
}