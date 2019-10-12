<?php
	session_start();
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="POST" action="login.php">
	<label>Username:</label> <input type="text" name="username">
	<label>Password:</label> <input type="password" name="password"><br><br>
	<input type="checkbox" name="remember"> Remember me <br><br>
	<input type="submit" value="Login" name="login">
	</form>

	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>
