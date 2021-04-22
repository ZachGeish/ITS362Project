<?php

//this file contains the database info for connectting to a database
//establisehs connection to the MySQL and selects the database
//includes a hashing function fo the password

//set the  database access information as constants
DEFINE('DB_USER','its362');
DEFINE('DB_PASSWORD','toor');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','???');

//make the connection to the database
$dbh = new PDO('mysql:host=localhost;dbname=???', DB_USER, DB_PASSWORD);

function get_password_hash($password){
		return hash_hmac('sha256', $password, 't#ixE78654', true);
	}


?>
