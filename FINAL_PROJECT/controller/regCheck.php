<?php
require_once('../Model/signupModel.php');

if (isset($_POST['submit'])) {


    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $type = $_POST['type'];
    if ($userName != null && $password != null && $email != null) {
        if (strlen($password) < 4) {
            echo "Password should be at least 4";
            return;
        }
        if ($password !== $confirmPassword) {

            echo "confirm password should be matched with password";
            return;
        }

        $user = "|" . $userName . "|" . $email . "|" . $password . "|" . $type . "\r\n";

        $file = fopen('../model/reg.txt', 'a+');
        fwrite($file, "$user");
        fclose($file);

        $file2 = fopen('../model/user.txt', 'a+');
        $loginInfo = "|" . $userName . "|" . $password . "|" . $type . "\r\n";
        fwrite($file2, "$loginInfo");
        fclose($file2);
        header('location: ../index.php');

        $userArray = explode('|', $user);
    } else {
        echo "Please Fill up the box properly";
    }
}
