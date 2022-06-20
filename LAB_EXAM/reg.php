<?php


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
    <form action="regCheck.php" method="post">
        <fieldset style="width: 10%;">  
            <legend>    
                <h3>Registration</h3>  
            </legend>
            <table>
            <tr>
                <td>
                    ID
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" name="id">
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
                   Confirm Password
                </td>
            </tr>
            <tr>
                <td>
                <input type="password" name="password" value="">
                </td>
            </tr>

            <tr>
                <td>
                    Name
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" name="name">
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
                    <input type="radio" name="usertype">User
                    <input type="radio" name="usertype">Admin
                </td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Signup" value="Sign up">
                    <a href="login.php" style="text-decoration:none">Sign In</a>  
                </td>
            </tr>
            
        </table>
        </fieldset>
    </form>
</body>
</html>