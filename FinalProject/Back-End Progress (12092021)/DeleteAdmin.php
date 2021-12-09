<?php 

 require_once "AdminDatabase.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST["deleteid"]);

    $sql = "DELETE FROM admindata where id = '$id'";
    $result = mysqli_query($mysqli,$sql);

    if($result){

        header('location:ManageAdmin.php');

    } else {

        die(mysqli_error($mysqli));

    }
    
 }

?>