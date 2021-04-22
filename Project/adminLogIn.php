<?php
require("includes/config.inc.php");
include('views/header.html');

//need a check for employee in database 
//if user found send to empInfo.php
//else send to newEmp.php
?>
</br>
<form action="empInfo.php" method='post'>
	<fieldset>
		<legend>Enter Manager Login Information</legend>
		<label>Manager Name: <input type="text" id="empName" name="empName" required /></label></br></br>
		<label>Manager Id: <input type="password" id="empId" name="empId" inputmode="numeric" required /></label></br><hr>
		<input type="submit" name="loginBtn" value="Log In" />
</fieldset>
	
</form>
<?php
require('views/footer.html');
?>
