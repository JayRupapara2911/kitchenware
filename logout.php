<?php 
	session_start();
	unset($_SESSION['login']);
	unset($_SESSION['cart']);
	header("location:index-2.php");
	
?>
