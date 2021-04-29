<?php

	require("includes/config.inc.php");

	//require(MYSQL); //the database connection
		
	include('views/header.html');
	
	
	
	//logic related to getting data from database
	

	require('views/footer.html');
?>
<h2 align="center">Time Off Request Confirmation</h2>
<fieldset>
	<legend>Time Off Request</legend>
<?php
	
	$bD = $_POST['begDate'];
	$eD = $_POST['endDate'];
	$bT = $_POST['begTime'];
	$eT = $_POST['endTime'];
	
	echo "Time off has been submitted"."</br>";
	echo "You have requested off the dates: ".$bD." "."to"." ".$eD.".";
	echo"</br>";
	echo "You have requested off the time: ".$bT." "."to"." ".$eT;
	
	
?>
</fieldset>
