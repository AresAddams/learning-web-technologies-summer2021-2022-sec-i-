<html>

<head>
	<title>Login form</title>
</head>

<body>
	<form method="POST" action="controllers/loginCheck.php">
		<center style="margin:200px;">
			<fieldset style="width: 50% ;">
				<form action="../controller/loginCheck.php" method="post" enctype="">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/AIUB_whole_logo.png/240px-AIUB_whole_logo.png" alt="" style="height: 90px ;">
					<h1>
						American International University-Bangladesh

					</h1>


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
								<h3><button><a href="Views/Register.php">Register</a></button></h3>
							</td>
						</tr>

					</table>
				</form>

			</fieldset>
		</center>
</body>

</html>