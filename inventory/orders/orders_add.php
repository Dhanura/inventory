<?php
// include('config.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['orders_add'])){
  $item_name=$_POST['item_name'];
	$quantity=$_POST['quantity'];
  $unit_price=$_POST['unit_price'];
	$total_price=$_POST['total_price'];
  $date=$_POST['order_date'];}

	// mysqli_query($conn,"insert into users (user_name, email, password, department_id, department_name) values ('$user_name', '$email', '$password', '$department_id', '$department_name')");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO order_details (item_name, quantity, unit_price, total_price, date) VALUES ('$item_name','$quantity','$unit_price','$total_price','$date')";

// $sql = "INSERT INTO users (user_name, user_email, password, department_id, department_name)
// VALUES ('$user_name', '$user_email', '$password', '$department_id', '$department_name')";

if (mysqli_query($conn, $sql)) {
    echo "Order created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



  // $query=mysqli_query($conn,"select * from `users` where user_name='$username' && user_password='$password'");
  //
  //
  // if (mysqli_num_rows($query) == 1){
  //   $_SESSION['message']="Login Failed. User not Found!";
  //
  //   header('location:index.php');
  // }
  // else{
  //   $row=mysqli_fetch_array($query);
  //
  //   // if (isset($_POST['remember'])){
  //   // 	//set up cookie
  //   // 	setcookie("user", $row['username'], time() + (86400 * 30));
  //   // 	setcookie("pass", $row['password'], time() + (86400 * 30));
  //   // }
  //
  //   $_SESSION['id']=$row['userid'];
  //   header('location:dashboard.php');
  // }

?>
