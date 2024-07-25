<?php
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];

$pass1 = bin2hex($pass);

include('config.php');
echo $sql = "select * from movie_login where  L_EMAIL = '{$email}' and L_PASSWORD = '{$pass1}'";
$result = mysqli_query($con, $sql) or die("not database");

if ($row = mysqli_fetch_assoc($result)) {
	$_SESSION['user'] = $row['L_ID'];
	header("location: index.php");
} else if ($email == "admin" && $pass == "1220") {
	$_SESSION['ad'] = "Admin";
	header("location: admin/index.php");
} else {
	$_SESSION['error'] = "Login Failed!";
	header("location: login.php");
}

mysqli_close($con);

?>