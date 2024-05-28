<?php 
	$servername = "localhost";
	$dbname = "kichanwer";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	

	if(!$conn){
		die("Operation Failed = ".mysqli_connect_error());
	}
	
?>