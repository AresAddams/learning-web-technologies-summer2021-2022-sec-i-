<?php

?>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<form action="loginCheck.php" method="post" enctype="">
			<fieldset style="width:10%">
				<legend><h3>Log In</h3></legend>
				<table>
					<tr>
						<td>User ID</td>
					</tr>
						<tr>
							<td><input type="text" name="username" value=""></td>
						</tr>
					<tr>
						<td>Password</td>
					</tr>
					<tr>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
						</tr>
						<tr>
						<td>
							<input type="submit" name="" value="Login">
							<a href="reg.php" style="text-decoration:none">Register</a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
