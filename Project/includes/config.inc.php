
<?php

	define('MYSQL', 'mysql.inc.php');
	define('BASE_URL', 'localhost/Project');
	
	//other utlity functions

	
	//redirect fucntion 
	function redirect_invalid_user(){
			if ( !isset($_SESSION['email'] ) ){
				$url = "http://localhost/test2/Project/empLogin.php";
				header("Location $url");
				exit();
			}
		}
	
	
?>
