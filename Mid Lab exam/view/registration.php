<!DOCTYPE html>
<html>
<head>
	<title>Registraion Page</title>
</head>
<body>

	<form method="post" action="../controller/regCheck.php">
		<fieldset>
			<legend>Registraion</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td><input type="password" name="repass"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>
						<input button="User" button="Admin">
					</td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="login.php">Log In</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>