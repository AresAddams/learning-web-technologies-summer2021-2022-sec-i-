<?php

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <center style="margin:200px;">
        <fieldset style="width: 40%  ;">
            <form action="../controller/loginCheck.php" method="post" enctype="" onsubmit="return validate()">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/AIUB_whole_logo.png/240px-AIUB_whole_logo.png" alt="" style="height: 90px ;">
                <h3>
                    American International University-Bangladesh

                </h3>
                <table>
                    <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Login"></td>
                    </tr>

                    <tr>
                        <td>
                            <h3>Don't have an account?</h3>
                        </td>
                        <td>
                            <h3><button><a href="../view/reg.php">Register</a></button></h3>
                        </td>
                    </tr>

                </table>


        </fieldset>
    </center>
    </form>
</body>

</html>