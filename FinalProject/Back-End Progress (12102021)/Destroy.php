<?php

require_once "AdminDatabase.php";

session_start();

$log = 'Admin'." ".$_SESSION["firstName"]. " ".$_SESSION["lastName"]. " " ."Logged Out";

$sql = "INSERT INTO accountlog (log) VALUES 
('$log')";
$query_run = mysqli_query($mysqli, $sql);

session_destroy();

header("location: index.php");

?>