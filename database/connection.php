<?php


	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "capstone";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;

?>
