<?php
	
	require 'residentDatabase.php';

	// Insert Data in sql

	if (isset($_REQUEST['form'])) {
		
		$data = $_REQUEST['form'];
		$insert = new Ajax();

		$famName = $data['famName'];
		$fName = $data['fName'];
		$mName = $data['mName'];
		$alias = $data['alias'];
		$fmark = $data['fmark'];
		$bdate = $data['bdate'];
		$bplace = $data['bplace'];
		$sexOption = $data['sexOption'];
		$nation = $data['nation'];
		$relbel = $data['relbel'];
		$occupation = $data['occupation'];
		$spname = $data['spname'];
		$spOccu = $data['spOccu'];
		$voterOption = $data['voterOption'];
		$cityAdd = $data['cityAdd'];
		$provinceAdd = $data['provinceAdd'];
		$purok = $data['purok'];
		$emailAdd = $data['emailAdd'];
		$hNumberOne = $data['hNumberOne'];
		$hNumberTwo = $data['hNumberTwo'];
		$mNumberOne = $data['mNumberOne'];
		$mNumberTwo = $data['mNumberTwo'];
		$resType = $data['resType'];
		$resStatus = $data['resStatus'];


		$message = $insert->insert_data($famName, $fName, $mName, $alias, $fmark, $bdate, $bplace, $sexOption, $nation, $relbel, $occupation, $spname, $spOccu, $voterOption, $cityAdd, $provinceAdd, $purok, $emailAdd, $hNumberOne, $hNumberTwo, $mNumberOne, $mNumberTwo, $resType, $resStatus);

		echo $message;
	}

	if (isset($_REQUEST['bool'])) {
		
		$get = new Ajax();

		$getarray = $get->get_data();

		echo json_encode($getarray);
	}
     
?>