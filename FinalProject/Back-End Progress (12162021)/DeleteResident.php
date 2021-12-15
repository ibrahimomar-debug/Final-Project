<?php 

 include "Database.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST["deleteid"]);
    $deleteResidentID = trim($_POST["DeleteResidentID"]);
    //$deleteTransactionID = trim($_POST["DeleteTransactionID"]); 
    $deletePurok = trim($_POST["DeletePurok"]);  
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

        $sql3 = "SELECT purok from residentdata where purok = '$deletePurok'";
        $result2 = $mysqli->query($sql3);

        $total = mysqli_num_rows($result2);

        $sql4 = "UPDATE purok SET population = '$total' WHERE purok = '$deletePurok'";
        $query_run3 = mysqli_query($mysqli, $sql4);

        $sql2 = "INSERT INTO logs (action, processedBy) VALUES 
        ('$deleted', '$deletedBy')";
        $query_run2 = mysqli_query($mysqli, $sql2);

        header('location:ManageResident.php');

    } else {

        die(mysqli_error($mysqli));

    }
    
 }

?>