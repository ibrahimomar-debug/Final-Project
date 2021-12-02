<!DOCTYPE html>
<html>
<body>

<?php
require_once "AdminDatabase.php";

$sql = "SELECT id, firstName, lastName FROM users";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstName"]. " " . $row["lastName"] . "<br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();
?>