<?php 

 require_once('db.php');

 function validate ($username , $password){
 	$con = getConnection();
 	$sql = "select * from signup where username = '{$username}' and password = '{$password}'";
 	$result = mysqli_query($con , $sql);
	$data = mysqli_fetch_assoc($result);

	if($data !=null){
		return true;
	}
	else{
		return false;
	}
 }
 function addEmp($user){
		$con = getConnection();
		$sql = "insert into signup values('','{$user['name']}' , '{$user['email']}' , '{$user['username']}' , '{$user['password']}' , '{$user['gender']}' , '{$user['dob']}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
