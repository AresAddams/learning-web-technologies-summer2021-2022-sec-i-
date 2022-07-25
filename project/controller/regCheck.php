<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$usertype = $_REQUEST['usertype'];
$fname = $_REQUEST['fname'];

if ($username == null || $password == null || $email == null || $usertype == null) {
	echo "invalid username/password/email <br>";
} else {
	$data = $username . "|" . $password . "|" . $email . "|" . $usertype . "\r\n";
	$file = fopen('../model/user.txt', 'a');
	fwrite($file, $data);

	if ($fname == "create") {
		header('location: home.php');
	} else {
		header('location: ../View/login.html');
	}
}
