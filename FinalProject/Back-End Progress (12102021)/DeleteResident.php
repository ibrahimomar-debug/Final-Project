<?php 

 require_once "ResidentDatabase.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST["deleteid"]);
    $deleteResidentID = trim($_POST["DeleteResidentID"]);
    //$deleteTransactionID = trim($_POST["DeleteTransactionID"]);   
    $deletedBy = trim($_POST["DeletedBy"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $deleteTransactionID = $year.$month.$day.$hour.$minute.$seconds;

    $deleted = "Deleted Resident". " " .$deleteResidentID. " " .$deleteTransactionID;

    $sql = "DELETE FROM residentdata where id = '$id'";
    $result = mysqli_query($mysqli,$sql);

    if($result){

        $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
        ('$deleted', '$deletedBy')";
        $query_run2 = mysqli_query($mysqli, $sql2);

        header('location:ManageResident.php');

    } else {

        die(mysqli_error($mysqli));

    }
    
 }

?>