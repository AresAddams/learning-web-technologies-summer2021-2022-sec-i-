<?php 

	$id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];
	$name = $_REQUEST['name'];
	$usertype = $_REQUEST['usertype'];
    
		if($password == $password){
			$_SESSION['status'] = true;
			header('location: login.php');
		}else{
			echo "Wrong Password";
		}
	

	if ($id == null || $password == null || $name == null || $usertype == null) {
		echo "invalid id/password/name/ <br>";
	}else{
		$data = $id."|".$password."|".$name."|".$usertype."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.php');
			}
	}



?>