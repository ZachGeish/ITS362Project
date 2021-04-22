<?php
//send user to a page that displays time of request and alerts them that
//the request was submited

	require("includes/config.inc.php");

	//require(MYSQL); //the database connection
		
	include('views/header.html');
	

?>
<h2 align="center"> Time Off Request</h2>
<form action="reqOffConfim.php">
	
	<fieldset>
		<legend>Time Off Request</legend>
	<p><label>Begining Date: </label><input type="date" name="begDate" required /></p></br>
	<p><label>End Date: </label><input type="date" name="endDate" /></p></br>
	
	<p><label>Begining Time: </label><input type="time" name="begTime" /></p></br>
	<p><label>End Time:</label><input type="time" name="endTime" /></p></br>

<hr>
<input type="submit" value="Request Off" id="timeBtn" />
</form>
</fieldset>
