<?php
session_start();
require_once('../model/userModel.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == null || $password == null) {
    echo "invalid username/password <br>";
} else {

    $status = login($username, $password);

    if ($status) {
        setcookie('status', 'true', time() + 3600, '/');
        header('location: ../view/home.html');
    } else {
        echo "invalid user!";
    }
}
