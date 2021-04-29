<?php
require("includes/config.inc.php");
include('views/header.html');

//need a check for employee in database 
//if user found send to empInfo.php
//else send to newEmp.php
//How to send employees to empInfo and admins to adminInfo?
//if()
?>
</br>
<h2 align="center">Employee LogIn</h2>
<form action="empInfo.php" method='post'>
	<fieldset>
		<legend>Enter Employee Login Information</legend>
		<label>Employee Name: <input type="text" id="empName" name="empName" required /></label></br></br>
		<label>Employee Id: <input type="password" id="empId" name="empId" inputmode="numeric" required /></label></br><hr>
		<input type="submit" name="loginBtn" value="Log In" />
	</fieldset>
</form>
<?php
require('views/footer.html');
?>
