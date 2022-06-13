<?php 
	session_start();

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($username == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		if($username == $password){
			$_SESSION['status'] = true;
			header('location: index.php');
		}else{
			echo "invalid user";
		}
	}
?>