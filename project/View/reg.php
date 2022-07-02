<?php
require_once('../controller/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <center>
        <form action="../controller/regCheck.php" method="post" enctype="">
            <fieldset style="width: 50%;">
                <legend>
                    <h3>Registration</h3>
                </legend>
                <table>
                    <tr>
                        <td>
                            Username
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Password
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="password" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" name="email" value="">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            User Type
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <input type="radio" name="usertype">Admin
                            <input type="radio" name="usertype">Faculty
                            <input type="radio" name="usertype">Student
                            <input type="radio" name="usertype">Staff

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="Signup" value="Sign up">
                            <a href="login.html" style="text-decoration:none">Login</a>
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </center>
</body>

</html>