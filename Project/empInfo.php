<?php
 //get employee info from database
 //display fName, lName, empID other employee data
 
 	require("includes/config.inc.php");

	//require(MYSQL); //the database connection
		
	include('views/header.html');
	

?>
<html>
	<body>
<!--display employee data and clock-in, clock-out, break -->
<!--send data to database and display -->
<div class="row">
	<div class="column">
		<form method='post'>
			<fieldset>
				<legend>Actions</legend>
					<button type="button" id="clockIn" name="clockIn" onclick="cI()">Clock In</button></br>
					<button type="button" id="clockOut" name="clockOut" onclick="cO()">Clock Out</button></br>
					<button type="button" id="breakOut" name="breakOut" onclick="bO()">Break Out</button></br>
					<button type="button" id="breakIn" name="breakin" onclick="bI()">Break In</button></br>
			</fieldset>
		</form>
	</div>
<div class="column">
<!-- div to display the above information when clicked-->
	<fieldset>
		<legend>Employee Information</legend>
		<lbl>Time In: <p id="timeIn" name="timeIn"></p></lbl></br>
		<lbl>Time Out: <p id="timeOut" name="timeOut"></p></lbl></br>
		<lbl>Break Out: <p id="breakTimeOut" name="breakTimeOut"></p></lbl></br>
		<lbl>Break In: <p id="breakTimeIn" name="breakTimeIn"></p></lbl></br>
	</fieldset>
</div>
</div>


</body>
</html>
<?php

	require('views/footer.html');

?>
