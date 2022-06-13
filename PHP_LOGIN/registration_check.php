<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	

	if($username == null  && $email == null && $password == null){
        echo "invalid username/password ";
    }else{
        if($username == $password){
            $_SESSION['status'] = true; 
		    header('location: index.php');

	}else{
		echo "Invalid Request Try Again";
	}
}
}
?>