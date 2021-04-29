<?php

	require("includes/config.inc.php");

	//require(MYSQL); //the database connection					
				
	
	include('views/header.html');
	
	
	
	
	//logic related to getting data from database
	
	if( !isset($_POST['newEmpBtn']) ){


?>
<h2 align="center">New Employee Information</h2>
	<form action="newEmp.php" method="post">
		<fieldset>
		<legend>Enter New Employee Information</legend>
	<p><label>First Name: </label><input type="text" name="fName" /></p></br>
	<p><label>Last Name: </label><input type="text" name="lName" /></p></br>
	<p><label>Address: </label><input type="text" name="address" /></p></br>
	<p><label>Phone Number: </label><input type="tel" id="phone" name="phone"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="(123)-456-7890" /></p></br>
	<p><label>Date of Birth: </label><input type="date" name="dob" /></p></br>
	<p><label>Employee Id: </label><input type="password" name="empId" inputmode="numeric" /></p></br>
	<p><label>Manager: <input type="checkbox" name="manager" class="inline checkbox" id="checkbox1" value="True"></p></br><hr>
	<input type="submit" name="newEmpBtn" value="Create New Employee" id="regBtn" />
	</form>
	</fieldset>

<?php
			
		}
		else{
			//Display a message after inserting into database that the new employee was created/ show informtation
			//insert to new employees here
			
			$fN = $_POST['fName'];	
			$lN = $_POST['lName'];
			$addr = $_POST['address'];
			$pN = $_POST['phone'];
			$dob = $_POST['dob'];
			$man = $_POST['manager'];
			
			$fullName = ($fN." ".$lN);
			
			echo "New Employee Added."."</br>";	
			echo ("Employee Name: ".$fullName."</br>");
			echo ("Address: ".$addr."</br>");	
			echo ("Phone Number: ".$pN."</br>");	
			echo ("Date Of Birth: ".$dob."</br>");	
			echo ("Manager: ".$man."</br>");	
		}


	require('views/footer.html');
?>
</body>
</html>
