<?php
if(isset($_POST['register'])){
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$middleName = $_POST['mname'];

	$officePosition = $_POST['position'];
	$adminUsername = $_POST['user'];
	$adminPassword = $_POST['pass'];
	$adminConfirmPassword = $_POST['passrpt'];

	if ($adminPassword == $adminConfirmPassword) {
	insertRecord($firstName,$lastName,$middleName,$residentID,$officePosition,$adminUsername,$adminPassword);      
	}else{
		echo '<script>
				  alert("Passwrod Mismatch!");
					</script>';

		echo '<script>
				window.history.go(-1);
					</script>';
		}

	function insertRecord($firstname,$lastname,$middleName,$residentID,$officePosition,$adminUsername,$adminPassword) {
	 try {
	 require 'adminDatabase.php';
		 
	  $sql = "INSERT INTO admins_db (firstName, lastName, midName, officePosition, username, password ) VALUES (?,?,?,?,?,?)";
 
 
// use exec() because no results are returned 
 $conn->prepare($sql)->execute([$firstname,$lastname,$middleName,$residentID,$officePosition,$adminUsername,$adminPassword]);


echo '<script>
		  alert("Congratulations, you are now registered!");
	</script>';
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
}

}
		
?>