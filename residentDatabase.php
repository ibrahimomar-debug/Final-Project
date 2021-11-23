<?php

class Ajax{

	public $server = "localhost";
	public $user = "root";
	public $password = "";
	public $db = "residentinfo_db";

	public $con;

	function __construct(){
		$this->con = new mysqli($this->server,$this->user,$this->password,$this->db);

		if ($this->con->connect_error){
			die('Connecetion Failed :' . $this->con->connect_error);
		}
	}

	// Insert Data Functions to Database

	function insert_data($famName, $fName, $mName, $alias, $fmark, $bdate, $bplace, $sexOption, $nation, $relbel, $occupation, $spname, $spOccu, $voterOption, $cityAdd, $provinceAdd, $purok, $emailAdd, $hNumberOne, $hNumberTwo, $mNumberOne, $mNumberTwo, $resType, $resStatus){

		$sql = "INSERT INTO residentinfo_table (famName, firstName, midName, alias, faceMarks, birthday, birthplace, gender, nationality, religion, 	occupation, spouseName, spouceOccupation, votertStatus, cityAddress, provincialAddress, purok, emailAddress, homeNumber1, homeNumber2, mobileNumber1, mobileNumber2, residentType, residentStatus) VALUES ('". $famName . "','". $fName . "', '". $mName . "', '". $alias . "', '". $fmark . "', '". $bdate . "', '". $bplace . "', '". $sexOption . "', '". $nation . "', '". $relbel . "', '". $occupation . "', '". $spname . "', '". $spOccu . "', '". $voterOption . "', '". $cityAdd . "', '". $provinceAdd . "', '". $purok  ."', '". $emailAdd . "', '". $hNumberOne  ."', '". $hNumberTwo . "','". $mNumberOne . "','". $mNumberTwo . "', '". $resType . "', '". $resStatus . "')";

		if ($this->con->query($sql) == TRUE) {
			return 'Record Successfully into database';
		}else{
			return 'Error in: '. $sql . 'with' . $this->con->error;
		}

		$this->con->close();
	}

	// Get Data from the Server

	
}


?>