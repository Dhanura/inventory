<?php
	session_start();

	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('config.php');
	$query=mysqli_query($conn,"select * from 'users' where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Setting Up Cookie on User Login</title>
</head>
<body>
	<h2>Login Success</h2>
  <p>ahsdisbdisdisndsaidniasndjasnidnsajdniasndijsancsncsnisncijnianscisancisancijsancisaic</p>
	<?php echo $row['user_name']; ?>
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>
