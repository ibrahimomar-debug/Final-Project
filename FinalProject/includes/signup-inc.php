<?php

if(isset($_POST['registerAdmin'])){
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$middleName = $_POST['mname'];
	$officePosition = $_POST['position'];
	$adminUsername = $_POST['user'];
	$adminPassword = $_POST['pass'];
	$adminConfirmPassword = $_POST['passrpt'];

    include "../classes/db-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-control-classes.php";
    
    $signup = new SignupController($firstName,$lastName,$middleName,$officePosition,$adminUsername,$adminPassword,$adminConfirmPassword);

    
    $signup->signupUser();

    header("location: ../Manage_Admin.php?error=none");
}

if(isset($_POST['registerResident'])){
	$famName = $_POST['famName'];
	$fName = $_POST['fName'];
	$mName = $_POST['mName'];
	$alias = $_POST['alias'];
	$fmark = $_POST['fmark'];
	$bdate = $_POST['bdate'];
	$bplace = $_POST['bplace'];
	$sexOption = $_POST['sexOption'];
	$civilStatus = $_POST['civilstatus'];
	$nation = $_POST['nation'];
	$relbel = $_POST['relbel'];
	$occupation = $_POST['occupation'];
	$spname = $_POST['spousename'];
	$spOccu = $_POST['spouseoccupation'];
	$voterOption = $_POST['voterOption'];
	$cityAdd = $_POST['cityAdd'];
	$provinceAdd = $_POST['provinceAdd'];
	$purok = $_POST['purok'];
	$emailAdd = $_POST['emailAdd'];
	$hNumberOne = $_POST['hNumberOne'];
	$hNumberTwo = $_POST['hNumberTwo'];
	$mNumberOne = $_POST['mNumberOne'];
	$mNumberTwo = $_POST['mNumberTwo'];
	$resType = $_POST['resType'];
	$resStatus = $_POST['resStatus'];

    include "../classes/db-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-control-classes.php";
    
    $signup = new SignupResidentController($famName,$fName,$mName,$alias,$fmark,$bdate,$bplace,$sexOption,$civilStatus,$nation,$relbel,$occupation,$spname,$spOccu,$voterOption,$cityAdd,$provinceAdd,$purok,$emailAdd,$hNumberOne,$hNumberTwo,$mNumberOne,$mNumberTwo,$resType,$resStatus);

    
    $signup->signupUserResident();

    header("location: ../Manage_Information.php?error=none");
}
