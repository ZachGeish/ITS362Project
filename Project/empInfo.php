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
		<form action="empInfo.php" method='post'>
			<fieldset>
				<legend>Actions</legend>
			<input type="button" value="Clock In" name="clockIn" id="clockIn"></br>
			<input type="button" value="Clock Out" name="clockOut" id="clockOut"></br>
			<input type="button" value="Break Out" name="breakOut" id="breakOut"></br>
			<input type="button" value="Break In" name="breakIn" id="breakIn"></br>
			
			
			</fieldset>
		</form>
	</div>
<div class="column">
<!-- div to display the above information when clicked-->
	<fieldset>
		<legend>Employee Information</legend>
		<lbl>Time In: <input type="datetime-local" value="" id="timeIn"></lbl></br>
		<lbl>Time Out: <input type="datetime-local" value="" id="timeOut"></lbl></br>
		<lbl>Break Out: <input type="datetime-local" value="" id="breakTimeOut"></lbl></br>
		<lbl>Break In: <input type="datetime-local" value="" id="breakTimeIn"></lbl></br>
	</fieldset>
</div>
</div>


</body>
</html>
<?php

	require('views/footer.html');

?>
