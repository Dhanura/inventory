<?php
	if(isset($_POST['login'])){

		session_start();
		include('config.php');

		$username=$_POST['username'];
		$password=$_POST['password'];

		$query=mysqli_query($link,"select * from `users` where user_name='$username' && user_password='$password'");
		$role_query=mysqli_query($link,"select user_role from 'users' where user_name='$username' && user_password='$password'");
		$result = mysqli_fetch_assoc($query);
		echo($role_query);
		if (mysqli_num_rows($query) == 1) {
			if (in_array('Admin',$result["user_role"])){
			// $_SESSION['message']="Login Failed. User not Found!";

			header('location:dashboard1.php');
			} elseif (mysqli_fetch_array($role_query) == 'Department User') {
			// code...
			header('location:dashboard1.php');
			} elseif (mysqli_fetch_array($role_query) == 'Inventory Handler') {
			// code...
		 header('location:items/manage_items.php');
	 		} else {
			// code...
			header('location:items/quotations/add_quotation.php');
			}
			header('location:dashboard.php');
		}
		else{
			$row=mysqli_fetch_array($query);

			// if (isset($_POST['remember'])){
			// 	//set up cookie
			// 	setcookie("user", $row['username'], time() + (86400 * 30));
			// 	setcookie("pass", $row['password'], time() + (86400 * 30));
			// }

			$_SESSION['id']=$row['userid'];
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:index.php');
		}
	}
	else{
		header('location:index.php');
		$_SESSION['message']="Please Login!";
	}
?>
