<html>

<head>
    <title>Registration</title>
</head>

<body>
    <center style="margin:200px;">
        <fieldset style="width: 40%  ;">
            <legend><b>REGISTRATION</b></legend>
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/AIUB_whole_logo.png/240px-AIUB_whole_logo.png" alt="" style="height: 90px ;">
            <h3>
                American International University-Bangladesh

            </h3>
            <form onsubmit="return validate()">
                Username <br>
                <input name="userName" id="username" type="text">
                <span id="usernameErrorMessage" style="color: red"></span> <br>
                Email <br>
                <input name="email" id="email" type="text">
                <span id="emailErrorMessage" style="color: red"></span> <br>
                Password<br>
                <input name="password" id="password" type="password">
                <span id="passErrorMessage" style="color: red"></span><br>
                Confirm Password<br>
                <input name="confirmPassword" id="confirmpassword" type="password">
                <span id="cpassErrorMessage" style="color: red"></span><br>
                User Type
                <hr>
                <input type="radio" name="type" value="universityManagement">Faculty
                <input type="radio" name="type" value="student">Student
                <input type="radio" name="type" value="admin">Admin
                <input type="radio" name="type" value="staff">Staff
                <hr />
                <input type="submit" name="submit" value="Sign Up">
            </form>
        </fieldset>
        <script>
            function validate() {
                let valid = true
                let username = document.getElementById('username').value;

                if (username != "") {

                    document.getElementById('usernameErrorMessage').innerHTML = username;
                    document.getElementById('usernameErrorMessage').style.color = "green";
                } else {
                    document.getElementById('usernameErrorMessage').innerHTML = 'Username is required';
                    document.getElementById('usernameErrorMessage').style.color = "red";
                    valid = false;
                }

                //email validation
                let email = document.getElementById('email').value;
                if (email == '') {
                    document.getElementById('emailErrorMessage').innerHTML = 'Empty Email field ';
                    valid = false;
                } else if (email.length < 3) {
                    document.getElementById('emailErrorMessage').innerHTML = 'Email is invalid !';
                    valid = false;
                } else if (email.includes("@gmail.com")) {
                    document.getElementById('email').innerHTML = email;
                } else if (email.includes("@yahoo.com")) {
                    document.getElementById('email').innerHTML = email;
                } else if (email.includes("@.edu")) {
                    document.getElementById('email').innerHTML = email;
                } else {
                    document.getElementById('emailErrorMessage').innerHTML = 'Email is invalid !';
                    valid = false;
                }

                //password validation
                let password = document.getElementById('password').value;
                if (password == '') {
                    document.getElementById('passErrorMessage').innerHTML = 'Empty Password field ';
                    valid = false;
                } else if (password.length < 4) {
                    document.getElementById('passErrorMessage').innerHTML = 'Password is short ! require minimum 5 characters';
                    valid = false;
                } else if (password.length > 10) {
                    document.getElementById('passErrorMessage').innerHTML = 'Password is long ! require minimum 5 characters';
                    valid = false;
                } else {
                    document.getElementById('password').innerHTML = password;

                }
                //confirm password validation
                let confirmpassword = document.getElementById('confirmpassword').value;
                if (confirmpassword == '') {
                    document.getElementById('cpassErrorMessage').innerHTML = 'Empty Confirm Password field ';
                    valid = false;
                } else if (confirmpassword != password) {
                    document.getElementById('cpassErrorMessage').innerHTML = 'Confirm Password is not matched !';
                    valid = false;
                } else {
                    document.getElementById('confirmpassword').innerHTML = confirmpassword;
                }
                return valid;

            }
        </script>
</body>

</html>