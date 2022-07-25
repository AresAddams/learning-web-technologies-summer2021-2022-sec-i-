<?php 
	
	session_start();
	unset($_SESSION['status']);
	unset($_SESSION['user']);
	
	header('location: ../Index.php');

?>