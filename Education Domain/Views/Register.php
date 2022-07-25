<html>

<head>
    <title>Registration</title>
</head>

<body>
    <fieldset>
        <legend><b>REGISTRATION</b></legend>
        <form method="POST" action="../controllers/registrationCheck.php">

            Username<br>
            <input name="userName" type="text"><br>
            Email<br>
            <input name="email" type="text"><br>
            Password<br>
            <input name="password" type="password"><br>
            Confirm Password<br>
            <input name="confirmPassword" type="password"><br>
            User Type<br>
            <hr>
            <input type="radio" name="type" value="universityManagement">Faculty
            <input type="radio" name="type" value="student">Student
            <hr />
            <input type="submit" name="submit" value="Sign Up">




        </form>
    </fieldset>
</body>

</html>