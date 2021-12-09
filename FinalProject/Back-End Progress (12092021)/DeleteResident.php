<?php 

 require_once "ResidentDatabase.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST["deleteid"]);

    $sql = "DELETE FROM residentdata where id = '$id'";
    $result = mysqli_query($mysqli,$sql);

    if($result){

        header('location:ManageResident.php');

    } else {

        die(mysqli_error($mysqli));

    }
    
 }

?>