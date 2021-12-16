<?php 

 include "Database.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST["deleteid"]);
    $deletedBy = trim($_POST["DeletedBy"]);

    $sql = "DELETE FROM purok where id = '$id'";
    $result = mysqli_query($mysqli,$sql);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $deleteTransactionID = $year.$month.$day.$hour.$minute.$seconds;

    $deleted = "Deleted Purok". " " .$deleteTransactionID;

    if($result){

        $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
        ('$deleted', '$deletedBy')";
        $query_run2 = mysqli_query($mysqli, $sql2);       

        header('location:ManagePurok.php');

    } else {

        die(mysqli_error($mysqli));

    }
    
 }

?>